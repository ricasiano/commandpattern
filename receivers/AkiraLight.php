<?php
namespace Receivers;

/**
 * Class AkiraLight
 *
 * @package Receivers
 */
class AkiraLight implements ILight
{
    public function switchOn()
    {
        echo 'Akira on.</br>';
    }

    public function switchOff()
    {
        echo 'Akira off.</br>';
    }
}
