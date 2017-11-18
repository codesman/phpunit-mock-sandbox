<?php

use App\Bar;
use PHPUnit\Framework\TestCase;

class BarTest extends TestCase
{
    public function testSayBar()
    {
        $bar = new Bar();
        
        $this->assertEquals('Bar!', $bar->sayBar());
    }
}
