<?php
//require('../Menu.php'); 
require_once './UnidadLongitud.php';
require_once ('./Milimetros.php');
require_once ('./Centimetros.php');
require_once ('./Decimetro.php');
require_once ('./Metros.php');
require_once ('./Decametros.php');
require_once ('./Hectometros.php');
require_once ('./Kilometros.php');
include 'longitudCalculos.php';


 
 if(isset($_POST['convertir'])){
    //obtener valores
    $valor = $_POST['valor'];
    $desde = $_POST['desde'];
    $hasta = $_POST['hasta'];
 }
  

  $calculoDesde = convertir_a_metros($valor, $desde);
  $calculoHasta = convertir_desde_metros($calculoDesde,$hasta);
    $resultado = ($calculoHasta);
    //$resultado = $calculoHasta;



 
  
 ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <title>Conversor de unidades de medida</title>
</head>
<body>
    <h1 style="text-align: center; margin:12px;">Calculadora con cinco unidades de Medida</h1>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid" style="text-align: center;">
    
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav" >
        <a class="nav-link " aria-current="page"style="padding :5px 30px;  font-size:  29px;" href="../Volumen/Volumen.php">Volumen</a>
        <a class="nav-link" style="padding :5px 30px; font-size:  29px;" href="../Longitud/Longitud.php">Longitud</a>
        <a class="nav-link" style="padding :5px 30px;  font-size:  29px; " href="#">Tiempo</a>
      </div>
    </div>
  </div>
</nav>
<h1 class="text-center">Conversor de Longitud</h1>
    <div class="container">
        <form  method="POST">
        <div class="row mt-4">
            <div class="col-sm-4">
                <div>
                    <label for="valor" class="form-label">Valor:</label>
                    <input type="number" name="valor" class="form-control" value="">
                </div>

            </div>
           
                <div class="col-sm-4">
                    <label for="desde" class="form-label">Desde:</label> 
                    
                    <select class="form-select" name="desde">  
                        
                            <option value="">--Selecciona un valor--</option>                       
                            <option value="Milimetro" >Milímetro</option>
                            <option value="Centimetro" >Centímetro</option>
                            <option value="Decimetro" >Decímetro</option>
                            <option value="Metro" >Metro</option>
                            <option value="Decametro" >Decámetro</option>
                            <option value="Hectometro" >Hectómetro</option>
                            <option value="Kilometro" >Kilómetro</option>
                    </select>
                
                
                </div>
                <div class="col-sm-4">
                    <label for="hasta" class="form-label">Hasta:</label> 
                        
                    <select class="form-select" name="hasta">
                       
                    <option value="">--Selecciona un valor--</option>                       
                            <option value="Milimetro" >Milímetro</option>
                            <option value="Centimetro" >Centímetro</option>
                            <option value="Decimetro" >Decímetro</option>
                            <option value="Metro" >Metro</option>
                            <option value="Decametro" >Decámetro</option>
                            <option value="Hectometro" >Hectómetro</option>
                            <option value="Kilometro" >Kilómetro</option>
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
                    <input type="text" class="form-control" name="resultado" 
                    value="<?php if (isset($resultado)) echo $resultado; ?>">                
                </div>
            </div>
        </div> 
        
         </form>
          
    </div>
    
</body>

</html>