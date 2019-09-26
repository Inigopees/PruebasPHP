<html>
	<head>
		<title>ejer8</title>
	</head>
	<body>
		<?php
		function crear_piramide ($filas){
			for($i=1;$i<$filas;$i++){
				$asteriscos = str_repeat("*",($i -1)*2+1);
				$espacios = str_repeat(" ", $filas-$i);
				echo $espacios.$asteriscos."</br>";
			}
		}
		echo "<pre>";
		
		crear_piramide(9);
		?>
	</body>
</html>