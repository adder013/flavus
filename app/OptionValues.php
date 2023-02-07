<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OptionValues extends Model
{
    protected $table = 'option_values';

    public function option()
    {
        return $this->belongsTo(Options::class);
    }

    public function additionalOptions()
    {
        return $this->hasMany(additionalOptions::class, 'option_value_id');
    }
}
