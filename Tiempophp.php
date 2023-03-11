<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener valores del formulario
    $cantidad_tiempo = $_POST['cantidad_tiempo'];
    $unidad_actual = $_POST['unidad_actual'];
    $unidad_deseada = $_POST['unidad_deseada'];
   // $resultado= $_POST['resultado'];

    // Convertir tiempo a segundos
    switch ($unidad_actual) {
        case 'segundos':
            $segundos = $cantidad_tiempo;
            break;
        case 'minutos':
            $segundos = $cantidad_tiempo * 60;
            break;
        case 'horas':
            $segundos = $cantidad_tiempo * 60 * 60;
            break;
        case 'dias':
            $segundos = $cantidad_tiempo * 60 * 60 * 24;
            break;
            case 'semana':
                $segundos = $cantidad_tiempo * 60 * 60 * 24 * 7;
             break;
         case 'mes':
            $segundos = $cantidad_tiempo * 60 * 60 * 24 * 7* 4.345243;
            break;
         case 'anio':
            $segundos = $cantidad_tiempo * 60 * 60 * 24 * 7* 4.345243 *12 ;
             break;
         case 'decada':
            $segundos = $cantidad_tiempo * 60 * 60 * 24 * 7* 4.345243 *12*10 ;
             break;
        case 'siglo':
            $segundos = $cantidad_tiempo * 60 * 60 * 24 * 7* 4.345243 *12*10*10 ;
             break;
    }

    // Convertir segundos a unidad deseada
    switch ($unidad_deseada) {
        case 'segundos':
            $resultado = $segundos;
            break;
        case 'minutos':
            $resultado = $segundos / 60;
            break;
        case 'horas':
            $resultado = $segundos / 60 / 60;
            break;
        case 'dias':
            $resultado = $segundos / 60 / 60 / 24;
            break;
            case 'semana':
                $resultado = $segundos / 60 / 60 / 24 / 7;
             break;
        case 'mes':
                $resultado = $segundos / 60 / 60 / 24 / 7 /4.345243;
             break;
        case 'anio':
                $resultado = $segundos / 60 / 60 / 24 / 7 /4.345243 /12 ;
             break; 
             case 'decada':
                $resultado = $segundos / 60 / 60 / 24 / 7 /4.345243 /12/10;
             break; 
             case 'siglo':
                $resultado = $segundos / 60 / 60 / 24 / 7 /4.345243 /12 /10/10;
             break;    
    }



    // Imprimir resultado
   // echo "$cantidad_tiempo $unidad_actual son $resultado $unidad_deseada.";
    
   
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

    <title>Conversor de unidades de medida</title>
</head>
<body>
<h1 style="text-align: center; margin:12px;">Calculadora con cinco unidades de Medida</h1>
<nav class="navbar navbar-expand-lg" style="justify-content: center; background-color: #1E90FF;">
  <div class="container-flex" style="justify-content: center;">
    
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav" >
      <a class="nav-link " aria-current="page"style="padding :5px 30px;  font-size:  29px; font-family: 'Tilt Neon', cursive; " href="../Volumen/Volumen.php">Volumen</a>
        <a class="nav-link" style="padding :5px 30px; font-size:  29px; font-family: 'Tilt Neon', cursive;" href="../Longitud/Longitud.php">Longitud</a>
        <a class="nav-link" style="padding :5px 30px;  font-size:  29px; font-family: 'Tilt Neon', cursive; " href="../tiempophp.php">Tiempo</a>
        <a class="nav-link" style="padding :5px 30px;  font-size:  29px; font-family: 'Tilt Neon', cursive; " href="../moneda.php">Moneda</a>
        <a class="nav-link" style="padding :5px 30px;  font-size:  29px; font-family: 'Tilt Neon', cursive; " href="#">Otro</a>
      </div>
    </div>
  </div>
</nav>

<h1 class="text-center">Conversor de Tiempo</h1>
    <!-- Example Code -->
    
  <div class="container">
    

            <div class="">TIEMPO</div>
          
         

          <form method="post" class="">

          <div class="row mt-4">
            <div class="col-sm-4">
                <div>
            <label   class="form-label">Cantidad de tiempo:</label>
             <input class="form-control form-control-lg"type="number" name="cantidad_tiempo">
                </div>

            </div>
           <div class="col-sm-4">
             <labe  class="form-label">Unidad actual:</label> 
            <select name="unidad_actual"class="form-select">
            <option value="segundos">Segundos</option>
            <option value="minutos">Minutos</option>
            <option value="horas">Horas</option>
            <option value="dias">Días</option>
            <option value="semana">Semana</option>
            <option value="mes">Mes</option>
            <option value="anio">Año</option>
            <option value="decada">Decada</option>
            <option value="siglo">Siglo</option>
            </select>
            </div>
                <div class="col-sm-4">
            <label  class="form-label lg-3">Unidad deseada:</label>
             <select class="form-select w-3" name="unidad_deseada">
                <option value="segundos">Segundos</option>
                <option value="minutos">Minutos</option>
                <option value="horas">Horas</option>
                <option value="dias">Días</option>
                <option value="semana">Semana</option>
                <option value="mes">Mes</option>
                <option value="anio">Año</option>
                <option value="decada">Decada</option>
                <option value="siglo">Siglo</option>
             </select>
                     </div>
           
        </div>  
        <div class="row mt-4">
            <div class="col-sm-6">
            <input class="btn btn-primary w-100 py-4" type="submit" value="Convertir">
            </div>
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="resultado" class="form-label">RESULTADO:</label>
            <?php if (isset($resultado)) { ?>
        <input class="form-control form-control-lg" type="text" name="resultado" value="<?php echo $cantidad_tiempo . ' ' . $unidad_actual . ' son ' .round( $resultado,2) . ' ' . $unidad_deseada; ?>" readonly>
    <?php } ?>
          </div>
            </div>
         </div>
     
     </form>
   
    
 
</body>
</html>


     

