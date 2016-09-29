<?php
	/*strip_tags() htmlentities() htmlspecialchars()*/
	
    $username = $_POST["username"];
    $senha = $_POST["senha"];
    $confirmar_senha = $_POST["confirmar_senha"];

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

    else{ 
        $mensagem= "<p>Seu usuário é: ".$username." e sua senha é: ".$senha."</p>";
    }

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Resposta</title>
        <meta charset="utf-8">
        <meta name="author" content="">
    </head>
    <body>
        <h2>Dados</h2>
		<?php
			echo $mensagem;
		?>
    </body>
</html>