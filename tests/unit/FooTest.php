<?php

use App\Bar;
use App\Baz;
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

    public function testBazBoom()
    {
        $foo = new Foo();
        
        $mockBaz = $this->createMock(Baz::class);
        $mockBaz->method('boom')
            ->willReturn($this->boomDataSource());
        
        $this->assertEquals($foo->bazBoom($mockBaz), $this->boomDataSource());
    }
    
    public function boomDataSource()
    {
        return json_encode([
            'baz' => 'Boom!'
        ]);
    }
}

