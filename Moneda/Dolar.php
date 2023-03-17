<?php


class Dolar implements UnidadMoneda {
     public $cant;
    
  
  
    public function convertirA(UnidadMoneda $A, $cant) {
      if ($A instanceof Colon) {
        return $cant *542.15;
      }  
      
      }
      }

      class Dolar_Lempira_Cordoba extends Dolar {

        public function convertirA(UnidadMoneda $A, $cant) {
          if ($A instanceof Lempira) {
            return $cant * 24.53;
        } else if ($A instanceof Cordoba) {
            return $cant *36.15;
              }
         }
         }
         

  class Dolar_Euro_Peso extends Dolar {

    
    public function convertirA(UnidadMoneda $A, $cant) {
      if ($A instanceof Euro) {
        return $cant *0.94;
      } else if ($A instanceof Peso) {
        return $cant *18.71;
      } 
      }
      }
      
      
      class Dolar_Quetzal extends Dolar{

        public function convertirA(UnidadMoneda $A, $cant) {
          if ($A instanceof Dolar) {
            return $cant *7.79;
      } else {
        throw new Exception('moneda no identificada');
      }
    }
}
  
?>