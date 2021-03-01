<?php
require_once 'IRobot.php';
require_once 'IAI.php';

class Skynet implements IRobot,IAI
{

    public function sayHi ()
    {
        // TODO: Implement sayHi() method.
        echo 'My name is elisa';
    }

    public function run ()
    {
        // TODO: Implement run() method.
        echo 'I am running';
    }

    public function learning ()
    {
        // TODO: Implement learning() method.
    }
}

$skynet = new Skynet();