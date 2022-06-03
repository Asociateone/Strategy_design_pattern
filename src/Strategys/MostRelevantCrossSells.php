<?php

namespace Strategys;

class MostRelevantCrossSells implements RecommendationStrategyInterface
{
    public static function getRecommendation(): array
    {
        $arr = [
            'Most Popular Strategy',
        ];

        return $arr;
    }
}
