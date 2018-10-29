<?php
namespace Commands;

use Receivers\ILight;

class LightOffCommand implements ICommand
{
    private $light;
    public function __construct(ILight $light)
    {
        $this->light = $light;
    }

    public function execute()
    {
        $this->light->off();
    }

    public function unexecute()
    {
        $this->light->on();
    }
}
