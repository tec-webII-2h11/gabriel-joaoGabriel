<?php
	function lista_estados($nome_campo="estado"){
		$estados=array("" => "Selecione seu estado",
						"AC" => "Acre",
						"AL" => "Alagoas",
						"AM" => "Amazonas",
						"AP" => "Amapá",
						"BA" => "Bahia",
						"CE" => "Ceará",
						"DF" => "Distrito Federal",
						"ES" => "Espírito Santo",
						"GO" => "Goiás",
						"MA" => "Maranhão",
						"MG" => "Minas Gerais",
						"MS" => "Mato Grosso do Sul",
						"MT" => "Mato Grosso",
						"PA" => "Pará",
						"PB" => "Paraíba",
						"PE" => "Pernambuco",
						"PI" => "Piauí",	
						"PR" => "Paraná",
						"RJ" => "Rio de Janeiro",
						"RN" => "Rio Grande do Norte",
						"RO" => "Rondônia",
						"RR" => "Roraima",
						"RS" => "Rio Grande do Sul",
						"SC" => "Santa Catarina",
						"SE" => "Sergipe",
						"SP" => "São Paulo",
						"TO" => "Tocantins");
		$ret="<select name='$nome_campo' id='$nome_campo'";
		$ret.=">\n";
		foreach($estados as $chv => $vlr) {
			$ret.="<option value='$chv'>$vlr</option>\n";
		}
		$ret.="</select>";
		return $ret;
	}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php include "data.inc";?>
<meta charset="utf-8"/>
<link rel="stylesheet" type="text/css" href="estilo.css">
<title>Rei da Pesca</title>
</head>
<body>
<?php include "header.inc";?>
<?php include "menu.inc";?>
 </br></br>
<hr>
	<title>Cadastro</title>
</head>
<body>
	<h1>Cadastre-se</h1>
	<form name="Cadastro" id="cadastro" method="post" action="recebeCadastro1.php">
		<p><label>Nome Completo:<input type="text" name="nome" placeholder="Nome" /></label></p>
		<p><label>E-mail: <input type="email" name="email" placeholder="seuemail@email.com" /></label></p>
		<p><label>Confirma E-mail: <input type="email" name="email2" placeholder="seuemail@email.com" /></label></p>
		<p><label for="sexo">Sexo:</label>
		<select name="sexo" id="sexo">
			<option value="" selected>Selecione o Sexo</option>
			<option value="f">Feminino</option>
			<option value="m">Masculino</option>
		</select></p>

		<p><label for="data">Data de Nascimento:</label>
		<input type="date" name="data" /></p>

		<p><label for="<?php echo $nome_campo ?>">Estado</label>
		<?php echo lista_estados(); ?> </p>

		<p><label for="Cidade">Cidade</label><input type="text" name="cidade" placeholder="sua cidade" /></p>
        <p><label for="username">Username: </label><input type="text" id="username" name="username" size="50" /> </p>
            <p><label for="senha">Senha: </label><input type="password" id="senha" name="senha" size="50" minlength="6" /></p>
            <p><label for="confirmar_senha">Confirmar Senha: </label><input type="password" id="confirmar_senha" name="confirmar_senha" size="50" minlength="6" /> </p>
        
            
            <input type="submit" name="Cadastrar" value="Cadastrar">
        </form>
    </body>
</html>


		
        


	</form>

	
<hr>
<?php include "footer.inc";?>

</body>
</html>