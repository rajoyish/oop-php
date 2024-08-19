<?php

require_once 'vendor/autoload.php';

class Response
{
    public const HTTP_OK = 200;

    public function __construct(
        private string $content,
        private int $statusCode,
        private array $headers,
    ) {}
}

$response = new Response('Some content', Response::HTTP_OK, []);
dump($response);
