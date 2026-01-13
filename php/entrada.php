<?php 

include('conexao.php');

$email=$_POST['femail'];
$senha=$_POST['fsenha'];

$sql="select * from login where email='$email' and senha='$senha';";
$query=mysqli_query($con, $sql);
$linha=$query->num_rows;

if ($linha==1){

    $arraylog=mysqli_fetch_array($query);

    $idadm=$arraylog['IDadm'];

    $scont="select * from adm where IDadm='$idadm';";
    $query=mysqli_query($con, $scont);
    $arraycont=mysqli_fetch_array($query);

    session_start();

    $_SESSION['log']="Ativo";
    $_SESSION['nome']=$arraycont['nome'];
    $_SESSION['email']=$arraylog['email'];

    echo "<script language='javascript'>window.location.href='Homeadm.php'</script>";

}else{
    echo "<script language='javascript'>alert('Email e/ou senha incorretos');window.location.href='../html/Login.html'</script>";
}

?>