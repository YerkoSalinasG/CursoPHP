<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Variables</title>
</head>
<body>
	<?php
		// Variables Texto, Numero, booleano... se declara con simbolo $
		$miVariable = "Mi primera Variable";
		echo $miVariable;
		//tambien se puede concatenar
		echo '<h1>'.$miVariable.'</h1>';

		// Básicamente una variable es un contenedor de información, puedo guardar cualquier dato dentro de ella.-

		// Tipos de variables
		$variableTexto = "texto";
		$variableNumero = 44;
		$variableBoolean = true;

		echo '<h2>'.$variableTexto.'</h2>';
		echo '<h2>'.$variableNumero.'</h2>';
		echo '<h2>'.$variableBoolean.'</h2>';

	?>
</body>
</html>