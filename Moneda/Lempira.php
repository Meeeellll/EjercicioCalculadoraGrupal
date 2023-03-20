<?php


class Lempira implements UnidadMoneda {
     public $cant;
  
  
    public function convertirA(UnidadMoneda $A, $cant) {
      if ($De instanceof Dolar) {
        return $cant * 0.04;
      }  
      
      }
      }

      class Lempira_Cordoba_Colon extends Lempira {

        public function convertirA(UnidadMoneda $A, $cant) {
            if ($De instanceof Cordoba) {
                return $cant * 1.47;
            } else if ($De instanceof Colon) {
                return $cant *22.13;
              }
         }
         }
         

  class Lempira_Euro_Peso extends Lempira {

    
    public function convertirA(UnidadMoneda $A, $cant) {
       if ($De instanceof Euro) {
        return $cant *0.037;
      } else if ($De instanceof Peso) {
        return $cant *0.076;
      } 
      }
      }
      
      
      class Lempira_Quetzal extends Lempira{

        public function convertirA(UnidadMoneda $A, $cant) {
        if ($De instanceof Quetzal) {
        return $cant *0.31;
      } else {
        throw new Exception('moneda no identificada');
      }
    }
}
  
?>