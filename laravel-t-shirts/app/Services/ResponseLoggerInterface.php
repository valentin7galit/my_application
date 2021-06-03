<?php

namespace App\Services;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

interface ResponseLoggerInterface
{
    public function logResponse(Response $response): void;
}
