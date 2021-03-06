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
            Message::newMessage('Have a cup of tea', 'π«'),
            Message::newMessage('Have a cup of coffee', 'βοΈ'),
            Message::newMessage('Call your mum', 'π'),
            Message::newMessage('Stand in front of your window and wave at the people walking by', 'π'),
            Message::newMessage('Put your headphones on and have a personal dance party', 'πΆππΊ'),
            Message::newMessage('Message a friend you haven\'t talked to in a while', 'π±'),
            Message::newMessage('Read a book', 'π'),
            Message::newMessage('Clean your desk', 'π§Ή'),
            Message::newMessage('Do a workout', 'ποΈβοΈ'),
            Message::newMessage('Meditate', 'π§βοΈ'),
            Message::newMessage('Learn a new language', 'π'),
            Message::newMessage('Catch up on the 16,527 unread emails you have', 'π§'),
            Message::newMessage('Play chess online', 'β'),
            Message::newMessage('scroll through instagram', 'πΈ'),
            Message::newMessage('Watch a tutorial on youtube', 'π₯'),
            Message::newMessage('Count to 10 alphabetically (eight,...)', 'π’'),
            Message::newMessage('Take a long deep breath and enjoy this moment', 'βοΈ'),
            Message::newMessage('Sing your favourite song out loud', 'π€'),
            Message::newMessage('Talk to your self about the weather', 'βοΈ'),
            Message::newMessage('Watch an episode of pointless', 'πΊ'),
            Message::newMessage('Use your secret mind power', 'π§ '),
            Message::newMessage('Make lightsaber noises', 'π£'),
            Message::newMessage('See how long you can hold your breath', 'β±'),
            Message::newMessage('Try to not think about penguins', 'π§'),
            Message::newMessage('Try and sound Welsh', 'π΄σ §σ ’σ ·σ ¬σ ³σ Ώ'),
            Message::newMessage('Pretend you are a ninja', 'π₯·π»'),
            Message::newMessage('Get a Beer', 'πΊ'),
            Message::newMessage('Climb a tree', 'π³'),
            Message::newMessage('Draw smiley faces on all the things in your fridge', 'π'),
            Message::newMessage('See how fast you can run around your house without bumping into something', 'ππ½β'),
            Message::newMessage('Build a fort in your living room', 'π°β'),
            Message::newMessage('Try on every single pair of shoes in your house', 'π₯Ύβ'),
            Message::newMessage('Figure out the best thing before sliced bread', 'πβ'),
            Message::newMessage('Clean your screen, its filthy', 'π₯'),
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
