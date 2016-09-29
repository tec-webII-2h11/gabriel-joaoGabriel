
<!DOCTYPE html>
<html>
    <head>
        <title>Tecnologia WEB 2 - Tarefa 09</title>
        <meta charset="utf-8">
        <meta name="author" content="">
    </head>
    <body>
        <h2>Cadastre-se</h2>
        <form method="POST" action="recebeCadastro2.php">
            
            <p><label for="username">Username: </label><input type="text" id="username" name="username" size="50" /> </p>
            <p><label for="senha">Senha: </label><input type="password" id="senha" name="senha" size="50" maxlength="6" /> </p>
            <p><label for="confirmar_senha">Confirmar Senha: </label><input type="password" id="confirmar_senha" name="confirmar_senha" size="50" maxlength="6" /> </p>
            
            <input type="submit" name="Cadastrar" value="Cadastrar">
        </form>
    </body>
</html>