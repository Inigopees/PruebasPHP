<html>
	<head>
		<title>Ejer2</title>
	</head>
	<body>
		<?php
			$num1=rand(1,10);
			$num2=rand(1,10);
			$num3=rand(1,10);
			
			if($num1<$num2){
				if($num2>$num3){
					echo"<p>el numero ".$num2." es mayor que ".$num3." y ".$num1."</p>";
				}
				else
				{
					echo"<p>el numero ".$num3." es mayor que ".$num2." y ".$num1."</p>";
				}
				if($num1>$num3){
					echo"<p>el numero ".$num1." es mayor que ".$num3." y ".$num2."</p>";
				}
			}
				
		?>
	</body
</html>
