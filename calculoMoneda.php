<?php
    //include ('index.php');
    $cant = "cant";
    $De = "De"; 
    $A = "A";
    
    function convertir_de_dolar($cant, $moneda){
        switch ($moneda) {
            case 'Dolar':
                return floatval($cant) * 1.00;
                break;
            case 'Quetzal':
                return floatval($cant) *0.13;
                break;
            case 'Lempìra':
                    return floatval($cant) * 0.041;
                    break;
            case 'Euro':
                return floatval($cant) *1.06;
                        break;
            case 'Peso':
                    return floatval($cant) *0.054;
                            break;
            case 'Colon':
                    return floatval($cant) *0.0018;
                                break;
            case 'Cordoba':
                    return floatval($cant) *0.027;
            break;
            default:
                return 'moneda no identificada';
                break;
        }
    }
    
    
    function convertir_a_dolar($cant, $moneda){
        switch ($moneda) {
            case 'Dolar':
                return floatval($cant) /1.00;
                break;
            case 'Quetzal':
                    return floatval($cant) /0.13;
                    break;
            case 'Lempira':
                return floatval($cant) /0.041;
                        break;
            case 'Euro':
                    return floatval($cant) /1.06;
                            break;
            case 'Peso':
                    return floatval($cant) /0.054;
                                break;
            case 'Colon':
                    return floatval($cant) /0.0018;
            break;
            case 'Cordoba':
                return floatval($cant) /0.027;
            break;

            default:
                return 'moneda no identificada';
                break;
        }
    }

    
?>