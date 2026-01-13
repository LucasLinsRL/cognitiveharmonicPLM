<HTML>
<HEAD>
 <TITLE>Verificação da senha</TITLE>
</HEAD>
<BODY>
<?php
 require_once('conexao/conexao.php');
	//criando o objeto mysql e conectando ao banco de dados
	$mysql = new BancodeDados();
	$mysql -> conecta();
	
   $plogin=$_POST['login'];
   $psenha=$_POST['senha'];
   // ajustando a instru��o select verificar usuario e senha
    $sqlstring = "select * from tbusuario where login='$plogin' and senha='$psenha'"  ;
    echo $sqlstring;
	$result = @mysqli_query($mysql->con, $sqlstring);
	$total = $result -> num_rows;
  if($total==1){
        $dados=mysqli_fetch_array($result) ;
      	session_start();
      	$_SESSION['id']= $dados['id'];
 		$_SESSION['nome'] =$dados['nome'] ;
		$_SESSION['log'] = 'ativo';
		 $_SESSION['nivel'] = $dados['nivel'];

		  echo"<script language='javascript' type='text/javascript'>
          alert('voc� esta logado');window.location.href='cadastro.php';
          </script>";

     }
      else {
      	  echo"<script language='javascript' type='text/javascript'>
            alert('senha ou login invalido');window.location.href
            ='naoentrou.php';</script>";
      }
      $mysql->fechar();
 ?>
</BODY>
</HTML>