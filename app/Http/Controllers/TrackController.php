<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Track;
use App\TrackGroup;
use App\User;
use App\Order;
use App\OrderItem;
use App\Currency;
use App\TrackStatus;

class TrackController extends AppController
{

    private function generateInvoice()
    {
        $invoice_number = strtoupper(substr(md5(uniqid(rand(), true)), 0, 10));
        $exists = Order::where('invoice_number', '=', $invoice_number)->pluck('id')->first();
        if ($exists) {
            return $this->generateInvoice();
        } else {
            return $invoice_number;
        }
    }

    private function stringAddress($address)
    {
        return ($address->post_index ? $address->post_index.", " : "").
                ($address->region ? $address->region.", " : "").
                ($address->city ? $address->city.", " : "").
                ($address->street_type ? $address->street_type.". " : "").
                ($address->street ? $address->street.", " : "").
                ($address->house ? $address->house." " : "").
                ($address->house_part ? "корп.".$address->house_part." " : "").
                ($address->structure ? "стр.".$address->structure." " : "").
                ($address->apartment ? "кв.".$address->apartment : "");
    }

    public function show(Request $request)
    {
        $search = $request->query('code');
        if ($search != null) {
            $order = Order::where('track_number', '=', $search)->with('user')->with('trackGroups')->with('products')->first();
            if ($order) {
                foreach ($order->trackGroups as $trackGroup)
                {
                    $lastTrack = $trackGroup->track_position;
                    foreach ($trackGroup->tracks as $track)
                    {
                        if ($track->position == $lastTrack)
                        {
                            $trackGroup->lastTrack = $track;
                        }
                    }
                    if ($trackGroup->lastTrack->delivery_type != 'Самовывоз') {
                        $trackGroup->statuses = TrackStatus::where('id', '!=', 3)->orderBy('id', 'asc')->get();
                    } else {
                        $trackGroup->statuses = TrackStatus::orderBy('id', 'asc')->get();
                    }
                }
            }
        } else {
            $order = null;
        }

        return view('track', compact(['order']));
    }

    public function crmData(Request $request)
    {
       $registrationToken = $request->registration_token;
        foreach (json_decode($request->data) as $trackGroup)
        {
             foreach ($request->all() as $file)
            {
                if(isset($file[$trackGroup->id])) {
                    file_put_contents(storage_path().'/app/public/invoices/'.$trackGroup->order->invoice->number.'.pdf', $file[$trackGroup->id]);
                }
            }
            $order = Order::where('track_number', '=', $trackGroup->order->track_number)->first();
            if (!$order)
            {
                $user = User::where('email', '=', $trackGroup->order->selected_email)->first();
                if (!$user)
                {
                    $user = new User;
                    $user->country_id = $trackGroup->order->customer->country_id;
                    $user->name = $trackGroup->order->customer->name;
                    $user->email = $trackGroup->order->selected_email;
                    $user->registration_token = $registrationToken ? md5(uniqid(rand(), true)) : $registrationToken;
                    $user->password = md5(uniqid(rand(), true));
                    $user->save();
                }
                $order = new Order;
                $order->user_id = $user->id;
                $order->invoice_number = $this->generateInvoice();
                $order->track_number = $trackGroup->order->track_number;
                $order->crm_invoice_number = $trackGroup->order->invoice->number;
                $order->save();
            }
            $shopTrackGroup = TrackGroup::where('crm_id', '=', $trackGroup->id)->first();
            if (!$shopTrackGroup)
            {
                $shopTrackGroup = new TrackGroup;
            }
            $shopTrackGroup->order_id = $order->id;
            $shopTrackGroup->crm_id = $trackGroup->id;
            $shopTrackGroup->track_position = $trackGroup->track_position;
            $shopTrackGroup->save();
            foreach ($trackGroup->tracks as $track)
            {
                $shopTrack = Track::where('track_group_id', '=', $shopTrackGroup->id)->where('crm_id', '=', $track->id)->first();
                if (!$shopTrack)
                {
                    $shopTrack = new Track;
                }
                $shopTrack->track_group_id = $shopTrackGroup->id;
                $shopTrack->track_status_id = $track->track_status_id;
                $shopTrack->crm_id = $track->id;
                $shopTrack->delivery_type = $track->delivery_type->name;
                $company = '-';
                switch ($track->delivery_company_id)
                {
                    case 1: 
                        $company = 'Деловые линии';
                        break;
                    case 2: 
                        $company = 'DPD';
                        break;
                }
                $shopTrack->delivery_company = $company;
                $shopTrack->payment_type = $track->payment_type != null ? $track->payment_type->name : '';
                $shopTrack->track_code = $track->track_code;
                $shopTrack->price = $track->price;
                $shopTrack->delivery_time = $track->delivery_time;
                $shopTrack->express_delivery = $track->express_delivery;
                $shopTrack->departure_terminal = $track->departure_terminal;
                if ($track->departure_terminal)
                {
                    $shopTrack->departure = $track->departure_delivery_terminal->address.' ('.$track->departure_delivery_terminal->name.')';
                }
                else
                {
                    switch($track->delivery_type_id)
                    {
                        case 1:
                            $shopTrack->departure = 'г. Екатеринбург, ул. Малышева 164 литер О';
                            break;
                        case 2:
                            $shopTrack->departure = 'г. Екатеринбург, ул. Малышева 164 литер О';
                            break;
                        case 3:
                            switch ($track->delivery_company_id)
                            {
                                case 1:
                                    $shopTrack->departure = $this->stringAddress($track->departure_delivery_address);
                                    break;
                                case 2:
                                    $shopTrack->departure = $this->stringAddress($track->departure_delivery_address);
                                    break;
                                case 3: 
                                    $shopTrack->departure = $track->any_address_from;
                                    break;
                            }
                            break;
                    }
                }
                $shopTrack->arrival_terminal = $track->arrival_terminal;
                if ($track->arrival_terminal)
                {
                    $shopTrack->arrival = $track->arrival_delivery_terminal->address.' ('.$track->arrival_delivery_terminal->name.')';
                }
                else
                {
                    switch($track->delivery_type_id)
                    {
                        case 1:
                            $shopTrack->arrival = $track->any_address;
                            break;
                        case 2:
                            $shopTrack->arrival = null;
                            break;
                        case 3:
                            switch ($track->delivery_company_id)
                            {
                                case 1:
                                    $shopTrack->arrival = $this->stringAddress($track->arrival_delivery_address);
                                    break;
                                case 2:
                                    $shopTrack->arrival = $this->stringAddress($track->arrival_delivery_address);
                                    break;
                                case 3: 
                                    $shopTrack->arrival = $track->any_address;
                                    break;
                            }
                            break;
                    }
                }
                $shopTrack->delivery_status = $track->delivery_status;
                $shopTrack->production_date = $track->production_date;
                $shopTrack->start_date = $track->start_date;
                $shopTrack->receive_date = $track->receive_date;
                $shopTrack->position = $track->position;
                $shopTrack->save();
            }
            foreach ($trackGroup->products as $product)
            {
                $shopProduct = OrderItem::where('crm_id', '=', $product->id)->first();
                if (!$shopProduct)
                {
                    $shopProduct = new OrderItem;
                }
                $shopProduct->order_id = $order->id;
                $shopProduct->crm_id = $product->id;
                $shopProduct->track_group_id = $shopTrackGroup->id;
                $shopProduct->product_name = $product->name;
                $shopProduct->amount = $product->quantity;
                $shopProduct->sku_code = $product->item_code;
                $currency = Currency::where('id', '=', $product->currency_id)->first();
                $shopProduct->price = $product->price / ($currency->value / $currency->nominal);
                $shopProduct->save();
            }
        }
        return response()->json('success', 200);
    }
}