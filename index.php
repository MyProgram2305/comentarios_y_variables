<!--
	Pablo Miguel Velasco Garcia 4°H
-->
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/estilos.css">
		<title> trabajo 2 </title>
	</head>
	<body>
		<?php 
			$nombre="Pablo Miguel";
			$apellido1="Velasco";
			$apellido2="Garcia";
			$edad=16;
			$años=15;
			$area=330.7;
			echo "<h1> variables tipo cadena $nombre </h1>";
			echo "la variable nombre tiene. $nombre <br>";
			echo 'la variable $nombre tiene '. $nombre."<br>";
			echo "la variable  tiene ". $nombre;
			echo "<br>";
			echo "<hr>";
			echo "<h1> variables tipo cadena $apellido1 </h1>";
			echo "la variable apellido1 tiene. $apellido1 <br>";
			echo 'la variable apellido1 contien el apellido '. $apellido1."<br>";
			echo "el primer apellido es ". $apellido1;
			echo "<br>";
			echo "<hr>";
			echo "<h1> variables tipo cadena $apellido2 </h1>";
			echo "la variable apellido2 tiene. $apellido2 <br>";
			echo 'la variable apellido2 contien el apellido '. $apellido2."<br>";
			echo "el segundo apellido es ". $apellido2;
			echo "<br>";
			echo "<hr>";
			echo "<h1>variable tipo entera $edad  </h1>";
			echo "la variable edad tiene. $edad <br>";
			echo 'la variable $edad tiene'. $edad."<br>";
			echo "la variable  tiene". $edad;
			echo "<br>";
			echo "<hr>";
			echo "<h1>variable tipo entera $años  </h1>";
			echo "la variable años tiene. $años <br>";
			echo 'cuentos años tiene '. $años."<br>";
			echo "tiene ". $años. " años ";
			echo "<br>";
			echo "<hr>";
			echo "<h1>variable tipo float </h1>";
			echo "el area es de . $area <br>";
			echo 'la variable $area tiene'. $area."<br>";
			echo "el area". $edad;
		?>
			<img src="img/taco.jpeg" width="50">
	</body>
</html>