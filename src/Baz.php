<?php

namespace App;

class Baz
{
    public function boom()
    {
        $boom = [
            'baz' => 'Boom!'
        ];
        
        return json_encode($boom);
    }
}
