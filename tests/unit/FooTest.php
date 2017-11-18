<?php

use App\Bar;
use App\Foo;
use PHPUnit\Framework\TestCase;

class FooTest extends TestCase
{
    public function testSayFoo()
    {
        $foo = new Foo();
        
        $mockBar = $this->createMock(Bar::class);
        $mockBar->method('sayBar')
            ->willReturn("Bar!");
        $mockBar->expects($this->once())
            ->method('sayBar');
        
        $this->assertEquals("Bar! Foo!", $foo->sayFoo($mockBar));
    }
}

