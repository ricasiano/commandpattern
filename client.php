<?php
include "commands/ICommand.php";
include "commands/LightOffCommand.php";
include "commands/LightOnCommand.php";
include "receivers/ILight.php";
include "receivers/AkiraLight.php";
include "invokers/LightRemoteControl.php";

$akira = new \Receivers\AkiraLight();
$on = new \Commands\LightOnCommand($akira);
$off = new \Commands\LightOffCommand($akira);

$akiraLightRemoteControl = new \Invokers\LightRemoteControl($on, $off);

$akiraLightRemoteControl->switchOn();
$akiraLightRemoteControl->switchOff();
