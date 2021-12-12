<?php

require "../jugador.php";
require "bateador.php";

$numeroUniforme = $_POST["numeroUniforme"];
$bates = $_POST["bates"];

$numeroUniforme = intval($numeroUniforme);
$bates = intval($bates);



$bateador = new bateador();

$bateador->quitarBates($bates,$numeroUniforme);

?>