<html>
	<head>
		<title>Ejer1</title>
	</head>
	<body>
		<?php
			$pisos= rand(2,6);
			$NumPuertas= rand (2,6);
			$puertas = ["A","B","C","D","E","F"];
			/*Tenemos 5 pisos en el bloque y en cada piso tenemos 6 puertas */
			
			for($i=1;$i<$pisos;$i++){
				for($a=0;$a<$NumPuertas;$a++){
					echo"<p>".$i."-".$puertas[$a]."</p></br>";
				}
			}
		?>
	</body>
</html>
