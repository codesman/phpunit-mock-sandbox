<?php

namespace App;

class Foo
{
    public function sayFoo(Bar $bar)
    {
        return "{$bar->sayBar()} Foo!";
    }

    public function bazBoom(Baz $baz)
    {
        return $baz->boom();
    }
}
