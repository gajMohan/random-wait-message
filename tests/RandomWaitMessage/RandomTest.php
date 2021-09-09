<?php

namespace RandomWaitMessage\Tests;
use PHPUnit\Framework\TestCase;
use RandomWaitMessage\RandomWaitMessage;

class RandomTest extends TestCase
{
    public function __construct($name = null, array $data = array(), $dataName = ''){
        parent::__construct($name, $data, $dataName);
        require __DIR__ . "/../../src/RandomWaitMessage/RandomWaitMessage.php";
    }

    public function testbasic(){
        echo (RandomWaitMessage::getMessage(false));
        $this->assertNotNull(RandomWaitMessage::getMessage());
    }
}