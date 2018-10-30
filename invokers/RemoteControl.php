<?php
namespace Invokers;

use Commands\ICommand;

class RemoteControl
{
    private $on;
    private $off;

    /**
     * RemoteControl constructor.
     *
     * @param ICommand $on     turns on the device
     * @param ICommand $off    turns off the device
     */
    public function __construct(ICommand $on, ICommand $off)
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
