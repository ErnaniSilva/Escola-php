<html>
    <head>
        <meta charset="utf-8">
        <title>Cadastrar</title>
    </head>
    <body>    
        <form action="functions/function_cadastrar.php" method="post">
            <fieldset>
                <legend>Cadastrar Usuario</legend>
                <label>User: </label>
                <input type="text" name="user" id="user">
                <label>Senha: </label>
                <input type="password" name="senha" id="senha">
                <br/><br/>
                <input type="reset" value="Limpar">
                <input type="submit">
            </fieldset>
        </form>
    </body>
</html>