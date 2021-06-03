<?php

namespace App\Services;

use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Events\Dispatcher;

abstract class AbstractResponseLogger implements ResponseLoggerInterface
{
    protected Dispatcher $dispatcher;
    private LoggerInterface $logger;

    public function __construct(LoggerInterface $logger, Dispatcher $dispatcher)
    {
        $this->logger = $logger;
        $this->dispatcher = $dispatcher;
    }

    public function logResponse(Response $response): void
    {
        $this->logger->info($this->generateMessageForResponse($response), $this->extractResponsetData($response));
        $this->handleFinishedRequestEvent($response);
    }

    protected function generateMessageForResponse(Response $response): string
    {
        if ($response->isSuccessful()) {
            return 'The response was successful';
        }

        return 'Request could not be processed';
    }

    abstract protected function extractResponsetData(Response $response): array;

    abstract protected function handleFinishedRequestEvent(Response $response): void;
}
