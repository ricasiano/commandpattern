<?php
namespace Invokers;

use Commands\LightOffCommand;
use Commands\LightOnCommand;

class LightRemoteControl
{
    private $on;
    private $off;

    public function __construct(LightOnCommand $on, LightOffCommand $off)
    {
        $this->on = $on;
        $this->off = $off;
    }

    public function switchOn()
    {
        $this->on->execute();
    }

    public function switchOff()
    {
        $this->off->execute();
    }
}
