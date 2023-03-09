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
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  </head>

  <body  class="p-3 m-0 border-0 bd-example bd-example-cols">


  <h1>CONVERTIDOR DE  UNIDADES </h1>
    <!-- Example Code -->
    
  <div class="container px-4 text-center">
      <div class="row gx-5">
        <div class="col">
            <div class="p-3">TIEMPO</div>
          <form method="post">
            <label>Cantidad de tiempo:</label>
             <input type="number" name="cantidad_tiempo">

             <label>Unidad actual:</label>
            <select name="unidad_actual">
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

            <label>Unidad deseada:</label>
             <select name="unidad_deseada">
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

            <input type="submit" value="Convertir">

            <?php if (isset($resultado)) { ?>
        <input type="text" name="resultado" value="<?php echo $cantidad_tiempo . ' ' . $unidad_actual . ' son ' .round( $resultado,2) . ' ' . $unidad_deseada; ?>" readonly>
    <?php } ?>
     
     </form>
        </div>
      </div>
    </div>
 
</body>
</html>


     

