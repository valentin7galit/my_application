<?php

namespace App\Services;

use Illuminate\Http\Request;

class IPAddressRequestLogger extends AbstractRequestLogger
{
    protected function getMessage(): string
    {
        return 'This is IP Address';
    }

    protected function extractRequestData(Request $request): array
    {
        $ipAddress = $request->ip();

        return [$ipAddress];
    }
}
