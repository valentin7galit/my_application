<?php

namespace App\Services;

use Illuminate\Contracts\Mail\Mailer;
use Psr\Log\LoggerInterface;
use Illuminate\Mail\Message;


class ContactMailer
{
    private const DESTINATION_EMAIL = 'valentin@t-shirts.com';

    private Mailer $mailer;

    private LoggerInterface $logger;

    public function __construct(Mailer $mailer, LoggerInterface $logger)
    {
        $this->mailer = $mailer;
        $this->logger = $logger;
    }

    public function send(array $input): void
    {
        ['name' => $name, 'content' => $content, 'email' => $email, 'subject' => $subject] = $input;
        $this->mailer->send(
            'emails.email',
            ['name' => $name, 'content' => $content, 'email' => $email],
            function (Message $message) use($subject)
            {
                $message->to(self::DESTINATION_EMAIL);
                $message->subject($subject);
            }
        );

        $this->logger->info('Contact Mail send to' . self::DESTINATION_EMAIL);
    }
}
