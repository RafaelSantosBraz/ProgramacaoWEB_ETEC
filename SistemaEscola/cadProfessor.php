<html>
	<body>
		<?php
		
		$CONEXAO = MYSQL_CONNECT ("LOCALHOST", "root", "");
		MYSQL_SELECT_DB ("academico");
		
		$RESULTADO = MYSQL_QUERY ("INSERT INTO PROFESSOR 
		(nome, carga_horaria, salario, cod_disciplina) 
		VALUES ('$_POST[nome]', '$_POST[carga_horaria]', 
		'$_POST[salario]' , '$_POST[cod_disciplina]');");

		IF (MYSQL_AFFECTED_ROWS() > 0)
		{
		   ECHO "INCLUSÃO REALIZADA COM SUCESSO";
		   $redirecionar = "professor.php?realizada=1&nome=$_POST[nome]";
		   header("Location: $redirecionar",1000);
		  
		}
		ELSE
		{
		   ECHO "FALHA NA INCLUSÃO";
		}
		?>
	</body> 
</html> 