<?php

namespace App;

use ScoutElastic\Searchable;
use Illuminate\Database\Eloquent\Model;

class ElasticSearchModel extends Model
{
    use Searchable;

    /**
     * @var string
     */
    protected $indexConfigurator = uetIndexConfigurator::class;

    /**
     * @var array
     */
    protected $searchRules = [
        //
    ];

    /**
     * @var array
     */
    protected $mapping = [
        //
    ];
}