<?php

namespace App\Services;

use Illuminate\Http\Request;

class IPAddressRequestLogger extends AbstractRequestLogger
{
    protected function getMessage(): string
    {
        return 'This is IP address';
    }

    protected function extractRequestData(Request $request): array
    {
        $ipAddress = $request->ip();

        return [$ipAddress];
    }
}
