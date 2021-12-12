<?php
require "../jugador.php";
require "jugadorPosicion.php";

$posicion = new posicion();

$posicion->nombre = $_POST["nombre"];
$posicion->bates = intval($_POST["bates"]);
$posicion->defensas = intval($_POST["defensas"]);

$posicion->addPosicion();



?>