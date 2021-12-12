<?php

include("../../connection.php");


class posicion extends jugador{
    protected $bates;
    protected $defensas;
    protected $connection;
    function __construct(){
        parent::__construct();
        $this->bates = "";
        $this->defensas = "";
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

    public function addPosicion(){
        $query = "INSERT INTO posicion(nombreJugador,bates,defensas) VALUES ('$this->nombre','$this->bates','$this->defensas')";
        $result = mysqli_query($this->connection, $query);
        echo "tarea añadida satisfactoriamente";
    }

    public function obtenerPosicion(){
        $query = "SELECT * FROM posicion";
        $result = mysqli_query($this->connection, $query);
        $json = array();

        while($row = mysqli_fetch_array($result)){
            $json[] = array(
            'numeroUniforme'=> $row['numeroUniforme'],
                'nombreJugador'=> $row['nombreJugador'],
                'bates'=> $row['bates'],
                'defensas'=> $row['defensas']
            );
        }
        $jsonString = json_encode($json);

        echo $jsonString;
    }

    public function quitarBates($bates, $numeroUniforme){
        $query = "UPDATE posicion SET bates = $bates - 1 WHERE numeroUniforme = $numeroUniforme";
        $result = mysqli_query($this->connection,$query);

        echo "modificación hecha";
    }

    public function aumentarBates($bates, $numeroUniforme){
        $query = "UPDATE posicion SET bates = $bates + 1 WHERE numeroUniforme = $numeroUniforme";
        $result = mysqli_query($this->connection,$query);

        echo "modificación hecha";
    }

    public function quitarDefensas($defensas, $numeroUniforme){
        $query = "UPDATE posicion SET defensas = $defensas - 1 WHERE numeroUniforme = $numeroUniforme";
        $result = mysqli_query($this->connection,$query);

        echo "modificación hecha";
    }

    public function aumentarDefensas($defensas, $numeroUniforme){
        $query = "UPDATE posicion SET defensas = $defensas + 1 WHERE numeroUniforme = $numeroUniforme";
        $result = mysqli_query($this->connection,$query);

        echo "modificación hecha";
    }
}
?>