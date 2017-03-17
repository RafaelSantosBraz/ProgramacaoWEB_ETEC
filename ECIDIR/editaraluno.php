<html>
	<body>
		<?php
		//recebendo todos os valores do formulario de edição de aluno
		$cod_aluno = $_POST['cod_aluno'];
		$nome = $_POST['nome'];
		$idade = $_POST['idade'];		
		$rg = $_POST['rg'];
		$curso = $_POST['curso'];
		
		//script de conexão com o banco
		//------------------------local--------usuario-senha
		$conexao = mysql_connect("LOCALHOST", "root", "");
		//----------------nome da base
		mysql_select_db("escola3");
		
		//fazendo o SQL de alteração de registro na tabela de aluno
		//LEMBRANDO: em um update nunca se esqueça de colocar o where 
		$resultado = mysql_query ("update aluno set 
		nome='$nome', 
		idade='$idade', 
		rg='$rg' , 
		curso='$curso' where cod_aluno=$cod_aluno;");		
		
		//verificando de houve altereção na base de dados 
		if (mysql_affected_rows() > 0)
		{
		   echo "ALTERAÇÃO REALIZADA COM SUCESSO";
		   //redireciona para a página do formulário com o códido do aluno (PK) e mais um
		   //parâmetro que é o realizada.
		   $redirecionar = "formeditaaluno.php?cod_aluno=$cod_aluno&realizada=1";
		   header("Location: $redirecionar",1000);
		}
		else
		{
		   echo "FALHA NA ALTERAÇÃO";
		}
		
		//fechando conexao
		mysql_close($conexao);
		
		?>
	</body> 
</html> 