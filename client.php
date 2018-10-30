<?php
//sad we don't have an autoloader
include "commands/ICommand.php";
include "commands/LightOffCommand.php";
include "commands/LightOnCommand.php";
include "receivers/ILight.php";
include "receivers/AkiraLight.php";
include "invokers/RemoteControl.php";

//we identify our receiver and the commands we wish to implement
$akira = new \Receivers\AkiraLight();
$on = new \Commands\LightOnCommand($akira);
$off = new \Commands\LightOffCommand($akira);
$akiraLightRemoteControl = new \Invokers\RemoteControl($on, $off);

//turning on and off our lights
$akiraLightRemoteControl->switchOn();
$akiraLightRemoteControl->switchOff();
