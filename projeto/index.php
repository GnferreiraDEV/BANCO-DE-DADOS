<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

<a href="assets/pages/home.php">HOME</a>

<main>
    <form action="assets/scripts/login.php" method="post">

        <!-- email -->
        <div class="form-group">
            <label for="email">Email: </label>
            <input placeholder="Digite aqui seu email" type="email" required name="email" id="email">
        </div>

        <!-- senha -->
        <div class="form-group">
            <label for="senha">Senha: </label>
            <input placeholder="Digite aqui sua senha" type="password" required name="senha" id="senha">
        </div>

        <br>
        <button type="submit">LOGIN</button>

        <p>Esqueceu a senha <a href="#">Clique aqui!</a></p>
        <p>CADASTRE-SE <a href="assets/pages/cadastrar.php">Clique aqui!</a></p>

    </form>
</main>

</body>
</html>
