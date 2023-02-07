<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Brands;
use App\BrandTagConnection;

class BrandTag extends Model
{
    protected $table = 'brands_tags';

    protected $guarded = [];

    public function brands()
    {
        return $this->hasManyThrough(
            Brands::class,
            BrandTagConnection::class,
            'tag_id',
            'id',
            '',
            'brand_id'
        )->where('active', 1);
    }
}
