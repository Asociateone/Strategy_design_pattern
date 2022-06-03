<?php

namespace Strategys;

class MostRelevantCrossels implements RecommendationStrategyInterface
{
    public function getRecommendation(): array
    {
        $arr = [
            'Most Popular Strategy',
        ];

        return $arr;
    }
}
