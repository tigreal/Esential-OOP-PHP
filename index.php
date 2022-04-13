<?php

// se manejara el concepto de abstaccion en OOP pero atravez de interfaces, las interfaces son el segundo nivel de abstraccion 
// las interfaces son parecidas a las clases abstractas tambien tienen metodos abstractos y constantes que son muy utiles cuando se trabajo en equipo, para obligar a los programadores a escribir siertos metodos en las clases secuandarias o heredadas.
// la gran diferencia entre interfaces y clases abstractas es que las interfaces solo pueden tener metodos publicos y no pueden tener variables
// una interface se declara con la palabra interfa, y se utiliza en la clase secundario con la palabra implentes
interface cocheInterface{
    // solo tiene :
    // metodos publicos
    // costantes
    // y NO pueden tener variables
    // Tambien se puede heredar o implementar mas de una interface en las clases secundarias
    // es una forma de hace multi herencia. o en otras palabras una clase secundaria puede heredar mas de una interface

    // diferencias entre interfaces y clases abstractas

                        // inteface            clase abstracta
    // en el codigo     -metodos abstractos     -metodos abstactos
                     // -constantes             -constantes
                                            //  -metodos contcretos(metodos con cuerpo)
                                            //  -variables concretas(propiedas o varialbes)
    
    //Scope(alcance)    -publico                -publico
                                            //  -protegido
                                            //  -privado
                                            //  -etc

    //Num Herencias     -una clase puede         unas clase solo puede heredar una clase abstracta
    //                  heredar mas de una
    //                  interface(multiherencia)


    // implementamos dos metodos para que se implemente en las clases secundarias
    public function setModelo($modelo);
    public function getModelo();
    
    

}
interface VeiculoInterface{
    public function setTieneRuedas($bool);
    public function getRuedas();
    
    
}
class miniCar implements cocheInterface, VeiculoInterface{
    private $modelo;
    private $tineRueda;
    public function setModelo($modelo)
    {
        $this->modelo=$modelo;

    }
    public function getModelo()
    {
        return $this->modelo;
    }
    public function setTieneRuedas($bool)
    {
        $this->tieneRueda=$bool;
    }
    public function getRuedas()
    {
        return $this->tieneRueda?"tiene rueda":"no tiene rueda";

    }


}
$objeto12 = new miniCar();
$objeto12->setModelo('toyota Minicar');
echo "</br>".$objeto12->getModelo();
$objeto12->setTieneRuedas(false);
echo "</br>".$objeto12->getRuedas();


abstract class carro{

    // podemos usar las clases abstractas para forzar al programador a escribir o implementar siertos metodos

    protected $tankVolume;

    // las clases abstractas pueden tener metodos no abstractos y propiedades q no pueden ser abstractas
    public function setTankVolume($tankVolume)
    {
        $this->tankVolume=$tankVolume;
    }
    // para crear objetos de las clases abstractas se deben crear clases secundarias, las cuales deben implentar el cuerpo de los metodos abstractos, se usa la palabra extends para usar las clases abstractas

    // los metodos abstractos no tienen cuerpo por lo que no llevan parentecis y solo llevarian punto y coma al final
    public abstract function CalNumMillasFullTank();
    
        
    

}
class carrosa extends carro{

    public function calNumMillasFullTank()
    {
        $mille=$this->tankVolume*30;
        return $mille;
    }
}
class carrosa4Caballos extends carro{
    public function calNumMillasFullTank()
    {
        return $mille=$this->tankVolume*33;
    }
    public function getColor()
    {
        return "begie";
        
    }


}
$carro4ca= new carrosa4Caballos();
$carro4ca->setTankVolume(10);
echo "</br>".$carro4ca->calNumMillasFullTank();
echo "</br>".$carro4ca->getColor();

abstract class usurioAbstracto{
    private $nombreUsuario;
    public abstract function yourRole();
    public function setNombreUsuario($nombre)
    {
        $this->nombreUsuario=$nombre;
    }
    public function getNombreUsuario()
    {
        return $this->nombreUsuario;
    }
    
}
class Admin1 extends usurioAbstracto{
    public function yourRole()
    {
        return "</br> administrador";
    }

}
class Visor extends usurioAbstracto{
    public function yourRole()
    {
        return "</br> visor";
    }

}

$objAdmin=new Admin1();
$objAdmin->setNombreUsuario("osmar");
echo "</br>".$objAdmin->getNombreUsuario();
echo $objAdmin->yourRole();


class usuarioMain{
    protected $nombre;
    public function setNombre($nombre)
    {
        $this->nombre=$nombre;
    }


}
class admin extends usuarioMain{
    public function sayHola()
    {
        return "</br> hola administrador ".$this->nombre;
    }

}

$usuari=new admin();
$usuari->setNombre("osmar");
echo $usuari->sayHola();
class mascota{
    private $nombre;
    public $raza;
    public function getNombre()
    {
        return $this->nombre;
    }
    // al declara una metodo como FINAL, este metodo no puede ser remplazado en la clase hija.
    final public function getRaza()
    {
        return $this->raza;
    }
}
class perroChapi extends mascota{
    public $nombre= "dog";

    public function getNombre()
    {
        return $this->nombre;
    }
    // no se puede remplazar este metodo porque en la clase padre esta declarado como final
    // public function getRaza()
    // {
    //     return $this->raza;
    // }
}
// llamaremos a metodo getraza que tenemos en la clase hija pero nos saltara un error ya que ese metodo no puede ser remplazado ya que esta declarado como FINAL en la clase padre
$mascota1=new perroChapi();
echo $mascota1->getNombre();
// echo $mascota1->getRaza();

class cochePadre{
    // se puede heredar los metodos y propiedades que no sean privadas.
    protected $modelo;
    public function setModelo($modelo)
    {
        $this->modelo=$modelo;
    }
    public function hola()
    {
        return "</br> bip soy  ".$this->modelo;
    }
    public function getModelo()
    {
        return $this->modelo;
    }
}
class cocheDeportivo extends cochePadre{
    private $estilo ="rapido y furioso";
    public function conduceConEstilo()
    {
        return "</br>conduce un ".$this->getModelo()." ".$this->estilo;
    }
    public function hola2()
    {
        // estamos accediendo a una propidad que en primera instancia era privada pero en la segunda instancia la volvemos protegida para poder acceder a ella.
        return "</br>Accediendo a una propiedad privada ".$this->modelo;
    }
    public function hola()
    {
        // esta clase remplaza el metodo de la clase padre al tener el mismo nombre, que en la clase padre
        return "</br> HOLA  ".$this->modelo;
    }

}
$autoHeredado=new cocheDeportivo();
$autoHeredado->setModelo("Toyota");
echo $autoHeredado->hola();
$autoHeredado2=new cocheDeportivo();
$autoHeredado2->setModelo("subaru");
echo $autoHeredado2->conduceConEstilo();
echo $autoHeredado2->hola2();
// creamo un objeto y llamos al medoto hola, pero llama al de la clase hijo y no la del pablre
$autoLLamandoMetodo=new cocheDeportivo();
echo $autoLLamandoMetodo->hola();


class coche{

    private $modelo="";
    public $tanque;
    public $nuemroEuedas;
    Public $hastRuf=true;
    public $color="orangae";
    public $haystack=array('mercedes', 'toyota');

    public function __construct($modelo=null)
    {
        // el __construct es un metodo magico pero tambien hay constantes magicas que se declaran con dos guiones bajos antes y despues como : __CLASS__ (obtenemos el nombre de la clase)__LINE__(numero de linea donde usamos la costante magica)__FILE__(nombre o ruta del archivo condo utilizamos la contsante)__METHOD__(obtenemos el nombre del metodo en la que utiliza la contante)
        $this->modelo=$modelo;
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
        return "</br>la clase ".__CLASS__." tiene el modelo de carro con privado es: ".$this->modelo;
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
class userConConstructor{
    private $nombre;
    private $apellido;

    public function __construct($nombre="generico",$apellido="generico")
    {
        if($nombre and $apellido){
            $this->nombre=$nombre;
            $this->apellido=$apellido;
        }
    }
    public function getFullNombre(Type $var = null)
    {
        return "</br>su nombre completo es: ".$this->nombre." ".$this->apellido;

    }

}
$usuario0=new userConConstructor("osmar","alvarez");
echo $usuario0->getFullNombre();
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