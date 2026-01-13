<?php
session_start();
	if ($_SESSION['log'] == "ativo"){
        session_destroy();
		session_unset();
		session_start();
		$_SESSION['log']="desativo";

echo"<script language='javascript' type='text/javascript'>
alert('Muito Obrigado pela visita');window.location.href='index.php';</script>";
}
else {
echo"<script language='javascript' type='text/javascript'>
alert('Você não estava logado, faça o login primeiro');
window.location.href='index.php';</script>";
}

?>