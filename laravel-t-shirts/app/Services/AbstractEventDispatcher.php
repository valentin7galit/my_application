<?php

namespace App\Services;

use Symfony\Component\HttpFoundation\Response;
use Illuminate\Events\Dispatcher;

abstract class AbstractEventDispatcher implements ResponseLoggerInterface
{
    protected Dispatcher $dispatcher;

    public function __construct(Dispatcher $dispatcher)
    {
        $this->dispatcher = $dispatcher;
    }

    public function logResponse(Response $response): void
    {
        $this->handleFinishedRequestEvent($response);
    }

    abstract protected function handleFinishedRequestEvent(Response $response): void;
}
