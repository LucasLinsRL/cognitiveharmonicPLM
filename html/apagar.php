<?php
	require_once('conexao/conexao.php');
	$id = $_GET['id'];
	$mysql = new BancodeDados();
	$mysql->conecta();

	$sqlstring = "select * from tbproduto where id=$id ";
	$query = @mysqli_query($mysql->con, $sqlstring);
	$dados = @mysqli_fetch_array($query);


		echo "ID ". $dados['id']."</br>";
		echo "Nome<b>". $dados['nome']."</b></br>";
		echo "Tipo<b>". $dados['tipo']."</b></br>";
		echo  "Descri��o<b>". $dados['descricao']."</b></br>";

	$sqlstring = "delete from tbproduto  where id=$id";
	 $query = @mysqli_query($mysql->con, $sqlstring);
	if($query){
        echo"<script language='javascript' type='text/javascript'>alert('Deletou  com sucesso!');window.location.href='cadastro.php'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>alert('N�o foi poss�vel deletar');window.location.href='cadastro.php'</script>";
        }

?>
