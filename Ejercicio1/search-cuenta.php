<?php
require "cuenta.php";

$cuenta = new cuenta();

$search = $_POST['search'];



if(!empty($search)){
    $searchInt = intval($search);
    $cuenta->searchCuenta($search,$searchInt);

}


?>
