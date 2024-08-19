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

$cases = HttpStatusCode::cases();
dump($cases);

$code1 = HttpStatusCode::Ok;
$code2 = HttpStatusCode::BadRequest;
$code3 = HttpStatusCode::Ok;

dump($code1 === $code2); // false
dump($code1 === $code3); // true
