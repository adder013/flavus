<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Options extends Model
{
    protected $table = 'options';

    public function optionValues()
    {
        return $this->hasMany(OptionValues::class, 'option_id');
    }
}
