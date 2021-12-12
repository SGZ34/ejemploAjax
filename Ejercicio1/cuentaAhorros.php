<?php

class cuentaAhorros extends cuenta{
    protected $fechaVencimiento;
    protected $porcentaje;

    function __construct(){
        parent::__construct();
        $this->fechaVencimiento = "";
        $this->porcentaje = "";
    }
    function __set($name, $value)
    {
        $this->$name = $value;
    }

    function __get($name)
    {
        return $this->$name;
    }

    public function depositarIntereses(){
        $this->saldo += $saldo * $porcentaje;
    }

    public function retirarDinero($retiro){
        $fecha = "31/10/2021";
        parent::retirar($retiro);
        if($fecha == "31/10/2021"){
            $this->saldo = $this->saldo - $retiro;
        }else{
            echo "El retiro no fue permitido";
        }
        
    }
}

?>