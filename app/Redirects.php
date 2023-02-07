<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Redirects extends Model
{
    public function getSearchStringAttribute()
    {
        return "{$this->from} {$this->to}";
    }
}
