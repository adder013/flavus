<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\BrandTag;
use App\BrandTagConnection;
use App\BrandIndustry;
use App\BrandIndustryConnection;

class Brands extends Model
{
    protected $table = 'brands';

    public function products()
    {
        return $this->hasMany(Product::class, 'product_id');
    }

    public function categories()
    {
        return $this->hasMany(Categories::class, 'brand_id');
    }

    public function tags()
    {
        return $this->hasManyThrough(
            BrandTag::class,
            BrandTagConnection::class,
            'brand_id',
            'id',
            '',
            'tag_id'
        );
    }

    public function industries()
    {
        return $this->hasManyThrough(
            BrandIndustry::class,
            BrandIndustryConnection::class,
            'brand_id',
            'id',
            '',
            'industry_id'
        );
    }

    public function options()
    {
        return $this->hasMany(Options::class, 'option_id');
    }

}
