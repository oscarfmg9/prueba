# OpenWeatherMap PHP use of API
dimtec project

Installation
============
This library can be found on [Packagist](https://packagist.org/packages/oscarfabian/prueba).
The recommended way to install and use this is through [Composer](http://getcomposer.org).
On GitHub on the [GitHub](https://github.com/oscarfmg9/prueba)

    composer require "oscarfabian/prueba"
    	or
    composer create-project oscarfabian/prueba

Example of getting the weather by City Name

<?php 

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use CallWeather\callApi;

$city  = 'City';
$appID = callApi::setAppId('Your-app-id');
$weatherCity = callApi::getCityWeather($city);
callApi::pr($weatherCity); //use to print data


Example of getting the weather by Coordinates

<?php 

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use CallWeather\callApi;

$appID = callApi::setAppId('Your-app-id');
$lat = 'latitude';
$lon = 'longitude';
$weatherCoor = callApi::getCoorWeather($lat,$lon);
callApi::pr($weatherCity); //use to print data