<?php


abstract class AbstractRobot
{
    public function run ()
    {
        echo 'I am running';
    }

    abstract function sayHi ();
}

class Robot extends AbstractRobot
{
    public function sayHi ()
    {
        // TODO: Implement sayHi() method.
    }
}

$robot = new Robot();
$robot->run();