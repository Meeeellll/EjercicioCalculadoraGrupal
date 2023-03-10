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
  <title>Conversor de Volumen</title>
</head>
<body>
  <h1>Conversor de Volumen</h1>
  <form method="POST">
    <label>Valor:</label>
    <input type="number" name="valor" value="<?= $valor ?>">
    <br>
    <label>Unidad de origen:</label>
    <select name="unidad_origen">
      <option value="KmCubicos" <?= $unidad_origen === 'KmCubicos' ? 'selected' : '' ?>>Kilómetros cúbicos</option>
      <option value="HmCubicos" <?= $unidad_origen === 'HmCubicos' ? 'selected' : '' ?>>Hectómetros cúbicos</option>
      <option value="DamCubicos" <?= $unidad_origen === 'DamCubicos' ? 'selected' : '' ?>>Decámetros cúbicos</option>
      <option value="MCubicos" <?= $unidad_origen === 'MCubicos' ? 'selected' : '' ?>>Metros cúbicos</option>
      <option value="DmCubicos" <?= $unidad_origen === 'DmCubicos' ? 'selected' : '' ?>>Decímetros cúbicos</option>
      <option value="CmCubicos" <?= $unidad_origen === 'CmCubicos' ? 'selected' : '' ?>>Centímetros cúbicos</option>
      <option value="MmCubicos" <?= $unidad_origen === 'MmCubicos' ? 'selected' : '' ?>>Milímetros cúbicos</option>
    </select>
    <br>
    <label>Unidad de destino:</label>
    <select name="unidad_destino">
        <option value="KmCubicos" <?= $unidad_destino === 'KmCubicos' ? 'selected' : '' ?>>Kilómetros cúbicos</option>
        <option value="HmCubicos" <?= $unidad_destino === 'HmCubicos' ? 'selected' : '' ?>>Hectómetros cúbicos</option>
        <option value="DamCubicos" <?= $unidad_destino === 'DamCubicos' ? 'selected' : '' ?>>Decámetros cúbicos</option>
        <option value="MCubicos" <?= $unidad_destino === 'MCubicos' ? 'selected' : '' ?>>Metros cúbicos</option>
        <option value="DmCubicos" <?= $unidad_destino === 'DmCubicos' ? 'selected' : '' ?>>Decímetros cúbicos</option>
        <option value="CmCubicos" <?= $unidad_destino === 'CmCubicos' ? 'selected' : '' ?>>Centímetros cúbicos</option>
        <option value="MmCubicos" <?= $unidad_destino === 'MmCubicos' ? 'selected' : '' ?>>Milímetros cúbicos</option>
    </select>
<br>
<button type="submit">Convertir</button>

  </form>
  <?php if ($resultado): ?>
    <p><?= $valor ?> <?= $unidad_origen ?> son <?= $resultado ?> <?= $unidad_destino ?></p>
  <?php endif; ?>
</body>
</html>
