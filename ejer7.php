<html>
	<head>
		<title>ejer7</title>
	</head>
	<body>
		
		<?php
			$numero=13;

			function par($numero){
				if($numero%2==0){
					return "par";
				}
				else
				{
					return "impar";
				}
			}
			echo "Numero inicial es el : ".$numero." </br></br>";
			while($numero!=1){
				if(par($numero)=="par"){
					$numero=($numero/2);
					echo $numero.", ";
				}
				else
				{
					$numero=($numero*3)+1;
					echo $numero.", ";
				}
			}
		?>
	</body>

</html>
