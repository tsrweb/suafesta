<?php

require "conecta.php";

$conSql = $link->query("SELECT * FROM tb_usuario WHERE nm_usuario = '$logado'");

while($reg = $conSql->fetch_array()){

  $id = $reg['id_usuario'];

  };

?>

    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     <a class="navbar-brand" href="homeCliente.php">
        <img alt="Brand" src="img/logo.png">
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Pesquisar Fornecedores" size="30">
        </div>
        <button type="button" class="btn btn-default glyphicon glyphicon-search" onclick="alert('Serviço Indisponível no Momento.');"></button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <p class="navbar-text"><?=$logado?></p>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Opções <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="editarCadastro.php">Alterar Cadastro</a></li>
            <li><a href="editarFornecedor.php">Alterar Pág. Pessoal</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="logout.php">Sair</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>