<?php
require_once ("class/InstrumentPlayer.php");
require_once ("class/InstrumentInterface.php");
require_once ("class/Guitar.php");
require_once("class/Drums.php");
require_once("class/Piano.php");

$player = new InstrumentPlayer();
$player->play(new Guitar());
$player->play(new Drums());
$player->play(new Piano());

?>