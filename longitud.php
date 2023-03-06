<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Conversor de unidades de medida</title>
</head>
<body>
<h1 class="text-center">Conversor de Longitud</h1>
    <div class="container">
        <form  method="post">
        <div class="row mt-4">
            <div class="col-sm-4">
                <div>
                    <label for="valor" class="form-label">Valor:</label>
                    <input type="number" name="valor" class="form-control" value="valor" />
                </div>
            </div>
                <div class="col-sm-4">
                    <label for="desde" class="form-label">Desde:</label>
                    <select class="form-select" name="desde">
                            <option value="">--Selecciona un valor--</option>
                            <option value="Milimetro">Milímetro</option>
                            <option value="Centimetro">Centímetro</option>
                            <option value="Decimetro">Decímetro</option>
                            <option value="Metro">Metro</option>
                            <option value="Decámetro">Decámetro</option>
                            <option value="Hectómetro">Hectómetro</option>
                            <option value="Kilómetro">Kilómetro</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <label for="hasta" class="form-label">Hasta:</label>
                    <select class="form-select" name="hasta">
                            <option value="">--Selecciona un valor--</option>
                            <option value="Milimetro">Milímetro</option>
                            <option value="Centimetro">Centímetro</option>
                            <option value="Decimetro">Decímetro</option>
                            <option value="Metro">Metro</option>
                            <option value="Decámetro">Decámetro</option>
                            <option value="Hectómetro">Hectómetro</option>
                            <option value="Kilómetro">Kilómetro</option>
                        </select>
                </div>
        </div>
        <div class="row mt-4">
            <div class="col-sm-6">
                <button type="submit" name="convertir" class="btn btn-primary w-100 py-4">CONVERTIR</button>
            </div>
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="resultado" class="form-label">RESULTADO:</label>
                    <input type="text" class="form-control" name="resultado">
                </div>
            </div>
        </div>
         </form>
    </div>
</body>
</html>

<?php
    //include ('index.php');
    $valor = $_POST["valor"];
    $desde = $_POST["desde"];
    $hasta = $_POST["hasta"];
    
    //medidas
    function convertirAmetros($valor, $unidad_desde){
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
                    return floatval($valor) * 1;
                            break;
            case 'Decametro':
                    return floatval($valor) * 10;
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
                    return floatval($valor) *1;
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

    if(isset($_POST['convertir'])){
        //obtener valores
        $valor = $_POST['valor'];
        $desde = $_POST['desde'];
        $hasta = $_POST['hasta'];
        $calculoDesde = convertirAmetros($valor, $desde);
        $calculoHasta = convertir_desde_metros($calculoDesde,$hasta);
        $resultado = $_POST[`$calculoHasta`];
    }

    echo "<p>el valor es de . $valor</p>";
    echo "<p>El resultado final es de . $calculoHasta</p>";
    echo "<p>resultado $resultado</p>"
?>