<html>
	<head>
		<title>ejer5</title>
	</head>
	<body>
		<?php
			$edad1=9;
			$altura1= 110;
			$edad2=5;
			$acompañado="si";

			if($edad1>10 || $altura1>120){
				if($acompañado=="si" && $edad2>6){
					echo "Los dos pueden subirse a la atraccion";
				}
				else
				{
					echo "Solo se puede subir el mayor";
				}
			}
			else
			{
				echo "No se puede subir ninguno a la atraccion";
			}

		?>
	</body>
</html>
