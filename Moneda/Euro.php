<?php

class Euro implements UnidadMoneda {
     public $cant;
  
  
    public function convertirA(UnidadMoneda $A, $cant) {
      if ($De instanceof Dolar) {
        return $cant * 1.06;
      }  
      
      }
      }

      class Euro_Lempira_Cordoba extends Euro {

        public function convertirA(UnidadMoneda $A, $cant) {
            if ($De instanceof Lempira) {
                return $cant * 582.84;
            } else if ($De instanceof Cordoba) {
                return $cant *38.92;
              }
         }
         }
         

  class Euro_Colon_Peso extends Euro {

    
    public function convertirA(UnidadMoneda $A, $cant) {
       if ($De instanceof Colon) {
        return $cant *582.27;
      } else if ($De instanceof Peso) {
        return $cant *20.18;
      } 
      }
      }
      
      
      class Euro_Quetzal extends Euro{

        public function convertirA(UnidadMoneda $A, $cant) {
        if ($De instanceof Quetzal) {
        return $cant *8.30;
      } else {
        throw new Exception('moneda no identificada');
      }
    }
}
  
?>