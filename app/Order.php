<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function products()
    {
        return $this->hasMany(OrderItem::class, 'order_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function trackGroups()
    {
        return $this->hasMany(TrackGroup::class, 'order_id')
            ->with('tracks', 'products');
    }
}