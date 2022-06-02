<?php

namespace Strategys;

class MostPopular implements RecommendationStrategyInterface
{
    public function getRecommendation(): array
    {
        $arr = [
            'Most Popular Strategy',
        ];

        return $arr;
    }
}
