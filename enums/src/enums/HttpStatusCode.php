<?php

namespace App\enums;

enum HttpStatusCode: int
{
    case Ok = 200;
    case Created = 201;
    case BadRequest = 400;
    case Forbidden = 403;
    case LargeHeaders = 431;
    case InternalServerError = 500;
}
