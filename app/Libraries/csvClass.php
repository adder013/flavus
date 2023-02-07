<?php

namespace App\Libraries;

use App;
use App\Categories;
use App\Product;
use App\CalcGroups;
use App\Filters;
use App\Options;
use App\additionalOptions;
use App\OptionValues;
use App\Brands;
use App\Stickers;
use App\StickersConnection;
use App\Redirects;
use App\Libraries\csvClass;

class csvClass
{
    public function uploadTxt() {
        $handle = fopen(public_path().'/redirects.txt', 'r');
        $newFeatures =  array();
        $bugFixes =  array();
        $nextUpdate =  array();
        if ($handle) {
            $allArray = array();
            while (($line = fgets($handle)) !== false) {
                $line = trim($line, "\n");
                $line = trim($line, "\r");
                $line = trim($line, "\t");
                $line = trim($line, "→");
                $line = trim($line, " ");
                if (!empty($line) && $line != "HTTP Status code") {
                    $allArray[] = $line;
                }
            }
            fclose($handle);
        }
        $allArray = (array_chunk($allArray, 5, false));
        $new = array();
        foreach ($allArray as $key => $value) {
            foreach ($value as $key_2 => $value_2) {
                if ($key_2 != 2 && $key_2 != 4) {
                    $new[$key][] = $value_2;
                }
            }
        }
        foreach ($new as $key => $value) {
            $ccc = new Redirects();
            $ccc->status_code = $value[0];
            $ccc->from = '/'.$value[1];
            $ccc->to = '/'.ltrim($value[2], "https://uralenergotel.ru");
            $ccc->save();
        }
    }
}
