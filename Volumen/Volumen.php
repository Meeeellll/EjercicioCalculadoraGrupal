<?php 
    include_once 'ConvertirV.php';
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
    <a class="nav-link " aria-current="page"style="padding :5px 30px;  font-size:  29px; font-family: 'Tilt Neon', cursive; " href="#">Volumen</a>
        <a class="nav-link" style="padding :5px 30px; font-size:  29px; font-family: 'Tilt Neon', cursive;" href="../Longitud/longitud.php">Longitud</a>
        <a class="nav-link" style="padding :5px 30px;  font-size:  29px; font-family: 'Tilt Neon', cursive; " href="../Tiempophp.php">Tiempo</a>
        <a class="nav-link" style="padding :5px 30px;  font-size:  29px; font-family: 'Tilt Neon', cursive; " href="../Moneda/Moneda.php">Moneda</a>
        <a class="nav-link" style="padding :5px 30px;  font-size:  29px; font-family: 'Tilt Neon', cursive; " href="../Masa.php">Masa</a>
        <a class="nav-link" style="padding :5px 30px;  font-size:  29px; font-family: 'Tilt Neon', cursive; " href="../Temperatura/Temperatura.php">Temperatura</a>
      </div>
    </div>
  </div>
</nav>

<h1 class="text-center">Conversor de Volumen</h1>
    <div class="container">
        <form method="POST" action="Volumen.php">
            <div class="row mt-4">
                <div class="col-sm-4">
                    <div>
                        <label class="form-label">Valor:</label>
                        <input type="number" name="valor" value="<?= $valor ?>" class="form-control">
                    </div>
                </div>
                <div class="col-sm-4">
                    <label class="form-label">Unidad de origen:</label>
                    <select name="unidad_origen" class="form-select">
                        <option value=" ">--Selecciona un valor--</option>
                        <option value="km3" id="km3" name="km3" <?= $unidad_origen === 'km3' ? 'selected' : '' ?>>Kilómetros cúbicos</option>
                        <option value="hm3" id="hm3" name="hm3" <?= $unidad_origen === 'hm3' ? 'selected' : '' ?>>Hectómetros cúbicos</option>
                        <option value="dam3" id="dam3" name="dam3" <?= $unidad_origen === 'dam3' ? 'selected' : '' ?>>Decámetros cúbicos</option>
                        <option value="m3" id="m3" name="m3" <?= $unidad_origen === 'm3' ? 'selected' : '' ?>>Metros cúbicos</option>
                        <option value="dm3" id="dm3" name="dm3" <?= $unidad_origen === 'dm3' ? 'selected' : '' ?>>Decímetros cúbicos</option>
                        <option value="cm3" id="cm3" name="cm3" <?= $unidad_origen === 'cm3' ? 'selected' : '' ?>>Centímetros cúbicos</option>
                        <option value="mm3" id="mm3" name="mm3" <?= $unidad_origen === 'mm3' ? 'selected' : '' ?>>Milímetros cúbicos</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <label class="form-label">Unidad de destino:</label>
                    <select name="unidad_destino" class="form-select">
                        <option value="" selected>--Selecciona un valor--</option>
                        <option value="km3" id="km3" name="km3" <?= $unidad_destino === 'km3' ? 'selected' : '' ?>>Kilómetros cúbicos</option>
                        <option value="hm3" id="hm3" name="hm3" <?= $unidad_destino === 'hm3' ? 'selected' : '' ?>>Hectómetros cúbicos</option>
                        <option value="dam3" id="dam3" name="dam3" <?= $unidad_destino === 'dam3' ? 'selected' : '' ?>>Decámetros cúbicos</option>
                        <option value="m3" id="m3" name="m3" <?= $unidad_destino === 'm3' ? 'selected' : '' ?>>Metros cúbicos</option>
                        <option value="dm3" id="dm3" name="dm3" <?= $unidad_destino === 'dm3' ? 'selected' : '' ?>>Decímetros cúbicos</option>
                        <option value="cm3" id="cm3" name="cm3" <?= $unidad_destino === 'cm3' ? 'selected' : '' ?>>Centímetros cúbicos</option>
                        <option value="mm3" id="mm3" name="mm3" <?= $unidad_destino === 'mm3' ? 'selected' : '' ?>>Milímetros cúbicos</option>
                    </select>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-sm-6">
                    <button type="submit" class="btn btn-primary w-100 py-4">Convertir</button>
                </div>
                <div class="col-sm-6">
                    <label for="resultado" class="form-label">RESULTADO:</label>
                    <input <?php if (isset($resultado)) ?> value="<?php echo $resultado ?>" class="form-control" />
                </div>
            </div>
        </form>
    </div>

    <?php 
    echo "Unidad de origen: " . $unidad_origen;
    echo "<br> Unidad de destino: " . $unidad_destino;
    echo "<br> Valor: " . $valor;
    echo "<br> Resultado: " . $resultado;
    ?>
</body>
</html>