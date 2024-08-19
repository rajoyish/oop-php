<?php

use App\Http\HttpStatusCode;
use App\Http\Response;

require_once 'vendor/autoload.php';

$response = new Response('some content', HttpStatusCode::Forbidden, []);
dump($response->getStatusCodeValue()); // 403
