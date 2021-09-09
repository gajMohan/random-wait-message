<?php

namespace RandomWaitMessage;

use PHPUnit\Framework\TestCase;

class RandomTest extends TestCase
{

    public function testString()
    {
        $this->assertNotNull(RandomWaitMessage::getMessageString());

    }

    public function testArray()
    {
        $array = RandomWaitMessage::getMessageArray();
        $this->assertArrayHasKey('message', $array);
        $this->assertArrayHasKey('emoji', $array);
    }

    public function testCustomMessage()
    {
        $testMessage = 'This is a test';
        $testEmoji = '🧪';
        $message = RandomWaitMessage::getAllMessage(Message::newMessage($testMessage, $testEmoji));
        $customMessage = array_pop($message);
        $this->assertEquals($testMessage, $customMessage['message']);
        $this->assertEquals($testEmoji, $customMessage['emoji']);
    }

}
