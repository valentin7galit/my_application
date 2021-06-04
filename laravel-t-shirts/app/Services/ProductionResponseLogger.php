<?php

namespace App\Services;

use Symfony\Component\HttpFoundation\Response;

class ProductionResponseLogger extends AbstractResponseLogger
{
    protected function extractResponsetData(Response $response): array
    {
        return [];
    }
}
