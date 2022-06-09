<?php

namespace RandomWaitMessage;

class RandomWaitMessage
{

    /**
     * @var array
     */
    private $messages;

    protected function __construct()
    {
        $this->messages = [
            Message::newMessage('Have a cup of tea', '🫖'),
            Message::newMessage('Have a cup of coffee', '☕️'),
            Message::newMessage('Call your mum', '📞'),
            Message::newMessage('Stand in front of your window and wave at the people walking by', '👋'),
            Message::newMessage('Put your headphones on and have a personal dance party', '🎶💃🕺'),
            Message::newMessage('Message a friend you haven\'t talked to in a while', '📱'),
            Message::newMessage('Read a book', '📖'),
            Message::newMessage('Clean your desk', '🧹'),
            Message::newMessage('Do a workout', '🏋️‍️'),
            Message::newMessage('Meditate', '🧘‍️'),
            Message::newMessage('Learn a new language', '🎌'),
            Message::newMessage('Catch up on the 16,527 unread emails you have', '📧'),
            Message::newMessage('Play chess online', '♟'),
            Message::newMessage('scroll through instagram', '📸'),
            Message::newMessage('Watch a tutorial on youtube', '🎥'),
            Message::newMessage('Count to 10 alphabetically (eight,...)', '🔢'),
            Message::newMessage('Take a long deep breath and enjoy this moment', '☀️'),
            Message::newMessage('Sing your favourite song out loud', '🎤'),
            Message::newMessage('Talk to your self about the weather', '☔️'),
            Message::newMessage('Watch an episode of pointless', '📺'),
            Message::newMessage('Use your secret mind power', '🧠'),
            Message::newMessage('Make lightsaber noises', '📣'),
            Message::newMessage('See how long you can hold your breath', '⏱'),
            Message::newMessage('Try to not think about penguins', '🐧'),
            Message::newMessage('Try and sound Welsh', '🏴󠁧󠁢󠁷󠁬󠁳󠁿'),
            Message::newMessage('Pretend you are a ninja', '🥷🏻'),
            Message::newMessage('Get a Beer', '🍺'),
            Message::newMessage('Climb a tree', '🌳'),
            Message::newMessage('Draw smiley faces on all the things in your fridge', '😀'),
            Message::newMessage('See how fast you can run around your house without bumping into something', '🏃🏽‍'),
            Message::newMessage('Build a fort in your living room', '🏰‍'),
            Message::newMessage('Try on every single pair of shoes in your house', '🥾‍'),
            Message::newMessage('Figure out the best thing before sliced bread', '🍞‍'),
            Message::newMessage('Clean your screen, its filthy', '🖥'),
        ];
    }

    public static function getMessageString(bool $includeEmoji = true, Message ...$customMessages): string
    {
        $randomWaitMessage = new self();
        $randomWaitMessage->addCustomMessages($customMessages);
        $message = $randomWaitMessage->getRandomMessage();
        return $message->getMessage() . ($includeEmoji ? ' ' . $message->getEmoji() : '');
    }

    /**
     * @param array $messages
     */
    private function addCustomMessages(array $messages)
    {
        foreach ($messages as $message) {
            $this->messages[] = $message;
        }
    }

    private function getRandomMessage(): Message
    {
        return $this->messages[$this->getRandomIndex()];
    }

    private function getRandomIndex(): int
    {
        return array_rand($this->messages, 1);
    }

    public static function getMessageArray(Message ...$customMessages): array
    {
        $randomWaitMessage = new self();
        $randomWaitMessage->addCustomMessages($customMessages);
        $message = $randomWaitMessage->getRandomMessage();
        return $message->asArray();
    }

    public static function getAllMessage(Message ...$customMessages): array
    {
        $randomWaitMessage = new self();
        $randomWaitMessage->addCustomMessages($customMessages);
        return $randomWaitMessage->getAllMessages();
    }

    private function getAllMessages(): array
    {
        $return = [];
        foreach ($this->messages as $message) {
            $return[] = $message->asArray();
        }
        return $return;
    }

}
