<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FAQCategory extends Model
{
    protected $table = 'faq_categories';

    public function questions()
    {
        return $this->hasMany(FAQ::class, 'faq_category_id')
            ->orderBy('sort_position');
    }
}
