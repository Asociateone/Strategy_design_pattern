<?php

namespace Strategys;

class MostRelevantStrategy implements RecommendationStrategyInterface
{
    public static function getRecommendation(): array
    {
        $arr = [
            'Most relevant Strat',
        ];

        return $arr;
    }
}
