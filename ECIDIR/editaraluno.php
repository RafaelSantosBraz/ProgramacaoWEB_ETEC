<html>
	<body>
		<?php
		//recebendo todos os valores do formulario de edi��o de aluno
		$cod_aluno = $_POST['cod_aluno'];
		$nome = $_POST['nome'];
		$idade = $_POST['idade'];		
		$rg = $_POST['rg'];
		$curso = $_POST['curso'];
		
		//script de conex�o com o banco
		//------------------------local--------usuario-senha
		$conexao = mysql_connect("LOCALHOST", "root", "");
		//----------------nome da base
		mysql_select_db("escola3");
		
		//fazendo o SQL de altera��o de registro na tabela de aluno
		//LEMBRANDO: em um update nunca se esque�a de colocar o where 
		$resultado = mysql_query ("update aluno set 
		nome='$nome', 
		idade='$idade', 
		rg='$rg' , 
		curso='$curso' where cod_aluno=$cod_aluno;");		
		
		//verificando de houve altere��o na base de dados 
		if (mysql_affected_rows() > 0)
		{
		   echo "ALTERA��O REALIZADA COM SUCESSO";
		   //redireciona para a p�gina do formul�rio com o c�dido do aluno (PK) e mais um
		   //par�metro que � o realizada.
		   $redirecionar = "formeditaaluno.php?cod_aluno=$cod_aluno&realizada=1";
		   header("Location: $redirecionar",1000);
		}
		else
		{
		   echo "FALHA NA ALTERA��O";
		}
		
		//fechando conexao
		mysql_close($conexao);
		
		?>
	</body> 
</html> 