<?php

use App\Baz;
use PHPUnit\Framework\TestCase;

class BazTest extends TestCase
{
    public function testBazBoom()
    {
        $baz = new Baz();
        
        $boom = [
            'baz' => 'Boom!'
        ];
        
        $this->assertEquals(json_encode($boom), $baz->boom());
    }
}
