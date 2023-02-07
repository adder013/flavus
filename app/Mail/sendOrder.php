<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\OrderItem;
use App\Product;

class sendOrder extends Mailable
{
    use Queueable, SerializesModels;
    public $order_id;
    public $invoice_number;
    public $registration_token;
    public $name;
    public $time;
    public $mail;
    public $tel;
    public $products;
    public $delivery;
    public $address;
    public $city;
    public $total;

    public function __construct($mail)
    {
        $this->order_id = $mail['order_id'];
        $this->invoice_number = $mail['invoice_number'];
        $this->registration_token = $mail['registration_token'];
        $this->name = $mail['name'];
        $this->time = $mail['time'];
        $this->mail = $mail['mail'];
        $this->tel = $mail['tel'];
        $this->delivery = $mail['delivery'];
        $this->address = $mail['address'];
        $this->city = $mail['city'];
        $orders = OrderItem::where('order_id', '=', $mail['order_id'])->get();
        $total = 0;
        foreach ($orders as $key => $value) {
            $total += floatval($value->price*$value->amount);
        }
        $this->products = $orders;
		$this->total = $total;
		if (isset($mail['file'])) {
			$this->file = $mail['file'];
			$this->attach($mail['file'], array(
				'as' => $mail['file_name']
			));
		}
    }

    public function build()
    {
        return $this->view('mail.order')->subject('Новый заказ на сайте uralenergotel.ru');
    }
}
