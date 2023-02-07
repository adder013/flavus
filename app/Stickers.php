<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stickers extends Model
{
    public function stickerProducts()
    {
        return $this->hasMany(StickersConnection::class, 'sticker_id')
            ->with('product');
    }
}
