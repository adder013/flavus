<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class additionalOptions extends Model
{
    protected $table = 'additional_options';
    
    public function products()
    {
        return $this->hasMany(Product::class, 'product_id');
    }

    public function optionValues()
    {
        return $this->hasMany(OptionValues::class, 'id' ,'option_value_id');
    }
}
