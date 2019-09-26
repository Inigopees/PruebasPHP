<html>
	<head>
		<title>Ejer6.php</title>
	</head>
	<body>
		<ul>
		<?php
			$potencia=3;
			$cantidad=100;
			$resultado=1;

			for($i=1;$i<=$cantidad;$i++){
				$resultado=pow($potencia,$i);
				if($resultado>100){
					$i=$cantidad;
				}
				else
				{
					echo "<li>".$resultado."</li>";
				}
			}
				
			
		?>
		</ul>
	</body>
</html>
