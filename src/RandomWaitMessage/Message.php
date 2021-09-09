<?php

namespace RandomWaitMessage;

class Message
{
    private $message;
    private $emoji;

    protected function __construct(string $message, string $emoji = null)
    {
        $this->message = $message;
        $this->emoji = $emoji;
    }

    public static function newMessage(string $message, string $emoji = null): Message
    {
        return new self($message, $emoji);
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function getEmoji(): string
    {
        return $this->emoji;
    }

    public function asArray()
    {
        return [
            'message' => $this->message,
            'emoji'   => $this->emoji,
        ];
    }
}
