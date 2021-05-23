<?php
namespace App\Services;

use Illuminate\Http\Request;

class DummyRequestLogger extends AbstractRequestLogger
{
    protected function getMessage(): string
    {
        return 'This is dummy logger, works for exemple purpase';
    }

    protected function extractRequestData(Request $request): array
    {
        return ['test' => 'to show that it works!'];
    }
}
