<html>
	<head>
		<title>Sistema Escola</title>
	</head>
	<body link="#FFFFFF" alink="#FFFFFF" vlink="#FFFFFF">
		<?php
		//verifica se a pesquisa vem pelo parâmetro GET ou POST
		if (isset($_GET["pesquisa"])){
			$pesquisa = $_GET["pesquisa"];
		}else{
			$pesquisa = $_POST['pesquisa'];		
		}
		//dá um alerta em JS se a exclusão aconteceu
		if (isset($_GET["realizada"])){ 
				$realizada = $_GET['realizada'];
				if ($realizada == 1 ){
					?>
					<script>
						alert("Exclusão realizada com sucesso!");
					</script>					
					<?php
					//echo "Exclusão realizada com sucesso!!";
				}
		}
		
		
		//script de conexão com o banco
		//------------------------local--------usuario-senha
		$conexao = mysql_connect("LOCALHOST", "root", "");
		//----------------nome da base
		mysql_select_db("escola3");
		
		//sql de pesquisa no banco de dados
		$resultado = mysql_query("select * from aluno where nome like '%$pesquisa%';");
		
		?>
		<table width="500px" border="0" align="center">			
			<tr>
				<td bgcolor="#848484" colspan="6" height="150px">
					<font color="white" size="7" face="Arial">Listagem de Alunos</font>
				</td>				
			</tr>
			<tr>
				<td bgcolor="#848484" colspan="6" height="50px">
					<font color="white" size="3" face="Arial">
					<?php
					echo mysql_num_rows($resultado) . " aluno(s) existente(s)";
					?>
					</font>
				</td>				
			</tr>
			<tr>
				<td bgcolor="#848484">
					<font color="white" size="3" face="Arial">Nome</font>
				</td>
				<td bgcolor="#848484">
					<font color="white" size="3" face="Arial">Idade</font>
				</td>
				<td bgcolor="#848484">
					<font color="white" size="3" face="Arial">RG</font>
				</td>
				<td bgcolor="#848484">
					<font color="white" size="3" face="Arial">Curso</font>
				</td>
				<td bgcolor="#848484">
				</td>
				<td bgcolor="#848484">					
				</td>
			</tr>
			<?php
				//estrutura de repetição para listar os resultados da pesquisa
				For($i=0; $i<mysql_num_rows($resultado); $i++){	
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
					
					//testando para ver se o indice é par ou impar
					//apenas para deixar cada linha de uma cor... rs! ou seja, perfumaria...
					if ($i % 2 == 0){
						?>
							<tr>
								<td bgcolor="#BDBDBD" align="right">
									<font color="white" size="3" face="Arial"><?php echo("$nome"); ?></font>
								</td>
								<td bgcolor="#BDBDBD">
									<font color="white" size="3" face="Arial"><?php echo("$idade"); ?></font>
								</td>	
								<td bgcolor="#BDBDBD">
									<font color="white" size="3" face="Arial"><?php echo("$rg"); ?></font>
								</td>	
								<td bgcolor="#BDBDBD">
									<font color="white" size="3" face="Arial"><?php echo("$curso"); ?></font>
								</td>	
								<td bgcolor="#BDBDBD">	
									<font color="white" size="3" face="Arial">
										<a href="formeditaaluno.php?cod_aluno=<?php echo("$cod_aluno"); ?>">Editar</a>
									</font>
								</td>	
								<td bgcolor="#BDBDBD">	
									<font color="white" size="3" face="Arial">
										<a href="excluiraluno.php?cod_aluno=<?php echo("$cod_aluno");?>&pesquisa=<?php echo("$pesquisa");?>">Excluir</a>
									</font>
								</td>			
							</tr>	
						<?php						
					}else{
						?>
							<tr>
								<td bgcolor="#A4A4A4" align="right">
									<font color="white" size="3" face="Arial"><?php echo("$nome"); ?></font>
								</td>
								<td bgcolor="#A4A4A4">
									<font color="white" size="3" face="Arial"><?php echo("$idade"); ?></font>
								</td>	
								<td bgcolor="#A4A4A4">
									<font color="white" size="3" face="Arial"><?php echo("$rg"); ?></font>
								</td>	
								<td bgcolor="#A4A4A4">
									<font color="white" size="3" face="Arial"><?php echo("$curso"); ?></font>
								</td>	
								<td bgcolor="#A4A4A4">	
									<font color="white" size="3" face="Arial">
										<a href="formeditaaluno.php?cod_aluno=<?php echo("$cod_aluno"); ?>">Editar</a>
									</font>
								</td>	
								<td bgcolor="#A4A4A4">	
									<font color="white" size="3" face="Arial">
										<a href="excluiraluno.php?cod_aluno=<?php echo("$cod_aluno");?>&pesquisa=<?php echo("$pesquisa");?>">Excluir</a>
									</font>
								</td>		
							</tr>	
						<?php
					}
				}	
			?>
		</table>		
		<?php
		//fechando conexao
		mysql_close($conexao);
		?>
	</body> 
</html> 