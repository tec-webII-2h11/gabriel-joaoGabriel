<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$email2 = $_POST['email2'];
$sexo = $_POST['sexo'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$data = $_POST['data'];
$username = $_POST["username"];
$senha = $_POST["senha"];
$confirmar_senha = $_POST["confirmar_senha"];


$erro = false;

if (empty($nome) OR strstr($nome, ' ')==FALSE) {
	$mensagem = "Favor digitar seu nome corretamente.";
	$erro=true;
}


elseif (strlen($email) < 8 || strstr($email, '@')==FALSE && $erro==false) {
	$mensagem = "Favor digitar o seu e-mail corretamente.";
	$erro=true;
}

elseif ($email != $email2) {
	$mensagem = "Os emails devem ser iguais.";
	$erro=true;
}

elseif($sexo == "" && $erro==false){
	$mensagem = "Selecione um Sexo!";
	$erro=true;
}

elseif (empty($data) && $erro==false) {
	$mensagem = "Favor digitar sua data de nascimento corretamente.";
	$erro=true;
}

elseif ($estado=="" && $erro==false) {
	$mensagem = "Favor escolher um estado.";
	$erro=true;
}

elseif (empty($cidade) && $erro==false) {
	$mensagem = "Favor digitar sua cidade corretamente.";
	$erro=true;
}

else  {
$mensagem = "<p>Seu nome é: ".$nome. "</p>
			<p>Seu email é : " .$email."</p>
			<p>Sexo: ".$sexo."</p>
			<p> Data de Nascimento: ".$data. "</p>
			<p>Estado: ".$estado."</p>
			<p>Cidade: ".$cidade. "</p>
            <p>Seu usuário é: ".$username." e sua senha é: ".$senha."</p>";
}
$erro = false;
	
    if (strlen($username)<4){
	   $mensagem = "<p>Seu Username deverá ter pelo menos 4 caracteres.</p>";
	   $erro=true;
    }
    elseif (strlen($senha)<4 && $erro==false){
	   $mensagem = "<p>Sua Senha deverá ter pelo menos 4 caracteres.</p>";
	   $erro=true;
    }
	elseif ($username==$senha && $erro==false) {
	   $mensagem = "<p>Seu username não deve ser igual a sua senha.</p>";
	   $erro=true;
	}
		
    elseif ($confirmar_senha != $senha && $erro==false){
	   $mensagem = "<p>Senhas não conferem.</p>";
	   $erro=true;
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
<br><br>
<hr>
        <h2>Dados</h2>
		<?php
			echo $mensagem;
		?>
<hr>
<?php include "footer.inc";?>

</body>
</html>