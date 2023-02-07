<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LockerOrder extends Model
{
    protected $guarded = [];
    
    public function locker()
    {
        return $this->belongsTo(Locker::class, 'locker_id');
    }
}
