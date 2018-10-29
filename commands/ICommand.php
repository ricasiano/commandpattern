<?php
namespace Commands;

/**
 * Interface ICommand
 *
 * @package Commands
 */
interface ICommand
{
    public function execute();
    public function unexecute();
}
