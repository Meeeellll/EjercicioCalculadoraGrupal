<?php

    //$valor = "";
    //$desde = "";
   // $hasta = "";

class Kilometros implements UnidadLongitud {
    private $valor;
    public $desde;
    public $hasta;
  
    public function __construct($valor,$desde,$hasta ) {
      $this->valor = $valor;
      $this->desde = $desde;
      $this->hasta =$hasta;

    }
    
    
    //medida stardard a tomar son los metros
    public function convertir_a_metros($valor,$unidad_desde){
        switch ($unidad_desde) {
            case 'Milimetro':
                return floatval($valor) / 1000;
                break;
            case 'Centimetro':
                    return floatval($valor) / 100;
                    break;
            case 'Decimetro':
                return floatval($valor) / 10;
                        break;
            case 'Metro':
                    return floatval($valor) *1;
                            break;
            case 'Decametro':
                    return floatval($valor) *10;
                                break;
            case 'Hectometro':
                    return floatval($valor) * 100;
            break;
            case 'Kilometro':
                return floatval($valor) * 1000;
            break;
            default:
                return 'Unidad de medida no soportada';
                break;
        }
    }
    //convertir desde metros
    function convertir_desde_metros($valor, $unidad_hasta){
        switch ($unidad_hasta) {
            case 'Milimetro':
                return floatval($valor) *1000;
                break;
            case 'Centimetro':
                    return floatval($valor) *100;
                    break;
            case 'Decimetro':
                return floatval($valor) *10;
                        break;
            case 'Metro':
                    return floatval($valor) *10;
                            break;
            case 'Decametro':
                    return floatval($valor) / 10;
                                break;
            case 'Hectometro':
                    return floatval($valor) /100;
            break;
            case 'Kilometro':
                return floatval($valor) /1000;
            break;

            default:
                return 'Unidad de medida no soportada';
                break;
        }
    }
   
    }
   
    
    
    
?>