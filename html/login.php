<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Login</title>
</head>
<body>
    <form action="entrada.php" method="POST">
    <a href="../html/index.php">Voltar</a>
    <div class="login-box">
        <div class="login-header">
            <header>Login</header>
        </div>
        <div class="input-box">
            <input type="text" name="login" id="login" class="input-field" placeholder="Login" autocomplete="off" required>
        </div>
        <div class="input-box">
            <input type="password" name="senha" id="senha" class="input-field" placeholder="Senha" autocomplete="off" required>
        </div>
        <div class="forgot">
            <section>
                <input type="checkbox" id="check">
                <label for="check">Lembre-me</label>
            </section>
            <section>
                <a href="../html/recuperacao.html">Esqueceu a senha?</a>
            </section>
        </div>
        <div class="input-submit">
            <input type="submit" name="submit" class="submit-btn" id="submit" value="enviar">
            <label for="submit">Entrar</label>
        </div>
        <div class="sign-up-link">
            <p>Não tem uma conta? <a href="../html/form.php">Cadastre-se</a></p>
        </div>
    </div>
</form>
</body>
</html>