<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Locker extends Model
{
    protected $guarded = [];

    public function orders()
    {
        return $this->hasMany(LockerOrder::class, 'locker_id')
            ->orderBy('sort_position');
    }

    public function sliders()
    {
        return $this->hasMany(LockerSlider::class, 'locker_id')
            ->orderBy('sort_position');
    }

    public function tables()
    {
        return $this->hasMany(LockerTable::class, 'locker_id')
            ->orderBy('sort_position');
    }

    public function images()
    {
        return $this->hasMany(LockerImage::class, 'locker_id')
            ->where('locker_images.type', '=', '1');
    }

    public function brands()
    {
        return $this->hasMany(LockerImage::class, 'locker_id')
            ->where('locker_images.type', '=', '2');
    }
}
