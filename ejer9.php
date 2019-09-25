<html>
	<head>
		<title>ejer9</title>
	</head>
	<body>
		<?php
			$importeventas=19000;
			$porcentaje=0;
			if($importeventas<10000){
				$porcentaje=$importeventas*0.05;
				$importeventas=$importeventas+$porcentaje;
				echo "El empleado tiene una comision de ".$porcentaje." y en total tiene : ".$importeventas;
			}else if($importeventas>10000 && $importeventas<20000){
				$porcentaje=$importeventas*0.08;
				$importeventas=$importeventas+$porcentaje;
				echo "El empleado tiene una comision de ".$porcentaje." y en total tiene : ".$importeventas;
			}else if($importeventas>20000 && $importeventas<40000){
				$porcentaje=$importeventas*0.10;
				$importeventas=$importeventas+$porcentaje;
				echo "El empleado tiene una comision de ".$porcentaje." y en total tiene : ".$importeventas;
			}else if($importeventas>40000){
				$porcentaje=$importeventas*0.13;
				$importeventas=$importeventas+$porcentaje;
				echo "El empleado tiene una comision de ".$porcentaje." y en total tiene : ".$importeventas;
			}
		?>
	</body>
</html>
