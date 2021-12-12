<?php
require "../jugador.php";
require "pitcher.php";

$pitcher = new pitcher();

$pitcher->nombre = $_POST["nombre"];
$pitcher->lanzamientos = intval($_POST["lanzamientos"]);
$pitcher->defensas = intval($_POST["defensas"]);

$pitcher->addPitcher();



?>