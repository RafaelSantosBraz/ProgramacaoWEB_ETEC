<html>
	<head>
		<title>Sistema Escola</title>
	</head>
	<body>
		<?php
		//recebendo os valores do formulário
		$nome = $_POST['nome'];
		$idade = $_POST['idade'];		
		$rg = $_POST['rg'];
		$curso = $_POST['curso'];	
		
		//script de conexão com o banco
		//------------------------local--------usuario-senha
		$conexao = mysql_connect("LOCALHOST", "root", "");
		//----------------nome da base
		mysql_select_db("escola3");
		
		//sql de inserção no banco de dados
		$resultado = mysql_query("insert into aluno
		(nome, idade, rg, curso) 
		values ('$nome', '$idade', '$rg' , '$curso');");

		//verificando se alguma linha do banco foi afetada
		if (mysql_affected_rows() > 0)
		{
		   echo ("$nome cadastrado com sucesso!!");
		   //$redirecionar = "formaluno.php?realizada=1&nome=$nome";
		   //header("Location: $redirecionar",1000);
		}
		else
		{
		   echo ("Falha na inclusão!!");
		}
		//fechando conexao
		mysql_close($conexao);
		?>
	</body> 
</html> 