<?php

use App\Http\HttpStatusCode;
use App\Http\Response;

require_once 'vendor/autoload.php';

$response = new Response('some content', HttpStatusCode::Forbidden, []);

$serializeResponse = serialize($response);
$unSerialized = unserialize($serializeResponse);

dump($serializeResponse, $unSerialized);
