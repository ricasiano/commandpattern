<?php
namespace Receivers;

/**
 * Class PhilipsLight
 *
 * @package Receivers
 */
class PhilipsLight implements ILight
{
    public function on()
    {
        echo 'Philips on</br>';
    }

    public function off()
    {
        echo 'Philips off</br>';
    }
}
