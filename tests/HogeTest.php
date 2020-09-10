<?php

use PHPUnit\Framework\TestCase;

class HogeTest extends TestCase {

    public function testHoge() {
        require(__DIR__ . '/../src/Hoge.php');
        $target = new Hoge();
        $result = $target->add(1, 1);
        $this->assertEquals($result, 2);
    }

}