<?php 

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use CallWeather\callApi;

$city  = 'London';
$appID = callApi::setAppId('678777737d2cc5556ccedfbbae776196');
$lat = '35';
$lon = '139';
$weatherCoor = callApi::getCoorWeather($lat,$lon);
$weatherCity = callApi::getCityWeather($city);
callApi::pr($weatherCity);