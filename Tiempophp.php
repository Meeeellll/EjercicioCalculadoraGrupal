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
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Conversor de unidades de medida</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  </head>

  <body  >


<h1 class="text-center">Conversor de Longitud</h1>
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


     

