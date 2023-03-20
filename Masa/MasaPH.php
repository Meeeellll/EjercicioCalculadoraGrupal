<?php 
//La clase unidadDeMasa es un clase abstracta
// por lo que no se pueden crear objetos propios de esta clase 
//y para ello debe realizarse una herencia
abstract class UnidadDeMasa {
    protected $valor;
    protected $nombre;
  
    public function __construct($valor) {
      $this->valor = $valor;
    }
  
    public function getValor() {
      return $this->valor;
    }
  
    public function getNombre() {
      return $this->nombre;
    }
  
    abstract public function convertir(UnidadDeMasa $unidad);
  }

  //La clase UnidadDeMasa hereda a Gramo y Kilogramo
  /* El polimorfismo se cumple cuando las clases hijas implementan la funcion convertir 
  en la cual estas(clases hijas) lo implementan de formas diferentes*/

  /*En la clase Gramo se usa para confirmar que la unidad que se esta devolviendo es una instancia de la clase kilogramo 
  si es asi, convierte los gramos en kilogramos y por el contrario, solo deviuelve el valor de los gramos*/

  /*En la clase Kilogramos se usa para confirmar que la unidad que se esta devolviendo es una instancia de la clase Gramo
  si es asi, convierte los Kilogramos en Gramos y por el contrario, solo deviuelve el valor de los Kilogramos*/


  class Gramo extends UnidadDeMasa {
    protected $nombre = "gramos";
  
    public function __construct($valor) {
      parent::__construct($valor);
    }
  
    public function convertir(UnidadDeMasa $unidad) {
      if ($unidad instanceof Kilogramo) {
        return new Kilogramo($this->valor / 1000);
      } else {
        return $this;
      }
    }
  }
  
  class Kilogramo extends UnidadDeMasa {
    protected $nombre = "kilogramos";
  
    public function __construct($valor) {
      parent::__construct($valor); // parent:: se usa para acceder a una constante o metodo de una clase padre
    }
     //instanceOf determina si una variable php es un objeto instanciado de una cierta clase
     
    public function convertir(UnidadDeMasa $unidad) {
      if ($unidad instanceof Gramo) {   
        return new Gramo($this->valor * 1000);
      } else {
        return $this;
      }
    }
  }
?>