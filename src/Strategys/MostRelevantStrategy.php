<?php

namespace Strategys;

class MoestRelevantStrategy implements RecommendationStrategyInterface
{
    public function getRecommendation(): array
    {
        $arr = [
            'Most relevant Strat',
        ];

        return $arr;
    }
}
