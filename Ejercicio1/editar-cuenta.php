<?php

require "cuenta.php";

$cuenta = new cuenta();


$numeroCuenta = $_POST["numeroCuenta"];
$saldo = $_POST["saldo"];
$saldoEditar = $_POST["saldoEditar"];
$saldoInt = intval($saldo);
$saldoEditarInt = intval($saldoEditar);


$cuenta->editarCuenta($saldoInt,$saldoEditarInt,$numeroCuenta);

?>