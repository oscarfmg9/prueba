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

    function setUrl($appId,$city){
        $url = 'http://api.openweathermap.org/data/2.5/weather?APPID='.$appId.'&q='.$city.'';
        return $url;
    }

    function setAppId(){
        $appID = '678777737d2cc5556ccedfbbae776196';
        return $appID;
    }

    function curlInit($city){
        $ch=curl_init();
        $appID = callApi::setAppId();
        $url = callApi::setUrl($appID,$city);
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 2);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($ch);
        $response  = json_decode($response);
        callApi::pr($response);
        curl_close($ch);
    }
}
?>