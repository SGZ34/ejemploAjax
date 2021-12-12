<?php

require "cuenta.php";

$cuenta = new cuenta();

if(isset($_POST["numeroCuenta"])){
    $numeroCuenta = $_POST["numeroCuenta"];
    $cuenta->eliminarCuenta($numeroCuenta);

}
?>