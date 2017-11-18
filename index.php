<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Foo;
use App\Bar;

$foo = new Foo();
$bar = new Bar();

$message = $foo->sayFoo($bar);
echo "<h1>$message</h1>";
