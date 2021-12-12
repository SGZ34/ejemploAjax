<?php

require "cuenta.php";

$numeroCuenta = $_POST["numeroCuenta"];

$cuenta = new cuenta();

$cuenta->cuentaSingle($numeroCuenta);

?>