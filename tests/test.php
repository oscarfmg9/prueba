<?php 

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use CallWeather\callApi;

$city  = 'London';
callApi::curlInit($city);