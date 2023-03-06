<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Manicure</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Free HTML Templates" name="keywords" />
    <meta content="Free HTML Templates" name="description" />

    <!-- Favicon -->
    <link href="../public/assets/img/favicon.ico" rel="icon" />

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

    <!-- Libraries Stylesheet -->
    <link href="../public/assets/lib/animate/animate.min.css" rel="stylesheet" />
    <link href="../public/assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link
      href="../public/assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"
      rel="stylesheet"
    />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../../../public/assets/css/style.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet" />
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
          <?php if($nomeUsuarioLogado == 'ADMIM') { ?>
          <a class="text-primary px-2" href="../app/pages/painel/painelAdm.php">
          <?php } else { ?> 
            <a class="text-primary px-2" href="../app/pages/perfil/perfil.php">
          <?php } ?>
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
    <nav>
      <ul>
        <li><a href="#" class="actives">Vendas</a></li>
        <li><a href="#">Relatórios</a></li>
        <li><a href="#">Estoque</a></li>
      </ul>
    </nav>
    <section>
      <h2>Vendas</h2>
      <div class="flex">
        <div class="box alingCenter">
            <h3>Total de Vendas</h3>
            <p class="">100</p>
        </div>
        <div class="box alingCenter">
            <h3>Produto Mais Vendido</h3>
            <p class="">Produto A</p>
        </div>
        <div class="box alingCenter">
            <h3>Cliente que Mais Comprou</h3>
            <p class="">Cliente B</p>
        </div>
      </div>
    </section>
    <section>
      <h2>Relatórios</h2>
      <ul class="flex">
          <li><a href="#">Relatorio de vendas</a></li>
          <li><a href="#">Movimento por cliente</a></li>
          <li><a href="#">Produtos sem estoque</a></li>
          <li><a href="#">Lista de horarios</a></li>
          <li><a href="#">Relatorio de entregas</a></li>
        </ul>
    </section>
    <section>
      <h2>Estoque</h2>
      <div class="box">
        <h3>Gerenciar Estoque</h3>
        <ul class="flex">
          <li><a href="#">Adicionar Produto</a></li>
          <li><a href="#">Editar Produto</a></li>
          <li><a href="#">Remover Produto</a></li>
        </ul>
      </div>
    </section>
  </body>
</html>
