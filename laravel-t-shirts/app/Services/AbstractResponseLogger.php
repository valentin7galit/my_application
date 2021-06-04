<?php

namespace App\Services;

use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Response;

abstract class AbstractResponseLogger implements ResponseLoggerInterface
{
    private LoggerInterface $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function logResponse(Response $response): void
    {
        $this->logger->info($this->generateMessageForResponse($response), $this->extractResponsetData($response));
    }

    protected function generateMessageForResponse(Response $response): string
    {
        if ($response->isSuccessful()) {
            return 'The response was successful';
        }

        return 'Request could not be processed';
    }

    abstract protected function extractResponsetData(Response $response): array;
}
