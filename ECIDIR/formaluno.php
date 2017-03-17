<html>
	<head>
		<title>Sistema Escola</title>
	</head>
	<body>
		<table width="500px" border="0" align="center">			
			<tr>
				<td bgcolor="#848484" colspan="2" height="150px">
					<font color="white" size="7" face="Arial">Cadastro de aluno</font>
				</td>				
			</tr>
			<?php
				if (isset($_GET["realizada"])){
				$nome = $_GET["nome"];
					if ($_GET["realizada"] == 1 ){
			?>			
			<tr>
				<td bgcolor="#848484" colspan="2">
					<font color="#920808" size="4" face="Arial">
						<?php
							echo ("$nome cadastrado(a) com sucesso!");
						?>	
					</font>
				</td>				
			</tr>
			<?php						
					}
				}
			?>
			<!--início do formulário de pesquisa-->
			<form name="formpesquisaaluno" method="post" action="listaaluno.php">
			<tr>
				<td bgcolor="#A4A4A4" align="right" height="40px">					
				</td>
				<td bgcolor="#A4A4A4" align="right">
					<font color="white" size="3" face="Arial">Pesquisar</font> 
					<input type="text" name="pesquisa" size="20"/>
					<input type="submit" value="Ok"/>
				</td>				
			</tr>
			</form>
			<!--fim do formulário de pesquisa-->
			<!--início do formulário de cadastro-->
			<form name="formaluno" method="post" action="cadaluno.php">
			<tr>
				<td bgcolor="#BDBDBD" align="right">
					<font color="white" size="3" face="Arial">Nome:</font>
				</td>
				<td bgcolor="#BDBDBD">
					<input type="text" name="nome" size="30"/>
				</td>				
			</tr>
			<tr>
				<td bgcolor="#A4A4A4" align="right">
					<font color="white" size="3" face="Arial">Idade:</font>
				</td>
				<td bgcolor="#A4A4A4">
					<input type="text" name="idade" size="3"/>
				</td>				
			</tr>
			<tr>
				<td bgcolor="#BDBDBD" align="right">
					<font color="white" size="3" face="Arial">RG:</font>
				</td>
				<td bgcolor="#BDBDBD">
					<input type="text" name="rg" size="14"/>
				</td>				
			</tr>
			<tr>
				<td bgcolor="#A4A4A4" align="right">
					<font color="white" size="3" face="Arial">Curso:</font>
				</td>
				<td bgcolor="#A4A4A4" >
					<input type="text" name="curso" size="30"/>
				</td>				
			</tr>
			<tr>
				<td bgcolor="#848484" colspan="2" align="center">
					<input type="submit" value="Cadastrar"/>
				</td>				
			</tr>
			</form>
			<!--fim do formulário de cadastro-->
		</table>
	</body>
</html>