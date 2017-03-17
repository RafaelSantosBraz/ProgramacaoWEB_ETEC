<html>
	<body>
		<?php
		$cod_aluno = $_GET['cod_aluno'];
		$pesquisa = $_GET['pesquisa'];
		
		//script de conexão com o banco
		//------------------------local--------usuario-senha
		$conexao = mysql_connect("LOCALHOST", "root", "");
		//----------------nome da base
		mysql_select_db("escola3");
		
		$resultado = MYSQL_QUERY ("delete from aluno where cod_aluno = $cod_aluno;");		
		
		IF (MYSQL_AFFECTED_ROWS() > 0)
		{
		   ECHO "EXCLUSÃO REALIZADA COM SUCESSO";
		   $redirecionar = "listaaluno.php?realizada=1&pesquisa=$pesquisa";
		   header("Location: $redirecionar",1000);
		}
		ELSE
		{
		   ECHO "FALHA NA EXCLUSÃO";
		}
		?>
	</body> 
</html> 