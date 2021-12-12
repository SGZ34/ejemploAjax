<?php

include("../connection.php");

 class cuenta{
    protected $numeroCuenta;
    protected $cliente;
    protected $saldo;
    protected $connection;

    function __construct(){
        $this->numeroCuenta = "";
        $this->cliente = "";
        $this->saldo = "";
        $con = new connection();
        $this->connection = $con->con();
    }

    function __set($name, $value)
    {
        $this->$name = $value;
    }

    function __get($name)
    {
        return $this->$name;
    }

    public function obtenerCuentas(){
        $query = "SELECT * FROM ejercicio1";
        $result = mysqli_query($this->connection, $query);
        $json = array();

        while($row = mysqli_fetch_array($result)){
            $json[] = array(
            'numeroCuenta'=> $row['numeroCuenta'],
                'Cliente'=> $row['Cliente'],
                'saldo'=> $row['saldo']
            );
        }
        $jsonString = json_encode($json);

        echo $jsonString;
    }

    public function addCuenta()
    {
        $query = "INSERT INTO ejercicio1(numeroCuenta,cliente,saldo) VALUES ('$this->numeroCuenta','$this->cliente','$this->saldo')";
        $result = mysqli_query($this->connection, $query);
        echo "tarea añadida satisfactoriamente";
    }

    public function cuentaSingle($numeroCuenta){
        $query = "SELECT * FROM ejercicio1 WHERE numeroCuenta = '$numeroCuenta'";

        $result = mysqli_query($this->connection,$query);

        $json = array();
        while($row = mysqli_fetch_array($result)){
            $json[] = array(
                'numeroCuenta'=> $row['numeroCuenta'],
                'Cliente'=> $row['Cliente'],
                'saldo'=> $row['saldo']
            );
        }

        $jsonString = json_encode($json);
        echo $jsonString;
    }

    public function editarCuenta($saldoInt,$saldoEditarInt,$numeroCuenta){
        $query = "UPDATE ejercicio1 SET saldo = $saldoInt + $saldoEditarInt WHERE numeroCuenta = '$numeroCuenta'";

        $result = mysqli_query($this->connection,$query);

        echo "deposito hecho satisfactoriamente";
    }

    public function searchCuenta($search,$searchInt){
        $query = "SELECT * FROM ejercicio1 WHERE numeroCuenta LIKE '$search%' OR Cliente LIKE '$search%' OR saldo = '$searchInt'";
        $result = mysqli_query($this->connection,$query);
        
        $json = array();
        while($row = mysqli_fetch_array($result)){
            $json[] = array(
                'numeroCuenta'=> $row['numeroCuenta'],
                'Cliente'=> $row['Cliente'],
                'saldo'=> $row['saldo']
            );
        }

        $jsonString = json_encode($json);
        echo $jsonString;
    }

    public function eliminarCuenta($numeroCuenta){
        $query = "DELETE FROM Ejercicio1 WHERE numeroCuenta = '$numeroCuenta'";

        $result = mysqli_query($this->connection,$query);
        echo "cuenta eliminada satisfactoriamente";

    }
    

    public function retirar($retiro){
        if($this->saldo > 0){
            $this->saldo += $this->saldo - $retiro;
        }else{
            echo "El retiro no fue permitido";
        }
    }

}

?>