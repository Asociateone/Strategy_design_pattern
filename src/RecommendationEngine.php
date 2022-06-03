<?php

namespace Engine;

class RecommendationEngine
{
    private array $strategies;

    public function __construct()
    {
        $this->strategies = self::getStrategys();
    }

    public function getRecommendation()
    {
        return $this->strategies;
    }

    public function setRecommendation(mixed $recommendation)
    {
        gettype($recommendation) == 'string' ?? $recommendation = $this->recommendationString($recommendation);

        gettype($recommendation) == 'array' ?? $recommendation = $this->recommendationArray($recommendation);

        return $recommendation;
    }

    private function recommendationString($recommendation)
    {
        var_dump("hello world");
        return var_dump($recommendation);
    }

    private function recommendationArray($recommendation)
    {
        var_dump('array');
        return $recommendation;
    }

    private function getStrategys()
    {
        $path = __DIR__ . '/Strategys/';

        $files = scandir($path);
        $files = str_replace('.php', '', $files);
        $files = array_values(array_diff($files, array('.', '..')));

        return $files;
    }
}
