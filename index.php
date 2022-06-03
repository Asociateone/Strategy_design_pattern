<?php

require_once('vendor/autoload.php');

use Engine\RecommendationEngine;

$engine = new RecommendationEngine();

$recomendations = $engine->getRecommendation();

// var_dump($engine->setRecommendation($recomendations[0]));

var_dump($engine->setRecommendation($recomendations[0]));
