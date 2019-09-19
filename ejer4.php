<html>
	<head>
		<title>ejer4</title>
	</head>
	<body>
		<?php
			$numero=rand(1,300);
			
			if($numero%3==0){
				echo "el numero ".$numero." es multiplo de 3";
			}
			else
			{
				echo "el numero ".$numero." no es multiplo de 3";
			}
		?>
	</body>
</html>
