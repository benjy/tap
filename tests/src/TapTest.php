<?php

namespace Benjy\Tap\Tests;

use PHPUnit\Framework\TestCase;

class TapTest extends TestCase
{

    public function testTap()
    {
        $object = (object) ['id' => 1];
        $this->assertEquals(2, tap($object, function ($object) {
            $object->id = 2;
        })->id);

        $mock = $this->getMockBuilder('MyMock')->setMethods(['update'])->getMock();
        $mock->expects($this->once())->method('update')->with(1);

        $this->assertEquals($mock, tap($mock)->update(1));
    }

}