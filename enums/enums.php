<?php

use App\enums\HttpStatusCode;

require_once 'vendor/autoload.php';

class Response
{
    public const HTTP_OK = 200;

    public function __construct(
        private string $content,
        private HttpStatusCode $statusCode,
        private array $headers,
    ) {}

    public function getStatusCodeValue(): int
    {
        return $this->statusCode->value;
    }
}

$response = new Response('Some content', HttpStatusCode::Ok, []);
dump($response);

echo $response->getStatusCodeValue().PHP_EOL;
