<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Tilt+Neon&display=swap" rel="stylesheet">
	<title>Conversión de unidades de masa</title>
</head>
<body >
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



<h1 class="text-center mt-4">Conversor de Longitud</h1>
<div class="container mx-4">
	<form method="post">
        <div class="row mt-4 mx-4 justify-content-center">
            <div class="col-sm-4 ">
                <div>
		        <label for="gramos">Gramos:</label>
		         <input type="number" name="gramos" id="gramos" required>
		       </div>
           </div>
    <div class="col-sm-4">
        <div>
		     <label for="kilogramos">Kilogramos:</label>
		     <input type="number" name="kilogramos" id="kilogramos" required>
        </div> 
   </div>

		<div class="col-sm-4">
		<button type="submit" class="btn btn-primary w-75 py-2 mb-4">Convertir</button>
       </div>

    </div>
      <div class="row mt-4">
             <div class="col-sm-2 mx-4">
                <div class="mb-3">
                    <label for="resultado" >RESULTADO:</label>
                     
                </div>
            </div>

        <div class="col-sm-6">
         <?php
        require_once "MasaPH.php";
	   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$gramo = new Gramo($_POST['gramos']);
		$kilogramo = new Kilogramo($_POST['kilogramos']) ;
		echo $gramo->getValor() . " " . $gramo->getNombre() . " son ";
		$kilogramoConvertido = $gramo->convertir($kilogramo);
		echo $kilogramoConvertido->getValor() . " " . $kilogramoConvertido->getNombre() . "<br>";

		echo $kilogramo->getValor() . " " . $kilogramo->getNombre() . " son ";
		$gramoConvertido = $kilogramo->convertir($gramo);
		echo $gramoConvertido->getValor() . " " . $gramoConvertido->getNombre() . "<br>";
	    }
	   ?>
     </div>
   
    </div>
  

	</form>
   </div>
	
</body>
</html>