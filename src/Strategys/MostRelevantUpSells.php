<?php

namespace Strategys;

class MostRelevantUpSells implements RecommendationStrategyInterface
{
    public function getRecommendation(): array
    {
        $arr = [
            'MostRelevantUpSells',
        ];

        return $arr;
    }
}
