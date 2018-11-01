<?php
namespace Commands;

use Receivers\ILight;

class LightOnCommand implements ICommand
{
    private $light;
    public function __construct(ILight $light)
    {
        $this->light = $light;
    }

    public function execute()
    {
        $this->light->switchOn();
    }

    public function unexecute()
    {
        $this->light->switchOff();
    }
}
