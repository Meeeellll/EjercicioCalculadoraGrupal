<?php
if (isset($_POST['temperatura'])) {
  $temperatura = $_POST['temperatura'];
  $escala_entrada = $_POST['escala_entrada'];
  $escala_salida = $_POST['escala_salida'];

  if ($escala_entrada == 'celsius') {
    if ($escala_salida == 'fahrenheit') {
      $resultado = ($temperatura * 9 / 5) + 32;
      echo "<p>$temperatura grados Celsius son $resultado grados Fahrenheit.</p>";
    } else if ($escala_salida == 'kelvin') {
      $resultado = $temperatura + 273.15;
      echo "<p>$temperatura grados Celsius son $resultado grados Kelvin.</p>";
    } else if ($escala_salida == 'celsius') {
      echo "<p>La temperatura es la misma en ambas escalas.</p>";
    } else {
      echo "<p>La escala de temperatura de salida seleccionada no es válida.</p>";
    }
  } else if ($escala_entrada == 'fahrenheit') {
    if ($escala_salida == 'celsius') {
      $resultado = ($temperatura - 32) * 5 / 9;
      echo "<p>$temperatura grados Fahrenheit son $resultado grados Celsius.</p>";
    } else if ($escala_salida == 'kelvin') {
      $resultado = ($temperatura + 459.67) * 5 / 9;
      echo "<p>$temperatura grados Fahrenheit son $resultado grados Kelvin.</p>";
    } else if ($escala_salida == 'fahrenheit') {
      echo "<p>La temperatura es la misma en ambas escalas.</p>";
    } else {
      echo "<p>La escala de temperatura de salida seleccionada no es válida.</p>";
    }
  } else if ($escala_entrada == 'kelvin') {
    if ($escala_salida == 'celsius') {
      $resultado = $temperatura - 273.15;
      echo "<p>$temperatura grados Kelvin son $resultado grados Celsius.</p>";
    } else if ($escala_salida == 'fahrenheit') {
      $resultado = ($temperatura * 9 / 5) - 459.67;
      echo "<p>$temperatura grados Kelvin son $resultado grados Fahrenheit.</p>";
    } else if ($escala_salida == 'kelvin') {
      echo "<p>La temperatura es la misma en ambas escalas.</p>";
    } else {
      echo "<p>La escala de temperatura de salida seleccionada no es válida.</p>";
    }
  } else {
    echo "<p>La escala de temperatura de entrada seleccionada no es válida.</p>";
  }
}
?>

<h2>Conversor de temperatura</h2>
<form action="Temperatura.php" method="post">
  <label>Ingrese la temperatura:</label>
  <input type="number" name="temperatura"><br><br>

  <label>Escala de temperatura de entrada:</label>
  <select name="escala_entrada">
    <option value="celsius">Celsius</option>
    <option value="fahrenheit">Fahrenheit</option>
    <option value="kelvin">Kelvin</option>
  </select><br><br>

  <label>Escala de temperatura de salida:</label>
  <select name="escala_salida">
    <option value="celsius">Celsius</option>
    <option value="fahrenheit">Fahrenheit</option>
    <option value="kelvin">Kelvin</option>
  </select><br><br>

  <input type="submit" value="Convertir">
</form>
