<?php

require "../jugador.php";
require "pitcher.php";

$numeroUniforme = $_POST["numeroUniforme"];
$lanzamientos = $_POST["lanzamientos"];

$numeroUniforme = intval($numeroUniforme);
$lanzamientos = intval($lanzamientos);




$pitcher = new pitcher();

$pitcher->aumentarLanzamientos($lanzamientos,$numeroUniforme);

?>