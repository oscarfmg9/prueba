<?php
namespace CallWeather;

class callApi
{
    public function newCurlCall(){
        $city  = 'London';
        curlInit($city);
    }

    function pr($data){
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }

    function setCityUrl($appId,$city){
        $url = 'http://api.openweathermap.org/data/2.5/weather?APPID='.$appId.'&q='.$city.'';
        return $url;
    }

    function setCoorUrl($appId,$lat,$lon){
        $url = 'api.openweathermap.org/data/2.5/weather?APPID='.$appId.'&lat='.$lat.'&lon='.$lon.'';
        return $url;
    }

    function setAppId($userAppId){
        global $appId;
        $appId = $userAppId;
        return $appId;
    }   

    function getAppId(){
        global $appId;
        $appId = $appId;
        return $appId;
    }   

    function curlExecute($ch){
        $response = curl_exec($ch);
        $response  = json_decode($response);
        curl_close($ch);
        return $response;
    }

    function curlInit($url){
        $ch=curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 2);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        return $ch;
    }

    function getCityWeather($city){
        $appID = callApi::getAppId();
        $url = callApi::setCityUrl($appID,$city);
        $curl_handler = callApi::curlInit($url);
        $response = callApi::curlExecute($curl_handler);
        return $response;
    }

    function getCoorWeather($lat,$lon){
        $appID = callApi::getAppId();
        $url = callApi::setCoorUrl($appID,$lat,$lon);
        $curl_handler = callApi::curlInit($url);
        $response = callApi::curlExecute($curl_handler);
        return $response;
    }
}
?>