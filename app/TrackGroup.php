<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrackGroup extends Model
{
    public function tracks()
    {
        return $this->hasMany(Track::class, 'track_group_id')->with('status');
    }

    public function products()
    {
        return $this->hasMany(OrderItem::class, 'track_group_id');
    }
}
