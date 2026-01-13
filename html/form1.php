<?php
 session_start();
 echo "jsjdsjdsjj";
  
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
        $sexo= $_POST['sexo'];
      //  $result = @mysqli_query($conexao, "INSERT INTO usuarios(nome, data_nasc, email, celular, senha, rep_senha, sexo) VALUES  ('$nome', '$data_nasc', '$email', '$celular', '$senha', '$rep_senha', '$sexo')"); 
      $sqlstring="INSERT INTO usuarios(nome, data_nasc, email, celular, senha, rep_senha,sexo) VALUES('$nome', '$data_nasc', '$email', '$celular', '$senha', '$rep_senha','$sexo')"; 
      echo $sqlstring;
      $result = @mysqli_query($conexao, $sqlstring); 
         echo $result;
  
    echo " sdksdsdds passei";
    header('Location: login.php');
?>