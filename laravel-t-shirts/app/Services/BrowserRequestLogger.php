<?php

namespace App\Services;

use Illuminate\Http\Request;

class BrowserRequestLogger extends AbstractRequestLogger
{
    protected function getMessage(): string
    {
        return 'This is User Agent';
    }

    protected function extractRequestData(Request $request): array
    {
        $userAgent = $request->header('User-Agent');

        $osName = 'Unknown';

        if (preg_match('/linux/i', $userAgent)) {
            $osName = 'Linux';
        } elseif (preg_match('/macintosh|mac os x/i', $userAgent)) {
            $osName = 'Mac';
        } elseif (preg_match('/windows|win32/i', $userAgent)) {
            $osName = 'Windows';
        }

        $browserName = 'Unknown';

        if (preg_match('/MSIE/i', $userAgent) && !preg_match('/Opera/i', $userAgent)) {
            $browserName = 'Internet Explorer';
        } elseif (preg_match('/Firefox/i', $userAgent)) {
            $browserName = 'Mozilla Firefox';
        } elseif (preg_match('/Chrome/i', $userAgent)) {
            $browserName = 'Google Chrome';
        } elseif (preg_match('/Safari/i', $userAgent)) {
            $browserName = 'Apple Safari';
        } elseif (preg_match('/Opera/i', $userAgent)) {
            $browserName = 'Opera';
        } elseif (preg_match('/Netscape/i', $userAgent)) {
            $browserName = 'Netscape';
        }
       
        $browserLang = preg_replace('/(,\w+.+)/i', '', $request->server('HTTP_ACCEPT_LANGUAGE'));

        return [$osName, $browserName, $browserLang];
    }
}
