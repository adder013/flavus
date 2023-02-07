<?php

namespace App;

use ScoutElastic\SearchRule;

class ProductsSearchRule extends SearchRule
{
    /**
     * @inheritdoc
     */
    public function buildHighlightPayload()
    {
        //
    }

    /**
     * @inheritdoc
     */
    public function buildQueryPayload()
    {
        $query = $this->builder->query;

        return [
            'should' => [
                [
                    'match' => [
                        'searchable_name' => [
                            'query' => $query,
                            'boost' => 10
                        ]
                    ]
                ],
                [
                    'match' => [
                        'description' => [
                            'query' => $query,
                            'boost' => 1
                        ]
                    ]
                ]
            ],
            'must'  =>  [
                'multi_match' =>  [
                    "type"  =>  "most_fields",
                    "query" =>  $query,
                    "minimum_should_match"  =>  '80%',
                    "fields"    =>  ["searchable_name", "description"],
                    "fuzziness" =>  "1"
                ]
            ],
        ];
    }
}
