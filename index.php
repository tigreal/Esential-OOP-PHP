<?php

class coche{

    private $modelo="";
    public $tanque;
    public $nuemroEuedas;
    Public $hastRuf=true;
    public $color="orangae";
    public $haystack=array('mercedes', 'toyota');

    public function __construct($modelo=null)
    {
        if($modelo){
            $this->modelo=$modelo;

        }
        
    }
    

    // public function setModelo($modelo){
    //     if (in_array($modelo, $this->haystack))
    //     {
    //         $this->modelo=$modelo;
    //     }
    //     else{
    //         $this->modelo="</br> sin modelo";
    //     }
    // }
    public function getModelo()
    {
        return "</br>El modelo de carro con privado es: ".$this->modelo;
    }
    public function hello()
    {
        return $this->modelo." ".$this->color;
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
class User 
{
    private $nombre;
    public $apellido;

public function hello()
{
    echo "Hola ".$this->nombre;
}    
public function registrar()
{
    echo "</br>".$this->nombre." registrado";
    return $this;

}
public function mail()
{
    echo "</br> enviado por email";
}
public function setNombre($nombre)
{
    $this->nombre = $nombre;
}
public function getNombre()
{
    echo $this->nombre;
}

}

// $mercedes =new coche();
// $mercedes->color="</br>Azul";
// $vmw = new coche();
// $vmw->color="negro";
// $car1=new coche();

// $car1->getModelo();

// echo $mercedes->hello();
// echo "</br>";
// echo $vmw->hello();

// para realizar el encadenamiento de metodos y propiedades, la clausula indica que se deve devolver el objeto, para reliazar el encadenamiento,pero como estamos dentro de la clase se devuelve la palabra $this.

// en el ejemplo queremos saber de los 10 galones de gasolina que se cargan y se recorre 40 millas cuantos galones sobran en el tanque
// $gasolina = $vmw->fill(10)->ride(40)->tanque;

echo "</br>";
// echo "los galones que quedan en el tanque son ".$gasolina;

$usuario=new User();
$usuario->setNombre("ramso");
$usuario->apellido="zeravla";
$usuario->getNombre();
$usuario->registrar()->mail();
$car2=new coche("homero mobile");
echo $car2->getModelo();


?>