<?php

class coche{

    public $comp;
    public $tanque;
    public $nuemroEuedas;
    Public $hastRuf=true;
    public $color="orangae";
    public function hello()
    {
        return $this->comp." ".$this->color;
    }
    public function fill($float)
    {
        $this->tanque+=$float;
        return $this;
    }
    public function ride($float)
    {
        $millas=$float;
        $galones=$millas/50;
        $this->tanque-=$galones;
        return $this;
    }
}

$mercedes =new coche();
$mercedes->comp="Mercedes";
$mercedes->color="Azul";
$vmw = new coche();
$vmw->comp="VMW";
$vmw->color="negro";

echo $mercedes->hello();
echo "</br>";
echo $vmw->hello();

// para realizar el encadenamiento de metodos y propiedades, la clausula indica que se deve devolver el objeto, para reliazar el encadenamiento,pero como estamos dentro de la clase se devuelve la palabra $this.

// en el ejemplo queremos saber de los 10 galones de gasolina que se cargan y se recorre 40 millas cuantos galones sobran en el tanque
$gasolina = $vmw->fill(10)->ride(40)->tanque;

echo "</br>";
echo "los galones que quedan en el tanque son ".$gasolina;

?>