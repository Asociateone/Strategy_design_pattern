<?php

namespace Strategys;

class MostPopular implements RecommendationStrategyInterface
{
    public static function getRecommendation(): array
    {
        $arr = [
            'Most Popular Strategy',
        ];

        return $arr;
    }
}
