<?php

include("../../connection.php");


class bateador extends jugador{
    protected $bates;
    protected $connection;
    function __construct(){
        parent::__construct();
        $this->bates = "";
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

    public function addBateador(){
        $query = "INSERT INTO bateadores(nombreJugador,bates) VALUES ('$this->nombre','$this->bates')";
        $result = mysqli_query($this->connection, $query);
        echo "tarea añadida satisfactoriamente";
    }

    public function obtenerBateadores(){
        $query = "SELECT * FROM bateadores";
        $result = mysqli_query($this->connection, $query);
        $json = array();

        while($row = mysqli_fetch_array($result)){
            $json[] = array(
            'numeroUniforme'=> $row['numeroUniforme'],
                'nombreJugador'=> $row['nombreJugador'],
                'bates'=> $row['bates']
            );
        }
        $jsonString = json_encode($json);

        echo $jsonString;
    }

    public function quitarBates($bates, $numeroUniforme){
        $query = "UPDATE bateadores SET bates = $bates - 1 WHERE numeroUniforme = $numeroUniforme";
        $result = mysqli_query($this->connection,$query);

        echo "modificación hecha";
    }

    public function aumentarBates($bates, $numeroUniforme){
        $query = "UPDATE bateadores SET bates = $bates + 1 WHERE numeroUniforme = $numeroUniforme";
        $result = mysqli_query($this->connection,$query);

        echo "modificación hecha";
    }
}
?>