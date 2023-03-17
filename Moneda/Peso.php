<?php

class Peso implements UnidadMoneda {
     public $cant;
  
  
    public function convertirA(UnidadMoneda $A, $cant) {
      if ($A instanceof Dolar) {
        return $cant * 0.052;
      }  
      
      }
      }

      class Peso_Lempira_Cordoba extends Peso {

        public function convertirA(UnidadMoneda $A, $cant) {
            if ($A instanceof Lempira) {
                return $cant * 1.30;
            } else if ($A instanceof Cordoba) {
                return $cant *1.92;
              }
         }
         }
         

  class Peso_Euro_Colon extends  Peso {

    
    public function convertirA(UnidadMoneda $A, $cant) {
       if ($A instanceof Euro) {
        return $cant *0.049;
      } else if ($A instanceof Colon) {
        return $cant *28.88;
      } 
      }
      }
      
      
      class Peso_Quetzal extends Peso{

        public function convertirA(UnidadMoneda $A, $cant) {
        if ($A instanceof Quetzal) {
        return $cant *0.41;
      } else {
        throw new Exception('moneda no identificada');
      }
    }
}
  
?>