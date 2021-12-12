<?php

require "../jugador.php";
require "pitcher.php";

$numeroUniforme = $_POST["numeroUniforme"];
$lanzamientos = $_POST["lanzamientos"];
$defensas = $_POST["defensas"];
$numeroUniforme = intval($numeroUniforme);
$lanzamientos = intval($lanzamientos);
$defensas = intval($defensas);



$pitcher = new pitcher();

$pitcher->quitarLanzamientos($lanzamientos,$numeroUniforme);

?>