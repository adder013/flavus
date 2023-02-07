<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StickersConnection extends Model
{
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function sticker()
    {
        return $this->belongsTo(Stickers::class, 'sticker_id');
    }
}
