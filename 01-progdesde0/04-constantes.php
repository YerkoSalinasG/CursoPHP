<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Constantes</title>
</head>
<body>
	<?php
		// Constantes son similar a las variables pero el valor NO CAMBIA se declaran.... define('nombredelaconstante', 'valor de la constante')

        define('nombre','Yerko Salinas Gómez');
        echo nombre; // se muestran sin el signo de dinero

        //Constantes predefinidas
        echo "<br>";
        echo PHP_OS; // SISTEMA OPERATIVO
        echo "<br>";
        echo PHP_VERSION; // VERSION DE PHP
        echo "<br>";
        echo PHP_EXTENSION_DIR; // DONDE ESTAN LAS EXTENSIONES DE PHP
        echo "<br>";
        echo __LINE__; // MUESTRA LA LINEA DONDE ESTA EL CODIGO
        echo "<br>";
        echo __FILE__; // RUTA COMPLETA DEL ARCHIVO
        echo "<br>";
        echo __FUNCTION__; // MUESTRA LA FUNCION
        echo "<br>";
        // HAY MUCHAS...

		
	?>
</body>
</html>