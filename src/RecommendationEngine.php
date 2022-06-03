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

    public function setRecommendation($recommendation)
    {
        $recommendation = (gettype($recommendation) == 'string') ?  $this->singleStrategy($recommendation) : $this->multipleStrategy($recommendation);

        return $recommendation;
    }

    private function singleStrategy($recommendation)
    {
        $recommendation = 'Strategys\\' . $recommendation;

        $recommendation = $recommendation::getRecommendation();

        return $recommendation;
    }

    private function multipleStrategy($recommendations)
    {
        $arr = [];

        foreach ($recommendations as $recommendation) {
            $recommendation = 'Strategys\\' . $recommendation;
            $arr[] = $recommendation::getRecommendation();
        }

        return $arr;
    }

    private function getStrategys()
    {
        $path = __DIR__ . '/Strategys/';

        $files = scandir($path);
        $files = str_replace('.php', '', $files);
        $files = array_values(array_diff($files, array('.', '..', 'RecommendationStrategyInterface')));

        return $files;
    }
}
