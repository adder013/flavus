<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LockerImage extends Model
{
    protected $guarded = [];
    
    public function locker()
    {
        return $this->belongsTo(Locker::class, 'locker_id');
    }
}
