<html>
	<head>
		<title>Sistema Escola</title>
	</head>	
	<body>
	<?php
		//recebendo o cod_aluno (chave primaria) pela URL e atribuindo para uma variável $cod_aluno
		$cod_aluno = $_GET['cod_aluno'];
				
		//script de conexão com o banco
		//------------------------local--------usuario-senha
		$conexao = mysql_connect("LOCALHOST", "root", "");
		//----------------nome da base
		mysql_select_db("escola3");
		
		//pesquisa na tabela aluno com o código do aluno
		$resultado = mysql_query("select * from aluno where cod_aluno = $cod_aluno;");
		
		//como estamos pesquisando pelo cod_aluno (chave primária) não podemos ter mais de um registro
		//então, não precisamos realizar uma estrutura de repetição como na listagem de aluno (listaaluno.php).
		
		//permite mostrar os campos da tabela em questão 
		$mostra = mysql_fetch_array($resultado);
		
		//atribuindo o valor do cod_aluno para uma variável $cod_aluno
		//variavel ---------- campo igual foi programado no banco de dados
		$cod_aluno = $mostra['cod_aluno'];
		//variavel ----- campo igual foi programado no banco de dados
		$nome = $mostra['nome'];
		//variavel ------ campo igual foi programado no banco de dados
		$idade = $mostra['idade'];
		//variavel --- campo igual foi programado no banco de dados
		$rg = $mostra['rg'];
		//variavel ------ campo igual foi programado no banco de dados
		$curso = $mostra['curso'];
	?>	
		<form name="formeditaaluno" method="post" action="editaraluno.php">	
			<!--input que não aparece na página. Foi usado para armazenar a chave primária
			sem mostrar para o usuário do sistema
			Vamos utilizar a chave primária para fazer alteração de registro-->
			<input type="hidden" name="cod_aluno" value="<?php echo ("$cod_aluno");?>"/>	
		<table width="500px" border="0" align="center">			
			<tr>
				<td bgcolor="#848484" colspan="2" height="150px">
					<font color="white" size="7" face="Arial">Editar aluno</font>
				</td>				
			</tr>
			<?php
				if (isset($_GET["realizada"])){
					if ($_GET["realizada"] == 1 ){
			?>			
			<tr>
				<td bgcolor="#848484" colspan="2">
					<font color="#920808" size="4" face="Arial">
						<?php
							echo ("Alteração realizada com sucesso!");
						?>	
					</font>
				</td>				
			</tr>
			<?php						
					}
				}
			?>	
			<tr>
				<td bgcolor="#BDBDBD" align="right">
					<font color="white" size="3" face="Arial">Nome:</font>
				</td>
				<td bgcolor="#BDBDBD">
					<input type="text" name="nome" size="30" value="<?php echo ("$nome");?>"/>
				</td>				
			</tr>
			<tr>
				<td bgcolor="#A4A4A4" align="right">
					<font color="white" size="3" face="Arial">Idade:</font>
				</td>
				<td bgcolor="#A4A4A4">
					<input type="text" name="idade" size="3" value="<?php echo ("$idade");?>"/>
				</td>				
			</tr>
			<tr>
				<td bgcolor="#BDBDBD" align="right">
					<font color="white" size="3" face="Arial">RG:</font>
				</td>
				<td bgcolor="#BDBDBD">
					<input type="text" name="rg" size="14" value="<?php echo ("$rg");?>"/>
				</td>				
			</tr>
			<tr>
				<td bgcolor="#A4A4A4" align="right">
					<font color="white" size="3" face="Arial">Curso:</font>
				</td>
				<td bgcolor="#A4A4A4" >
					<input type="text" name="curso" size="30" value="<?php echo ("$curso");?>"/>
				</td>				
			</tr>
			<tr>
				<td bgcolor="#848484" colspan="2" align="center">
					<input type="submit" value="Editar"/>
				</td>				
			</tr>
		</table>
		</form>
		<?php
		//fechando conexao
		mysql_close($conexao);
		?>
	</body>
</html>