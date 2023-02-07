<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Currency;
use App\sku;

class SyncCurrencies extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'currencies:sync';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get CBR Currencies';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $cbr = file_get_contents('http://www.cbr.ru/scripts/XML_daily.asp');
        $cbr = simplexml_load_string($cbr);
        $currencies = new \stdClass();
        foreach ($cbr as $cbrCurrency) {
            $currency = Currency::where('char_code', '=', $cbrCurrency->CharCode)->first();
            if (!$currency) {
                $currency = new Currency();
            }
            $currency->name = $cbrCurrency->Name;
            $currency->nominal = $cbrCurrency->Nominal;
            $currency->char_code = $cbrCurrency->CharCode;
            $floatPrice = str_replace(',', '.', $cbrCurrency->Value);
            $currency->value = number_format($floatPrice, 4, '.', '');
            $currency->save();
            $this->info($cbrCurrency->CharCode.' synced');
        }
        $environment = \App::environment();
        if ($environment == 'production') {
            \Log::channel('slack')->info('Курсы валют успешно синхронизированы с ЦБРФ');
        }
    }
}
