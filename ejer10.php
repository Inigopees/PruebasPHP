<html>
	<head>
		<title>ejer10</title>
	</head>
	<body>
		<?php
			$total_compra=87;
			$tipo_compra="mascotas";
			$iva=0.21;
			$total_precio=0;

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
						$total_precio=($total_compra+9)*0.21;
						$total_precio=$total_precio+$total_compra;
						echo "Los gastos de envio son 9 euros. El total te saldria ".$total_precio." euros.";
					break;
					case 'mascotas':
						$total_precio=($total_compra)*0.10;
						$total_precio=$total_precio+$total_compra;
						echo "No se puede realizar el envio. El total seria, ".$total_precio." euros.";
					break;
				}
			}
			elseif($total_compra>19 && $total_compra<40){
				$total_precio=($total_compra+9)*iva($tipo_compra);
				$total_precio=$total_precio+$total_compra;
				echo "Los gastos de envio son 9 euros. El total te saldria ".$total_precio." euros.";
			}
			elseif($total_compra>80){
				$total_precio=$total_compra*iva($tipo_compra);
				$total_precio=$total_precio+$total_compra;
				echo "Los gastos de envio son gratuitos. El total te saldria ".$total_precio." euros.";
			}
		?>
	</body>
</html>
