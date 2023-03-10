<?php
require_once 'UnidadVolumen.php';
require_once 'KmCubicos.php';
require_once 'HmCubicos.php';
require_once 'DamCubicos.php';
require_once 'MCubicos.php';
require_once 'DmCubicos.php';
require_once 'CmCubicos.php';
require_once 'MmCubicos.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $valor = $_POST['valor'];
  $unidad_origen = $_POST['unidad_origen'];
  $unidad_destino = $_POST['unidad_destino'];

  $unidad_origen_obj = new $unidad_origen($valor);
  $resultado = $unidad_origen_obj->convertirA(new $unidad_destino(0), $valor);
} else {
  $valor = '';
  $unidad_origen = 'KmCubicos';
  $unidad_destino = 'KmCubicos';
  $resultado = '';
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
    <title>Conversor de Medidas</title>
</head>
<body>
<h1 style="text-align: center; margin:12px;">Calculadora con cinco unidades de Medida</h1>
<nav class="navbar navbar-expand-lg bg-body-tertiary " style="justify-content: center;">
  <div class="container-flex" style="justify-content: center;">
    
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav" >
        <a class="nav-link " aria-current="page"style="padding :5px 30px;  font-size:  29px;" href="./Volumen.php">Volumen</a>
        <a class="nav-link" style="padding :5px 30px; font-size:  29px;" href="../Longitud/Longitud.php">Longitud</a>
        <a class="nav-link" style="padding :5px 30px;  font-size:  29px; " href="#">Tiempo</a>
      </div>
    </div>
  </div>
</nav>

<h1 class="text-center">Conversor de Volumen</h1>
    <div class="container">
        <form method="POST">
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
                        <option value="KmCubicos" <?= $unidad_origen === 'KmCubicos' ? 'selected' : '' ?>>Kilómetros cúbicos</option>
                        <option value="HmCubicos" <?= $unidad_origen === 'HmCubicos' ? 'selected' : '' ?>>Hectómetros cúbicos</option>
                        <option value="DamCubicos" <?= $unidad_origen === 'DamCubicos' ? 'selected' : '' ?>>Decámetros cúbicos</option>
                        <option value="MCubicos" <?= $unidad_origen === 'MCubicos' ? 'selected' : '' ?>>Metros cúbicos</option>
                        <option value="DmCubicos" <?= $unidad_origen === 'DmCubicos' ? 'selected' : '' ?>>Decímetros cúbicos</option>
                        <option value="CmCubicos" <?= $unidad_origen === 'CmCubicos' ? 'selected' : '' ?>>Centímetros cúbicos</option>
                        <option value="MmCubicos" <?= $unidad_origen === 'MmCubicos' ? 'selected' : '' ?>>Milímetros cúbicos</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <label class="form-label">Unidad de destino:</label>
                    <select name="unidad_destino" class="form-select">
                        <option value="" selected>--Selecciona un valor--</option>
                        <option value="KmCubicos" <?= $unidad_destino === 'KmCubicos' ? 'selected' : '' ?>>Kilómetros cúbicos</option>
                        <option value="HmCubicos" <?= $unidad_destino === 'HmCubicos' ? 'selected' : '' ?>>Hectómetros cúbicos</option>
                        <option value="DamCubicos" <?= $unidad_destino === 'DamCubicos' ? 'selected' : '' ?>>Decámetros cúbicos</option>
                        <option value="MCubicos" <?= $unidad_destino === 'MCubicos' ? 'selected' : '' ?>>Metros cúbicos</option>
                        <option value="DmCubicos" <?= $unidad_destino === 'DmCubicos' ? 'selected' : '' ?>>Decímetros cúbicos</option>
                        <option value="CmCubicos" <?= $unidad_destino === 'CmCubicos' ? 'selected' : '' ?>>Centímetros cúbicos</option>
                        <option value="MmCubicos" <?= $unidad_destino === 'MmCubicos' ? 'selected' : '' ?>>Milímetros cúbicos</option>
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

</body>
</html>