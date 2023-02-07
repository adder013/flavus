<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = 'categories';

    public function products()
    {
        return $this->belongsToMany(Product::class, 'category_product', 'category_id', 'product_id');
    }

    public function tags()
    {
        return $this->hasMany(Tags::class, 'tag_id');
    }

    public function brand()
    {
        return $this->belongsTo(Brands::class, 'brand_id');
    }

    public function parentCategory()
    {
        return $this->belongsTo(Categories::class, 'parent_id');
    }

    public function subCategory()
    {
        return $this->hasMany(Categories::class, 'parent_id');
    }

    public function link()
    {
        return $this->parentCategory ? $this->parentCategory->link() . "$this->url/" : "/category/$this->url/";
    }
}
