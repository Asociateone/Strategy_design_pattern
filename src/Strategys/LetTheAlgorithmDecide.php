<?php

namespace Strategys;

class LetTheAlgorithmDecide implements RecommendationStrategyInterface
{
    public static function getRecommendation(): array
    {
        $arr = [
            'Let The Algorithm Decide',
        ];

        return $arr;
    }
}
