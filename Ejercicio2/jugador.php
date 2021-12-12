<?php



class jugador{
    protected $numeroUniforme;
    protected $nombre;
    function __construct(){
        $this->numeroUniforme = "";
        $this->nombre = "";
    }

    function __set($name, $value)
    {
        $this->$name = $value;
    }

    function __get($name)
    {
        return $this->$name;
    }


}

?>