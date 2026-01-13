<html>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="../css/cadastro.css">

<body>
<div class="container">
  <div class="form-header">
    <h2>Cadastro de Pesquisa</h2>
    <p>Preencha os campos abaixo para registrar uma pesquisa.</p>
  </div>

  <h3>Entrou na Sessão</h3>
  
  <?php
  session_start();
  if ($_SESSION['log'] != "ativo") {
    echo "<script language='javascript' type='text/javascript'>
    alert('Precisa estar logado para acessar o conteúdo');
    window.location.href='../naoentrou.php';</script>";
  }
  echo "O usuário logado no momento é: " . $_SESSION['nome'];
  ?>
  
  <form name="cadastro" action="mostrar_cadastro.php" method="POST" class="input-box">
    <label for="fnome">Nome:</label>
    <input type="text" name="fnome" id="fnome" placeholder="Digite seu nome" required>

    <label for="ftipo">Email:</label>
    <input type="email" name="ftipo" id="ftipo" placeholder="Digite seu email" required>

    <label for="fdescricao">Senha:</label>
    <input type="password" name="fdescricao" id="fdescricao" placeholder="Digite sua senha" required>

    <input type="submit" name="cadastrar" value="Cadastrar">
  </form>

  <div class="nav-links">
    <form action="pesquisa.php" method="POST">
      <input type="submit" name="nova" value="Nova Pesquisa">
    </form>
    <form action="fechar_sessao.php" method="POST">
      <input type="submit" name="sair" value="Logout">
    </form>
  </div>
</div>
</body>
</html>