<?php

namespace App\Services;

use App\Event\ResponseSent;
use Symfony\Component\HttpFoundation\Response;

class DebugResponseLogger extends AbstractResponseLogger
{
    protected function extractResponsetData(Response $response): array
    {
        return [
            'date' => $response->getDate()->format(DATE_ATOM),
            'code' => $response->getStatusCode(),
        ];
    }

    protected function handleFinishedRequestEvent(Response $response): void
    {
        $this->dispatcher->dispatch(new ResponseSent($response->getStatusCode()));
    }
}
