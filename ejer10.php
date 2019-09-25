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

			if($total_compra<19){
				switch ($tipo_compra) {
					case 'ropa':
						echo "Los gastos de envio son 9 euros. El total te saldria ".($total_compra+9)*0.21." euros.";
					break;
					case 'mascotas':
						echo "No se puede realizar el envio. El total seria, ".($total_compra)*0.10." euros.";
					break;
				}
			}elseif($total_compra>19 && $total_compra<40){
				echo "Los gastos de envio son 9 euros. El total seria ".($total_compra+9)*iva($tipo_compra)." euros.";
			}elseif($total_compra>80){
				echo "Los gastos de envio son gratuitos. El total seria ".($total_compra)*iva($tipo_compra)." euros.";
			}

		?>
	</body>
</html>
