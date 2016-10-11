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
<br><br>
		<form action="verificalogin.php" method="POST">
			<fieldset>
			<legend>Login</legend>
				<p><label for="nome">Nome:</label><input type="text" name="nome" id="nome" required /></p>
				<p><label for="senha">Senha:</label><input type="password" name="senha" id="senha" maxlength="8" required/></p>
				<p><input type="submit" value="Fazer Login"/></p>
                <p><a href="cadastro1.php"><h3>Criar Conta</h3></a></p>
                
			</fieldset>
		</form>
	</body>
</html>

<hr>
<?php include "footer.inc";?>

</body>
</html>