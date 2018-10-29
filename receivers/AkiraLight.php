<?php
namespace Receivers;

/**
 * Class AkiraLight
 *
 * @package Receivers
 */
class AkiraLight implements ILight
{
    public function on()
    {
        echo 'Akira on.</br>';
    }

    public function off()
    {
        echo 'Akira off.</br>';
    }
}
