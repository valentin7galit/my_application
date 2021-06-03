<?php

namespace App\Event;

class ResponseSent 
{
    public int $code;

    public function __construct(int $code)
    {
        $this->code = $code;
    }
}