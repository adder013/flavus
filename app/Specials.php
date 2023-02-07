<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specials extends Model
{
    protected $table = 'specials';

    public function products()
    {
        return $this->hasMany(Product::class, 'special_id');
    }
}
