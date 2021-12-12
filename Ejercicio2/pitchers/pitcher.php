<?php

include("../../connection.php");


class pitcher extends jugador{
    protected $lanzamientos;
    protected $defensas;
    protected $connection;
    function __construct(){
        parent::__construct();
        $this->lanzamientos = "";
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

    public function addPitcher(){
        $query = "INSERT INTO pitchers(nombreJugador,lanzamientos,defensas) VALUES ('$this->nombre','$this->lanzamientos','$this->defensas')";
        $result = mysqli_query($this->connection, $query);
        echo "tarea añadida satisfactoriamente";
    }

    public function obtenerPitchers(){
        $query = "SELECT * FROM pitchers";
        $result = mysqli_query($this->connection, $query);
        $json = array();

        while($row = mysqli_fetch_array($result)){
            $json[] = array(
            'numeroUniforme'=> $row['numeroUniforme'],
                'nombreJugador'=> $row['nombreJugador'],
                'lanzamientos'=> $row['lanzamientos'],
                'defensas'=> $row['defensas']
            );
        }
        $jsonString = json_encode($json);

        echo $jsonString;
    }

    public function quitarLanzamientos($lanzamientos, $numeroUniforme){
        $query = "UPDATE pitchers SET lanzamientos = $lanzamientos - 1 WHERE numeroUniforme = $numeroUniforme";
        $result = mysqli_query($this->connection,$query);

        echo "modificación hecha";
    }

    public function aumentarLanzamientos($lanzamientos, $numeroUniforme){
        $query = "UPDATE pitchers SET lanzamientos = $lanzamientos + 1 WHERE numeroUniforme = $numeroUniforme";
        $result = mysqli_query($this->connection,$query);

        echo "modificación hecha";
    }

    public function quitarDefensas($defensas, $numeroUniforme){
        $query = "UPDATE pitchers SET defensas = $defensas - 1 WHERE numeroUniforme = $numeroUniforme";
        $result = mysqli_query($this->connection,$query);

        echo "modificación hecha";
    }

    public function aumentarDefensas($defensas, $numeroUniforme){
        $query = "UPDATE pitchers SET defensas = $defensas + 1 WHERE numeroUniforme = $numeroUniforme";
        $result = mysqli_query($this->connection,$query);

        echo "modificación hecha";
    }
}
?>