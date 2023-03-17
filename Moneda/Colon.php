<?php



class Colon implements UnidadMoneda {
     public $cant;
  
  
    public function convertirA(UnidadMoneda $A, $cant) {
      if ($A instanceof Dolar) {
        return $cant * 0.0018;
      }  
      
      }
      }

      class Colon_Lempira_Cordoba extends Colon {

        public function convertirA(UnidadMoneda $A, $cant) {
            if ($A instanceof Lempira) {
                return $cant * 0.045;
            } else if ($A instanceof Cordoba) {
                return $cant *0.066;
              }
         }
         }
         

  class Colon_Euro_Peso extends Colon {

    
    public function convertirA(UnidadMoneda $A, $cant) {
       if ($A instanceof Euro) {
        return $cant *0.0017;
      } else if ($A instanceof Peso) {
        return $cant *0.035;
      } 
      }
      }
      
      
      class Colon_Quetzal extends Colon{

        public function convertirA(UnidadMoneda $A, $cant) {
        if ($A instanceof Quetzal) {
        return $cant *0.014;
      } else {
        throw new Exception('moneda no identificada');
      }
    }
}
  
?>