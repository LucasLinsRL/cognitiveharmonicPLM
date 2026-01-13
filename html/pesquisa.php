<html>
<head>
	<title>Tabela de Usuarios</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="refresh" content="10">
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/pesquisa.css">
</head>

<?php
session_start();
if ($_SESSION['log'] != "ativo"){
    echo"<script language='javascript' type='text/javascript'>alert('Precisa estar logado para acessar o conteúdo');window.location.href='index.php';</script>";
}
?>

<body>
<h1> Lista dos usuários | Verificação do usuário  </h1>
<form action="cadastro.php" method="POST" name="cadastroprin">
<h1>Cadastrar novo usuário</h1>
<input type="submit" name="Cadastrar" value="Cadastrar">
</form>

<form action="" method="POST" name="">
<h1>Buscar por usuário </h1>
<input type="text" name="textobusca"><br>
<input type="submit" name="buscar" value="Buscar">
</form>

<?php
require_once('conexao/conexao.php');
$mysql = new BancodeDados();
$mysql->conecta();

if(isset($_POST['buscar']) && !empty($_POST['textobusca'])){
    $pbusca=$_POST['textobusca'];
    $sqlstring = "select * from tbproduto where tipo='$pbusca'";
} else {
    $sqlstring = 'select * from tbproduto order by nome';
}

$query = @mysqli_query($mysql->con, $sqlstring);

echo "<table>";
echo "<tr><th width='30px' align='center'>Id</th><th width='100px'>Nome</th><th width='100px'>Tipo</th><th width='100px'>Descrição</th><th width='100px'>Deletar</th><th width='100px'>Alterar</th></tr>";

while($dados=mysqli_fetch_array($query)){
    echo "<tr>";
    echo "<td align='center'>". $dados['id']."</td>";
    echo "<td align='center'><b>". $dados['nome']."</b></td>";
    echo "<td align='center'><b>". $dados['tipo']."</b></td>";
    echo "<td align='center'><b>". $dados['descricao']."</b></td>";
    $id = base64_encode($dados['id']);
    echo "<td align='center'><a href='apagar.php?id=".$dados['id']."'><img src='../img/delete.png' width='30px' height='30px'></a></td>";
    echo "<td align='center'><a href='alteratipo.php?id=$id'><img src='../img/alterar.jpg' width='30px' height='30px'></a></td>";
    echo "</tr>";
}
echo "</table>";

$mysql->fechar();
?>

<br><br><button><a href='cadastro.php'>Voltar para tela de cadastro</a></button>

</body>
</html>
