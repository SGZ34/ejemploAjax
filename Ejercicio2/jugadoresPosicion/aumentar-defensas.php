<?php

require "../jugador.php";
require "jugadorPosicion.php";

$numeroUniforme = $_POST["numeroUniforme"];
$defensas = $_POST["defensas"];
$numeroUniforme = intval($numeroUniforme);
$defensas = intval($defensas);



$posicion = new posicion();

$posicion->aumentarDefensas($defensas,$numeroUniforme);

?>