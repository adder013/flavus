<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['description'];

    public function tags()
    {
        return $this->hasMany(Tags::class, 'tag_id');
    }

    public function categories()
    {
        return $this->belongsToMany(Categories::class, 'category_product', 'product_id', 'category_id');
    }

    public function stickerConnection()
    {
        return $this->hasOne(StickersConnection::class, 'product_id')
            ->with('sticker');
    }

    public function additionalOptions()
    {
        return $this->hasMany(additionalOptions::class, 'product_id');
    }

    public function brand()
    {
        return $this->belongsTo(Brands::class);
    }

    public function accessories()
    {
        return $this->hasMany(Accessories::class, 'accessory_id');
    }

    public function recommended()
    {
        return $this->hasMany(Recommended::class, 'recommended_id');
    }

    public function sku()
    {
        return $this->hasMany(sku::class, 'product_id')->with('currency');
    }

    public function skuCalcGroups()
    {
        return $this->hasMany(CalcGroups::class, 'product_id');
    }

}
