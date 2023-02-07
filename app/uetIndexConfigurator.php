<?php

namespace App;

use ScoutElastic\IndexConfigurator;
use ScoutElastic\Migratable;

class uetIndexConfigurator extends IndexConfigurator
{
    use Migratable;

    /**
     * @var array
     */

    protected $name;

    public function __construct() {
       $this->name = env('ES_INDEX');
   }

    protected $settings = [
        'analysis' => [
            'filter' => [
                'russian_stop' => [
                    'type' => 'stop',
                    'stopwords' => '_russian_'
                ],
                'russian_keywords' => [
                    'type' => 'keyword_marker',
                    'keywords' => ['пример']
                ],
                'russian_stemmer' => [
                    'type' => 'stemmer',
                    'language' => 'russian'
                ],
                'mynGram' => [
                    'type' => 'nGram',
                    'min-gram' => '2',
                    'max-gram' => '80',
                ],
            ],
            'analyzer' => [
                'ru_std' => [
                    "type" => "custom",
                    "tokenizer" => "standard",
                    "filter" => [
                        "lowercase",
                        "asciifolding",
                        "russian_stop",
                        "russian_keywords",
                        "russian_stemmer",
                        "mynGram",
                    ]
                ]
            ]
        ],
    ];
}
