<?php

include ('./Moneda.php');

class Quetzal implements UnidadMoneda {
     public $cant;
  
  
    public function convertirA(UnidadMoneda $A, $cant) {
      if ($A instanceof Colon) {
        return $cant * 69.42;
      }  
      
      }
      }

      class Quetzal_Lempira_Cordoba extends Quetzal{

        public function convertirA(UnidadMoneda $A, $cant) {
            if ($A instanceof Lempira) {
                return $cant * 3.14;
            } else if ($A instanceof Cordoba) {
                return $cant *4.69;
              }
         }
         }
         

  class Quetzal_Euro_Peso extends Quetzal {

    
    public function convertirA(UnidadMoneda $A, $cant) {
       if ($A instanceof Euro) {
        return $cant *0.12;
      } else if ($A instanceof Peso) {
        return $cant *2.43;
      } 
      }
      }
      
      
      class Quetzal_Dolar extends Quetzal{

        public function convertirA(UnidadMoneda $A, $cant) {
        if ($A instanceof Dolar) {
        return $cant *0.12;
      } else {
        throw new Exception('moneda no identificada');
      }
    }
}
  
?>
?>