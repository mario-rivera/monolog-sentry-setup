<?php
namespace App;

class BadClass
{
    public function run()
    {
        throw new \Exception('I am a bad class');
    }
}
