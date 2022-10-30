<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:700,600' rel='stylesheet' type='text/css'>
</head>
<body>
   
<form method="POST" action="index.php">
    <div class="box">
    <h1>Conversor de Temperatura</h1>

    <input type="number" name="num1" placeholder="Ingrese valor" class="valor" />
    
    <div class="temperatura">
      <select name="opc1">
			
			<option>opcion</option>
			<option value="c">CELSIUS</option>
			<option value="f">FARENHEID</option>
			<option value="k">KELVIN</option>
				
		</select>
		<label for="">=</label>
    <select name="opc2">
			<option>opcion</option>
			<option value="c">CELSIUS</option>
			<option value="f">FARENHEID</option>
			<option value="k">KELVIN</option>
    </select>  
    </div>
    
    

    <div class="caja">
        <h2>
        	<?php 
if($_POST){
$grado=$_POST["num1"];
$opcion1=$_POST["opc1"];
$opcion2=$_POST["opc2"];
$resultado=0;

switch ($opcion1) {
	case 'c':
		
		if ($opcion2=="c") {
			$resultado=$grado;
			echo $resultado." ºC";
		}
		if ($opcion2=="f") {
			$resultado=(9/5)*$grado+32;
			echo $resultado." ºF";
		}
		if ($opcion2=="k") {
			$resultado=$grado+273.15;
			echo $resultado." ºK";
		}
		break;

	case 'f':
		
		if ($opcion2=="c") {
			$resultado=($grado-32)*5/9;
			echo $resultado." ºC";
		}
		if ($opcion2=="f") {
			$resultado=$grado;
			echo $resultado." ºF";
		}
		if ($opcion2=="k") {
			$resultado=($grado-32)*5/9+273.15;
			echo $resultado." ºK";
		}
		break;

	case 'k':
		
		if ($opcion2=="c") {
			$resultado=$grado-273.15;
			echo $resultado." ºC";
		}
		if ($opcion2=="f") {
			$resultado=($grado-273.15)*9/5+32;
			echo $resultado." ºF";
		}
		if ($opcion2=="k") {
			$resultado=$grado;
			//$resultado=bcdiv($resultado, '1', 2);
			echo $resultado." ºK";
		}
		break;

}
 
}

?>

        </h2>
    </div>
    
		<div class="boton">
			<input type="submit" name="enviar" value="CALCULAR">
		</div>

    

    

    </div> 
  
</form>

<p>Proyecto elaborado por: <u style="color:#f1c40f;">Luis Tapia Ig.</u></p>
  
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>





</body>
</html>