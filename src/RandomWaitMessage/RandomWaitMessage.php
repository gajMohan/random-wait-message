<?php

namespace RandomWaitMessage;

class RandomWaitMessage
{

    const MESSAGES = [
        ['message' => 'Have a cup of tea', 'emoji' => '🫖'],
        ['message' => 'Have a cup of coffee', 'emoji' => '☕️'],
        ['message' => 'Call your mum', 'emoji' => '📞'],
        ['message' => 'Stand in front of your window and wave at the people walking by', 'emoji' => '👋'],
        ['message' => 'Put your headphones on and have a personal dance party', 'emoji' => '🎶💃🕺'],
        ['message' => 'Message a friend you haven\'t talked to in a while', 'emoji' => '📱'],
        ['message' => 'Read a book', 'emoji' => '📖'],
        ['message' => 'Read a book', 'emoji' => '📖'],
        ['message' => 'Clean your desk', 'emoji' => '🧹'],
        ['message' => 'Do a workout', 'emoji' => '🏋️‍♂️'],
        ['message' => 'Meditate', 'emoji' => '🧘‍♂️'],
        ['message' => 'Learn a new language', 'emoji' => '🎌'],
        ['message' => 'Catch up on the 16,527 unread emails you have', 'emoji' => '📧'],
        ['message' => 'Play chess online', 'emoji' => '♟'],
        ['message' => 'scroll through instagram', 'emoji' => '📸'],
        ['message' => 'Watch a tutorial on youtube', 'emoji' => '🎥'],
        ['message' => 'Count to 10 alphabetically (eight,...)', 'emoji' => '🔢'],
        ['message' => 'Take a long deep breath and enjoy this moment', 'emoji' => '☀️'],
        ['message' => 'Sing your favourite song out loud', 'emoji' => '🎤'],
        ['message' => 'Talk to your self about the weather', 'emoji' => '☔️'],
        ['message' => 'Watch an episode of pointless', 'emoji' => '📺'],
        ['message' => 'Use your secret mind power', 'emoji' => '🧠'],
        ['message' => 'Make lightsaber noises', 'emoji' => '📣'],
        ['message' => 'See how long you can hold your breath', 'emoji' => '⏱'],
        ['message' => 'Try to not think about penguins', 'emoji' => '🐧'],
        ['message' => 'Try and sound Welsh', 'emoji' => '🏴󠁧󠁢󠁷󠁬󠁳󠁿'],
        ['message' => 'Pretend you are a ninja', 'emoji' => '🥷🏻'],
        ['message' => 'Get a Beer', 'emoji' => '🍺'],
        ['message' => 'Climb a tree', 'emoji' => '🌳'],
    ];



    public static function getMessage(bool $includeEmoji = true, array $customMessages = []): string
    {
        $index = array_rand(self::MESSAGES, 1);
        return self::MESSAGES[$index]['message'] . ($includeEmoji ? ' '.self::MESSAGES[$index]['emoji']: '');
    }
}