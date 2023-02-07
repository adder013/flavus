<?php

namespace App\Providers;


use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App;
use App\MenuOptions;
use App\Contacts;
use App\Categories;
use App\Delivery;
use App\CustomFields;
use App\Http\Controllers\Controller;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        \View::composer('errors::404', function($view)
        {
            $nav = MenuOptions::orderBy('sort_position')->where('depth', '=', 1)->get();
            foreach ($nav as $key => $menu) {
                $hasSubnav = MenuOptions::where('parent_id', '=', $menu->id)->first();
                if(!empty($hasSubnav)) {
                    $nav[$key]->hasSub = 1;
                }
            }
            $subNav = MenuOptions::orderBy('sort_position')->where('depth', '=', 2)->get();
            $contacts = Contacts::first();
            $deliveryCities = Delivery::where('active', '=', 1)->get();
            $deliveryFooter = array();
            foreach ($deliveryCities as $delivery) {
                $firstLetter = mb_substr($delivery->city, 0, 1);
                $deliveryFooter[$firstLetter][] = $delivery;
            }
            $metrics = CustomFields::where('name', '=', 'metrics')->pluck('content')->first();
            $categories = new Controller();
            $categories = $categories->getLoopAllActiveCategories();
            View::share([
                'nav' => $nav,
                'subNav' => $subNav,
                'contacts' => $contacts,
                'navCategories' => $categories,
                'deliveryFooter' => $deliveryFooter,
                'metrics' => $metrics,
            ]);
        });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
