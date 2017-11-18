<?php

namespace App;

class Foo
{
    public function sayFoo(Bar $bar)
    {
        return "{$bar->sayBar()} Foo!";
    }
}
