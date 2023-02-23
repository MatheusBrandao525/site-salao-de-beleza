<?php
require '../../../adm/config/conexao.php';

require '../../../adm/consultasSQL/consultaUsuarios.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Painel Administrativo</title>

  <!-- Adiciona o CSS do Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">

      <!-- Google Web Fonts -->
      <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />


  <!-- Adiciona o nosso arquivo CSS personalizado -->
  <link rel="stylesheet" href="../../../public/assets/css/style.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
      <!-- Topbar Start -->
      <div class="container-fluid bg-light d-none d-lg-block">
      <div class="row py-2 px-lg-5">
        <div class="col-lg-6 text-left mb-2 mb-lg-0">
          <div class="d-inline-flex align-items-center">
            <small><i class="fa fa-phone-alt mr-2"></i>+012 345 6789</small>
            <small class="px-3">|</small>
            <small><i class="fa fa-envelope mr-2"></i>info@example.com</small>
          </div>
        </div>
        <div class="col-lg-6 text-right">
          <div class="d-inline-flex align-items-center">
          <?php if(isset($nomeUsuarioLogado)){ ?>
          <a class="text-primary px-2" href="../app/pages/painel/painelAdm.php">
              <i class="fas fa-user-circle"></i>
              <span><?php echo $nomeUsuarioLogado;?></span>
          </a>
        <?php }else{ ?> 
          <a class="text-primary px-2" href="../app/pages/login/login.php">
              <i class="fas fa-user-circle"></i>
              <span>Fazer login</span>
          </a>
        <?php } ?>
            <a class="text-primary px-2" href="">
              <i class="fab fa-facebook-f"></i>
            </a>

            <a class="text-primary px-2" href="">
              <i class="fab fa-linkedin-in"></i>
            </a>
            <a class="text-primary px-2" href="">
              <i class="fab fa-instagram"></i>
            </a>
            <a class="text-primary pl-2" href="">
              <i class="fab fa-youtube"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <div class="container-fluid p-0">
      <nav
        class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5"
      >
        <a href="index.html" class="navbar-brand ml-lg-3">
          <h1 class="m-0 text-primary">Wilkyanne</h1>
        </a>
        <button
          type="button"
          class="navbar-toggler"
          data-toggle="collapse"
          data-target="#navbarCollapse"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse justify-content-between px-lg-3"
          id="navbarCollapse"
        >
          <div class="navbar-nav m-auto py-0">
            <a href="../public/index.php" class="nav-item nav-link active">Home</a>
            <a href="../app/pages/produtos/produtos.php" class="nav-item nav-link">Produtos</a>
            <a href="../app/pages/sobre/about.php" class="nav-item nav-link">Sobre</a>
            <a href="../app/pages/servicos/service.php" class="nav-item nav-link">Serviços</a>
            <a href="../app/pages/precos/price.php" class="nav-item nav-link">Preços</a>
            <div class="nav-item dropdown">
              <a
                href="#"
                class="nav-link dropdown-toggle"
                data-toggle="dropdown"
                >Pages</a
              >
              <div class="dropdown-menu rounded-0 m-0">
                <a href="../app/pages/horarios/appointment.php" class="dropdown-item"
                  >Agendamentos</a
                >
                <a href="../app/pages/horarios/opening.php" class="dropdown-item"
                  >Horario de funcionamento</a
                >
              </div>
            </div>
            <a href="../app/pages/contato/contact.php" class="nav-item nav-link">Contato</a>
          </div>
          <a href="../app/pages/carrinho/carrinho.php" class="btn btn-primary d-none d-lg-block"
            ><i class="fa fa-shopping-cart"></i></a
          >
        </div>
      </nav>
    </div>
    <!-- Navbar End -->

      <!-- Cabeçalho -->
  <header class="bg-primary text-light">
    <h1 class="h3 my-2">Painel Administrativo</h1>
  </header>

  <main class="container my-4">
  <div class="row justify-content-around">
    <!-- Gerenciamento de produtos -->
    <section class="col-sm-4 my-4">
      <h4 class="h4admpanel">Gerenciamento de Produtos</h4>
      <div class="list-group d-flex flex-column align-items-start">
        <button class="list-group-item list-group-item-action">Cadastrar Produto</button>
        <button class="list-group-item list-group-item-action">Alterar Produto</button>
        <button class="list-group-item list-group-item-action">Remover Produto</button>
      </div>
      <button class="btn btn-primary mt-3 mx-auto">Cadastrar Produto</button>
    </section>

    <!-- Gerenciamento de clientes -->
    <section class="col-sm-4 my-4">
      <h4 class="h4admpanel">Gerenciamento de Clientes</h4>
      <div class="list-group d-flex flex-column align-items-start">
        <button class="list-group-item list-group-item-action">Cadastrar Cliente</button>
        <button class="list-group-item list-group-item-action">Alterar Cliente</button>
        <button class="list-group-item list-group-item-action">Remover Cliente</button>
      </div>
      <button class="btn btn-primary mt-3 mx-auto">Cadastrar Cliente</button>
    </section>

    <!-- Gerenciamento de agendamentos -->
    <section class="col-sm-4 my-4">
      <h4 class="h4admpanel">Gerenciamento de Agendamentos</h4>
      <div class="list-group d-flex flex-column align-items-start">
        <button class="list-group-item list-group-item-action">Agendamentos Pendentes</button>
        <button class="list-group-item list-group-item-action">Agendamentos Concluídos</button>
        <button class="list-group-item list-group-item-action">Alterar Agendamento</button>
        <button class="list-group-item list-group-item-action">Remover Agendamento</button>
      </div>
      <button class="btn btn-primary mt-3 mx-auto">Agendamentos Pendentes</button>
    </section>
  </div>
</main>
