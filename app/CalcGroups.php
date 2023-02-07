<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CalcGroups extends Model
{
    protected $table = 'calc_groups';

    public function skuCalcOptions()
    {
        return $this->hasMany(CalcOptions::class, 'calc_group_id');
    }
}
