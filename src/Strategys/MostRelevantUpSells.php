<?php

namespace Strategys;

class MostRelevantUpSells implements RecommendationStrategyInterface
{
    public static function getRecommendation(): array
    {
        $arr = [
            'MostRelevantUpSells',
        ];

        return $arr;
    }
}
