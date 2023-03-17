<?php


class Cordoba implements UnidadMoneda {
     public $cant;
  
  
    public function convertirA(UnidadMoneda $A, $cant) {
      if ($A instanceof Dolar) {
        return $cant * 0.027;
      }  
      
      }
      }

      class Cordoba_Lempira_Colon extends Cordoba {

        public function convertirA(UnidadMoneda $A, $cant) {
            if ($A instanceof Lempira) {
                return $cant * 0.066;
            } else if ($A instanceof Colon) {
                return $cant *14.64;
              }
         }
         }
         

  class Cordoba_Euro_Peso extends Cordoba {

    
    public function convertirA(UnidadMoneda $A, $cant) {
       if ($A instanceof Euro) {
        return $cant *0.025;
      } else if ($A instanceof Peso) {
        return $cant *0.51;
      } 
      }
      }
      
      
      class Cordoba_Quetzal extends Cordoba{

        public function convertirA(UnidadMoneda $A, $cant) {
        if ($A instanceof Quetzal) {
        return $cant *0.21;
      } else {
        throw new Exception('moneda no identificada');
      }
    }
}
  
?>