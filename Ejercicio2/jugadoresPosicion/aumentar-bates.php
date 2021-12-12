<?php

require "../jugador.php";
require "jugadorPosicion.php";

$numeroUniforme = $_POST["numeroUniforme"];
$bates = $_POST["bates"];
$numeroUniforme = intval($numeroUniforme);
$bates = intval($bates);



$posicion = new posicion();

$posicion->aumentarBates($bates,$numeroUniforme);

?>