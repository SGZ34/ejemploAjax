<?php
require "../jugador.php";
require "bateador.php";

$bateador = new bateador();

$bateador->nombre = $_POST["nombre"];
$bateador->bates = intval($_POST["bates"]);

$bateador->addBateador();



?>