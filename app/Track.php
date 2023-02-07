<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Track extends Model
{
    protected $guarded = [];

    protected $appends = ['start_date_formatted', 'receive_date_formatted'];

    public function getStartDateFormattedAttribute()
    {
        if ($this->start_date != null) {
            return Carbon::parse($this->start_date)->format('d-m-Y');
        } else {
            return null;
        }
    }

    public function getReceiveDateFormattedAttribute()
    {
        if ($this->receive_date != null) {
            return Carbon::parse($this->receive_date)->format('d-m-Y');
        } else {
            return null;
        }
    }

    public function status()
    {
        return $this->belongsTo(TrackStatus::class, 'track_status_id');
    }
}
