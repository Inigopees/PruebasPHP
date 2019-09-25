<html>
	<head>
		<title>ejer10</title>
	</head>
	<body>
		<?php
			$total_compra=19;
			$tipo_compra="mascotas";

			function iva($tipo_compra){
				switch ($tipo_compra) {
					case 'ropa':
						$iva=0.21;
						return $iva;
					break;
					case 'mascotas':
						$iva=0.10;
						return $iva;
					break;
				}
			}

			if()

		?>
	</body>
</html>
