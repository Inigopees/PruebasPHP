<html>
	<head>
		<title>ejer3</title>
	</head>
	<body>
		<?php
			$edad=rand(1,99);
			if($edad<10){
				echo $edad." esta entre los 0-10 años";
			}elseif($edad>=10 && $edad<=19){
				echo $edad." esta entre los 10-20 años";
			}
			elseif($edad>=20 && $edad<=29){
				echo $edad." esta entre los 20-30 años";
			}
			elseif($edad>=30 && $edad<=39){
				echo $edad." esta entre los 30-40 años";
			}
			elseif($edad>=40 && $edad<=49){
				echo $edad." esta entre los 40-50 años";
			}
			elseif($edad>=50 && $edad<=59){
				echo $edad." esta entre los 50-60 años";
			}
			elseif($edad>=60 && $edad<=69){
				echo $edad." esta entre los 60-70 años";
			}
			else if($edad>=70 || $edad<=79){
				echo $edad." esta entre los 70-80 años";
			}
			elseif($edad>=80 || $edad<=89){
				echo $edad." esta entre los 80-90 años";
			}
			else{
				echo $edad." esta entre los 90-100 años";
			}
		?>
	</body>
</html>
