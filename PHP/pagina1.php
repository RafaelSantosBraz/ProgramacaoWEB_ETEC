<html>
	<head>
		<title>Teste PHP</title>
	</head>
	<body>
		<?php echo "<p>Al� Mundo</p>"; 
			$a = 10;
			$b = 15;
			$c = $a + $b;
			echo "A soma de $a + $b � igual a $c <br>";
			$c = $a - $b;
			echo "A subtra��o de $a + $b � igual a $c <br>";
			$c = $a * $b;
			echo "A multiplica��o de $a + $b � igual a $c <br>";
			if ($b == 0) {
				echo "<b>Imposs�vel divis�o por 0</b>";
			}
			else{
				$c = $a / $b;
				echo "<b> A divis�o de $a por $b � igual a $c <br> </b>";
			}
		?>
	</body>
</html>