<?php

require "../jugador.php";
require "pitcher.php";

$numeroUniforme = $_POST["numeroUniforme"];
$defensas = $_POST["defensas"];
$numeroUniforme = intval($numeroUniforme);
$defensas = intval($defensas);



$pitcher = new pitcher();

$pitcher->quitarDefensas($defensas,$numeroUniforme);

?>