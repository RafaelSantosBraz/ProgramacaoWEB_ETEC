<html>
	<head>
		<title>Teste PHP</title>
	</head>
	<body>
		<?php echo "<p>Alô Mundo</p>"; 
			$a = 10;
			$b = 15;
			$c = $a + $b;
			echo "A soma de $a + $b é igual a $c <br>";
			$c = $a - $b;
			echo "A subtração de $a + $b é igual a $c <br>";
			$c = $a * $b;
			echo "A multiplicação de $a + $b é igual a $c <br>";
			if ($b == 0) {
				echo "<b>Impossível divisão por 0</b>";
			}
			else{
				$c = $a / $b;
				echo "<b> A divisão de $a por $b é igual a $c <br> </b>";
			}
		?>
	</body>
</html>