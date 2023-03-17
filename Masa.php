<?php 
/* Aplicamos el principio de sustitución de Liskov para 
que las subclases puedan ser utilizadas de manera intercambiable con la clase base.*/




abstract class MasaConverter {
    protected $value;
    protected $fromUnit;
    protected $toUnit;
    
    public function __construct($value, $fromUnit, $toUnit) {
        $this->value = $value;
        $this->fromUnit = $fromUnit;
        $this->toUnit = $toUnit;
    }
    
    abstract public function convert();
}

// Subclase para convertir de gramos a kilogramos
class GramosAKilogramos extends MasaConverter {
    public function convert() {
        return $this->value / 1000;
    }
}

//  Subclase para convertir de kilogramos a gramos
class KilogramosAGramos extends MasaConverter {
    public function convert() {
        return $this->value * 1000;
    }
}



if (isset($_POST['submit'])) {
    $value = $_POST['value'];
    $fromUnit = $_POST['fromUnit'];
    $toUnit = $_POST['toUnit'];
    
    // Creamos el objeto conversor correspondiente según las unidades ingresadas
    switch ($fromUnit) {
        case 'gramos':
            $converter = new GramosAKilogramos($value, $fromUnit, $toUnit);
            break;
        case 'kilogramos':
            $converter = new KilogramosAGramos($value, $fromUnit, $toUnit);
            break;
        default:
            echo 'Unidad no reconocida';
            exit;
    }
    

    $result = $converter->convert();
    //echo "$value $fromUnit son $result $toUnit";
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
    <title>Document</title>
</head>
<body>

<h1 style="text-align: center; margin:12px;">Calculadora con cinco unidades de Medida</h1>
<nav class="navbar navbar-expand-lg" style="justify-content: center; background-color: #1E90FF;">
  <div class="container-flex" style="justify-content: center;">
    
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav" >
      <a class="nav-link " aria-current="page"style="padding :5px 30px;  font-size:  29px; font-family: 'Tilt Neon', cursive; " href="./Volumen/Volumen.php">Volumen</a>
        <a class="nav-link" style="padding :5px 30px; font-size:  29px; font-family: 'Tilt Neon', cursive;" href="./Longitud/longitud.php">Longitud</a>
        <a class="nav-link" style="padding :5px 30px;  font-size:  29px; font-family: 'Tilt Neon', cursive; " href="./Tiempophp.php">Tiempo</a>
        <a class="nav-link" style="padding :5px 30px;  font-size:  29px; font-family: 'Tilt Neon', cursive; " href="./Moneda/Moneda.php">Moneda</a>
        <a class="nav-link" style="padding :5px 30px;  font-size:  29px; font-family: 'Tilt Neon', cursive; " href="#">Masa</a>
        <a class="nav-link" style="padding :5px 30px;  font-size:  29px; font-family: 'Tilt Neon', cursive; " href="./Temperatura/Temperatura.php">Temperatura</a>
      </div>
    </div>
  </div>
</nav>
 


    <h1 style="text-align: center;">Conversor de Masa</h1>
     <div class="container">
     <form method="post">
     <div class="row mt-4">
    <div class="col-sm-4">
        <div>
          <label>Valor:</label> <input type="text" name="value">
     </div>
   </div>
    <div class="col-sm-4">
    <div>
        <label>Desde unidad:</label> <input type="text" name="fromUnit">
    </div>
   </div>
   <div class="col-sm-4">
    <div>
<label>Hacia unidad:</label> <input type="text" name="toUnit"><br>
</div> 
</div>

</div>
<div class="row mt-4">
    <div class="col-sm-6">
        <div>

<button type="submit" name="submit" class="btn btn-primary w-100 py-4">CONVERTIR</button>
     </div>
</div>
<div class="col-sm-6">
                <div class="mb-3">
                    <label for="resultado" class="form-label">RESULTADO:</label>
                    <input type="text" class="form-control" name="resultado" 
                    value="<?php if (isset($result))  echo "$value $fromUnit son $result $toUnit"; ?>">                
                </div>
            </div>
        </div>
</form>
</div>
</body>
</html>