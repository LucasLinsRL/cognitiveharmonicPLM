<body>
<h3><center><font color="red" size=5> Altera��o do tipo</h3> </center>  </font>

<form name="tipo" action="" method="POST">
         <p><b> tipo: </b>
         <select name="ftipo">
         <option value="alimento"> Alimento </option>
         <option value="limpeza"> Limpeza</option>
         <option value="bebida"> Bebida</option>
          <option value="diversos"> Diversos </option>

         </select>
	<br><p>		<input type="submit" name="btipo" value="alterar">
</form>



</body>
</html>


<?php
if(isset($_POST["btipo"])) {
	if(isset($_GET['id']) && is_numeric(base64_decode($_GET['id']))){
			$id = base64_decode($_GET['id']);
	} else {
		header('Location: cadastro.php');
	}
        require_once('conexao/conexao.php');

    	$mysql = new BancodeDados();
	   $mysql->conecta();
	   $ptipo=$_POST['ftipo'];


			$sqlstring = "update tbproduto  set tipo='$ptipo' where id=$id ";

               		$query = @mysqli_query($mysql->con, $sqlstring);
          		if($query){

				echo"<script language='javascript' type='text/javascript'>alert('Alterou com sucesso !');window.location.href='cadastro.php'</script>";
      			  }else{
         			 echo"<script language='javascript' type='text/javascript'>alert('N�o foi poss�vel alterar o tipo');window.location.href='cadastro.php'</script>";

		}



$mysql->fechar();
}
?>