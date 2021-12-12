<?php

require "cuenta.php";
if(isset($_POST["numeroCuenta"])){
    $numeroCuenta = $_POST["numeroCuenta"];
    $Cliente = $_POST["nombre"];
    $saldo = $_POST["saldo"];

    $cuenta = new cuenta();

    $cuenta->numeroCuenta = $numeroCuenta;
    $cuenta->cliente = $Cliente;
    $cuenta->saldo = intval($saldo);
    $cuenta->addCuenta();

    //  $query = "INSERT INTO ejercicio1(numeroCuenta,cliente,saldo) VALUES ('$cuenta->numeroCuenta','$cuenta->cliente','$cuenta->saldo')";
    //     $result = mysqli_query($connection, $query);

    // echo "tarea añadida satisfactoriamente";
}

?>