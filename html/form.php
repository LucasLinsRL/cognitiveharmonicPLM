<?php
/*
 session_start();
 echo "jsjdsjdsjj";
    if (isset($_POST['submit'])){
        echo "entrou";
       // print_r($_POST['fullname']);
        //print_r($_POST['birthdate']);
        //print_r($_POST['email']);
        //print_r($_POST['number']);
        //print_r($_POST['password']);
        //print_r($_POST['confirmPassword']);
        //print_r($_POST['gender']);

        include_once('config.php');

        $nome = $_POST['nome'];
        $data_nasc = $_POST['data_nasc'];
        $email = $_POST['email'];
        $celular = $_POST['celular'];
        $senha = $_POST['senha'];
        $rep_senha = $_POST['rep_senha'];
       // $sexo = $_POST['sexo'];

      //  $result = @mysqli_query($conexao, "INSERT INTO usuarios(nome, data_nasc, email, celular, senha, rep_senha, sexo) VALUES  ('$nome', '$data_nasc', '$email', '$celular', '$senha', '$rep_senha', '$sexo')"); 
         $result = @mysqli_query($conexao, "INSERT INTO usuarios(nome, data_nasc, email, celular, senha, rep_senha) VALUES
         ('$nome', '$data_nasc', '$email', '$celular', '$senha', '$rep_senha')"); 
    }

*/
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/form.css">
    <title>Formulário</title>
</head>


    <a href="index.php">Voltar</a>

    <div class="container">
        <div class="form-image">
            <img src="../img/home.png" alt="">
        </div>
        <div class="form">
            <form action="form1.php" method="POST">
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastre-se</h1>
                    </div>
                    <div class="login-button">
                        <button><a href="../html/form.html">Entrar</a></button>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="fullname">Nome e Sobrenome</label>
                        <input id="nome" type="text" name="nome" placeholder="Digite seu nome completo" required>
                    </div>

                    <div class="input-box">
                        <label for="birthdate">Data de nascimento</label>
                        <input id="data_nasc" type="date" name="data_nasc" placeholder="Digite sua data de nascimento" required>
                    </div>
                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" placeholder="Digite seu e-mail" required>
                    </div>

                    <div class="input-box">
                        <label for="number">Celular</label>
                        <input id="celular" type="tel" name="celular" placeholder="(xx) xxxx-xxxx" required>
                    </div>

                    <div class="input-box">
                        <label for="password">Senha</label>
                        <input id="senha" type="password" name="senha" placeholder="Digite sua senha" required>
                    </div>


                    <div class="input-box">
                        <label for="confirmPassword">Confirme sua Senha</label>
                        <input id="rep_senha" type="password" name="rep_senha" placeholder="Digite sua senha novamente" required>
                    </div>

                </div>

                <div class="gender-inputs">
                    <div class="gender-title">
                        <h6>Gênero</h6>
                    </div>

                    <div class="gender-group">
                        <div class="gender-input">
                            <input id="sexo" type="radio" name="sexo" id="female">
                            <label for="female">Feminino</label>
                        </div>

                        <div class="gender-input">
                            <input id="sexo" type="radio"name="sexo" id="male">
                            <label for="male">Masculino</label>
                        </div>

                        <div class="gender-input">
                            <input id="sexo" type="radio" name="sexo" id="others">
                            <label for="others">Outros</label>
                        </div>

                        <div class="gender-input">
                            <input id="sexo" type="radio" name="sexo" id="prefiro não dizer">
                            <label for="none">Prefiro não dizer</label>
                        </div>
                    </div>
                </div>

                <div class="continue-button">
                     <button type="submit" id="" name="submit" placeholder="Enviar"> Enviar </button>
                </div>
        </div>
    </div>
</form>
</body>

</html>