<?php

namespace Engine;

use Strategys\MoestRelevantStrategy;

class RecommendationEngine
{
    private array $strategies;

    public function __construct()
    {
        $this->strategies = self::getStrategys();
    }

    public function getRecommendation()
    {
        var_dump($this->strategies);
        die;
    }

    private function getStrategys()
    {
        $path = __DIR__ . '/Strategys/';

        $files = scandir($path);

        $files = scandir($path);
        $files = str_replace('.php', '', $files);
        $files = array_values(array_diff($files, array('.', '..')));

        return $files;
    }
}
