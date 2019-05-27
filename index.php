<?php
require "vendor/autoload.php";
require_once __DIR__ . "CacheInterface.php";

$str = base64_encode('77qn9aax-qrrm-idki:lnh0-fm2nhmp0yca7');
$string = file_get_contents("jsonFile/data.json");
$jsonFromFile = json_decode($string,true);
$obj = new CacheService();

$client = new GuzzleHttp\Client([
    'headers' => [
    'Authorization' => 'Basic '.$str,
    'Content-Type' => 'application/x-www-form-urlencoded'
    ]
]);
$res = $client->request('POST', 'https://api.printful.com/shipping/rates',
        [   'json' =>
            $jsonFromFile
        ]

);
var_dump($res->getBody()->getContents());
