<?php

include 'vendor\autoload.php';

$test = new \Src\Test();
echo $test->hello();

$client = new GuzzleHttp\Client();
$response = $client->get('https://itea.ua/');
echo $response->getBody()->getContents();

$hello =new \Test\Hello();
echo $hello->seyHello("Oleg");