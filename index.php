<?php

require_once('vendor/autoload.php');

use Engine\RecommendationEngine;

$engine = new RecommendationEngine();

$engine->getRecommendation("most relevant up sells");
