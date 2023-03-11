<?php
 include 'calculoMoneda.php';

 if(isset($_POST['convertir'])){
    
    $cant = $_POST['cant'];
    $De = $_POST['De'];
    $A = $_POST['A'];
  

    $calculoDe = convertir_de_dolar($cant, $De);
   $calculoA = convertir_a_dolar($calculoDe,$A);
    $resultado = number_format($calculoA,2);
    
}

  
 ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Tilt+Neon&display=swap" rel="stylesheet">
    <title>Conversor de Medidas</title>
</head>
<body>
<h1 style="text-align: center; margin:12px;">Calculadora con cinco unidades de Medida</h1>
<nav class="navbar navbar-expand-lg" style="justify-content: center; background-color: #1E90FF;">
  <div class="container-flex" style="justify-content: center;">
    
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav" >
    <a class="nav-link " aria-current="page"style="padding :5px 30px;  font-size:  29px; font-family: 'Tilt Neon', cursive; " href="../Volumen/Volumen.php">Volumen</a>
        <a class="nav-link" style="padding :5px 30px; font-size:  29px; font-family: 'Tilt Neon', cursive;" href="../Longitud/Longitud.php">Longitud</a>
        <a class="nav-link" style="padding :5px 30px;  font-size:  29px; font-family: 'Tilt Neon', cursive; " href="../Tiempophp.php">Tiempo</a>
        <a class="nav-link" style="padding :5px 30px;  font-size:  29px; font-family: 'Tilt Neon', cursive; " href="../moneda.php">Moneda</a>
        <a class="nav-link" style="padding :5px 30px;  font-size:  29px; font-family: 'Tilt Neon', cursive; " href="#">Otro</a>
      </div>
    </div>
  </div>
</nav>
<body>
<h1 class="text-center">Conversor de Moneda</h1>
    <div class="container">
        <form  method="POST">
        <div class="row mt-4">
            <div class="col-sm-4">
                <div>
                    <label for="cant" class="form-label">Cantidad:</label>
                    <input type="number" name="cant" class="form-control" value="">
                </div>

            </div>
           
                <div class="col-sm-4">
                    <label for="De" class="form-label">De:</label> 
                    
                    <select class="form-select" name="De">  
                        
                    <option value="">--Selecciona un tipo de Moneda--</option>                       
                            <option value="Dolar">Dolar</option>
                            <option value="Quetzal">Quetzal</option>
                            <option value="Lempira">Lempira</option>
                            <option value="Euro">Euro</option>
                            <option value="Peso">Peso Mexicano</option>
                            <option value="Colon">Colon Costarricense</option>
                            <option value="Cordoba">Cordoba</option>
                    </select>
                
                
                </div>
                <div class="col-sm-4">
                    <label for="A" class="form-label">A:</label> 
                        
                    <select class="form-select" name="A">
                       
                    <option value="">--Selecciona un tipo de Moneda--</option>                       
                            <option value="Dolar">Dolar</option>
                            <option value="Quetzal">Quetzal</option>
                            <option value="Lempira">Lempira</option>
                            <option value="Euro">Euro</option>
                            <option value="Peso">Peso Mexicano</option>
                            <option value="Colon">Colon Costarricense</option>
                            <option value="Cordoba">Cordoba</option>
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