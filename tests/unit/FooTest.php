<?php

use App\Bar;
use App\Baz;
use App\Foo;
use PHPUnit\Framework\TestCase;

class FooTest extends TestCase
{
    /**
     * @var Foo
     */
    protected $foo;
    
    /**
     * @var Bar
     */
    protected $bar;

    /**
     * @var Bar
     */
    protected $mockBar;

    /**
     * @var Baz
     */
    protected $mockBaz;
    
    
    public function setUp()
    {
        $this->foo = new Foo();
        $this->bar = new Bar();
        $this->mockBar = $this->createMock(Bar::class);
        $this->mockBaz = $this->createMock(Baz::class);
    }
    public function testSayFoo()
    {
        $this->mockBar->method('sayBar')
            ->willReturn("Bar!");
        $this->mockBar->expects($this->once())
            ->method('sayBar');
        
        $this->assertEquals("Bar! Foo!", $this->foo->sayFoo($this->mockBar));
    }

    public function testBazBoom()
    {
        $this->mockBaz->method('boom')
            ->willReturn($this->boomDataSource());
        
        $this->assertEquals($this->foo->bazBoom($this->mockBaz), $this->boomDataSource());
    }
     
    public function boomDataSource()
    {
        return json_encode([
            'baz' => 'Boom!'
        ]);
    }
}

