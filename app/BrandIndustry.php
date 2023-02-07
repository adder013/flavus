<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Brands;
use App\BrandIndustryConnection;

class BrandIndustry extends Model
{
    protected $table = 'brands_industries';

    public function brands()
    {
        return $this->hasManyThrough(
            Brands::class,
            BrandIndustryConnection::class,
            'industry_id',
            'id',
            '',
            'brand_id'
        );
    }
}
