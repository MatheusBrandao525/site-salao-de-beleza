<?php

require '../../../adm/config/conexao.php';

require '../../../adm/consultasSQL/consultaProdutosCarrinho.php';


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Manicure</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Free HTML Templates" name="keywords" />
    <meta content="Free HTML Templates" name="description" />

    <!-- Favicon -->
    <link href="../../../public/assets/img/favicon.ico" rel="icon" />

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
    <link href="../../../public/assets/lib/animate/animate.min.css" rel="stylesheet" />
    <link href="../../../public/assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link
      href="../public/assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"
      rel="stylesheet"
    />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../../../public/assets/css/style.css" rel="stylesheet" />
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
            <a class="text-primary px-2" href="">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a class="text-primary px-2" href="">
              <i class="fab fa-twitter"></i>
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
            <a href="../../../public/index.php" class="nav-item nav-link active">Home</a>
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


    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="../../../public/index.php">Home</a>
                    <a class="breadcrumb-item text-dark" href="../produtos/shop.php">Shop</a>
                    <span class="breadcrumb-item active">Shopping Cart</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Cart Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
                <table class="table table-light table-borderless table-hover text-center mb-0">
                    <thead class="thead-dark">
                        <tr>
                            <th>Produtos</th>
                            <th>Preço</th>
                            <th>Quantidade</th>
                            <th>Total</th>
                            <th>Remover</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                      <?php foreach ($exibeDadosCarrinho as $carrinho) {  
                        $quantidade = $carrinho['quantidade']; $preco = $carrinho['preco']; $valorTotal = $quantidade * $preco; $valorTotalCarrinho += $valorTotal; $estoque = $carrinho['estoque']; $valorFinal = $valorTotalCarrinho + $valorFrete;
                        ?>
                        <tr>
                            <td class="align-middle"><img src="<?php echo $carrinho['imagem'];?>" alt="" style="width: 50px;"><?php echo $carrinho['nome'];?></td>
                            <td class="align-middle">R$ <?php echo number_format($carrinho['preco'],2,',','.');?></td>
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <div class="input-group-btn">
                                      <a href="../../../adm/manipulacoes/manipularCarrinho/diminuirDoCarrinho.php?idProduto=<?php echo $carrinho['produto_id'];?>&&quantidade=<?php echo $carrinho['quantidade'];?>&&idUsuario=<?php echo $idUser;?>">
                                        <button class="btn btn-sm btn-primary btn-minus" >
                                        <i class="fa fa-minus"></i>
                                        </button>
                                      </a>
                                    </div>
                                    <input type="text" class="form-control form-control-sm border-0 text-center" value="<?php echo $carrinho['quantidade'];?>">
                                    <div class="input-group-btn">
                                      <?php if($quantidade < $estoque) { ?>
                                      <a href="../../../adm/manipulacoes/manipularCarrinho/aumentarCarrinho.php?idProduto=<?php echo $carrinho['produto_id'];?>&&quantidade=<?php echo $carrinho['quantidade'];?>&&idUsuario=<?php echo $idUser;?>">
                                        <button class="btn btn-sm btn-primary btn-plus">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                      </a>
                                      <?php } ?>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle">R$ <?php echo $valorTotal;?></td>
                            <td class="align-middle"><button class="btn btn-sm btn-danger"><i class="fa fa-times"></i></button></td>
                          </tr>
                      <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">
                <form class="mb-30" action="">
                    <div class="input-group">
                        <input type="text" class="form-control border-0 p-4" placeholder="Código do Cupom">
                        <div class="input-group-append">
                            <button class="btn btn-primary">Aplicar Cupom</button>
                        </div>
                    </div>
                </form>
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Resumo do Carrinho</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="border-bottom pb-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h6>Subtotal</h6>
                            <h6>R$ <?php echo number_format($valorTotalCarrinho,2,',','.');?></h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Frete</h6>
                            <h6 class="font-weight-medium">R$ <?php echo number_format($valorFrete,2,',','.');?></h6>
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="d-flex justify-content-between mt-2">
                            <h5>Total</h5>
                    <?php if(isset($valorFinal)){ ?>
                            <h5>R$ <?php echo number_format($valorFinal,2,',','.');?></h5>
                    <?php } else { ?>
                            <h5>R$ 0,00</h5>
                    <?php } ?>
                        </div>
                        <a href="../checkout/checkout.php">
                          <button class="btn btn-block btn-primary font-weight-bold my-3 py-3">Finalizar</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart End -->


    <!-- Footer Start -->
    <div
      class="footer container-fluid position-relative bg-dark py-5"
      style="margin-top: 90px"
    >
      <div class="container pt-5">
        <div class="row">
          <div class="col-lg-6 pr-lg-5 mb-5">
            <a href="../public/index.html" class="navbar-brand">
              <h1 class="mb-3 text-white">
                <span class="text-primary">Wilkyanne</span>
              </h1>
            </a>
            <p>
              Aliquyam sed elitr elitr erat sed diam ipsum eirmod eos lorem
              nonumy. Tempor sea ipsum diam sed clita dolore eos dolores magna
              erat dolore sed stet justo et dolor.
            </p>
            <p>
              <i class="fa fa-map-marker-alt mr-2"></i>Location, City, Country
            </p>
            <p><i class="fa fa-phone-alt mr-2"></i>+012 345 67890</p>
            <p><i class="fa fa-envelope mr-2"></i>info@example.com</p>
            <div class="d-flex justify-content-start mt-4">
              <a class="btn btn-lg btn-primary btn-lg-square mr-2" href="#"
                ><i class="fab fa-twitter"></i
              ></a>
              <a class="btn btn-lg btn-primary btn-lg-square mr-2" href="#"
                ><i class="fab fa-facebook-f"></i
              ></a>
              <a class="btn btn-lg btn-primary btn-lg-square mr-2" href="#"
                ><i class="fab fa-linkedin-in"></i
              ></a>
              <a class="btn btn-lg btn-primary btn-lg-square" href="#"
                ><i class="fab fa-instagram"></i
              ></a>
            </div>
          </div>
          <div class="col-lg-6 pl-lg-5">
            <div class="row">
              <div class="col-sm-6 mb-5">
                <h5 class="text-white text-uppercase mb-4">Links</h5>
                <div class="d-flex flex-column justify-content-start">
                  <a class="text-white-50 mb-2" href="#"
                    ><i class="fa fa-angle-right mr-2"></i>Home</a
                  >
                  <a class="text-white-50 mb-2" href="#"
                    ><i class="fa fa-angle-right mr-2"></i>Sobre mim</a
                  >
                  <a class="text-white-50 mb-2" href="#"
                    ><i class="fa fa-angle-right mr-2"></i>Nossos Serviços</a
                  >
                  <a class="text-white-50 mb-2" href="#"
                    ><i class="fa fa-angle-right mr-2"></i>Preços</a
                  >
                  <a class="text-white-50" href="#"
                    ><i class="fa fa-angle-right mr-2"></i>Contato</a
                  >
                </div>
              </div>
              <div class="col-sm-6 mb-5">
                <h5 class="text-white text-uppercase mb-4">Nossos Serviços</h5>
                <div class="d-flex flex-column justify-content-start">
                  <a class="text-white-50 mb-2" href="#"
                    ><i class="fa fa-angle-right mr-2"></i>Manicure e Pedicure</a
                  >
                  <a class="text-white-50 mb-2" href="#"
                    ><i class="fa fa-angle-right mr-2"></i>Hidratação Capilar</a
                  >
                  <a class="text-white-50 mb-2" href="#"
                    ><i class="fa fa-angle-right mr-2"></i>Selagem</a
                  >
                  <a class="text-white-50 mb-2" href="#"
                    ><i class="fa fa-angle-right mr-2"></i>Limpeza Facial</a
                  >
                  <a class="text-white-50" href="#"
                    ><i class="fa fa-angle-right mr-2"></i>Desing de Sobrancelhas</a
                  >
                </div>
              </div>
              <div class="col-sm-12 mb-5">
                <h5 class="text-white text-uppercase mb-4">Receba promoções</h5>
                <div class="w-100">
                  <div class="input-group">
                    <input
                      type="text"
                      class="form-control border-light"
                      style="padding: 30px"
                      placeholder="Digite seu E-mail"
                    />
                    <div class="input-group-append">
                      <button class="btn btn-primary px-4">Sign Up</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div
      class="container-fluid bg-dark text-light border-top py-4"
      style="border-color: rgba(256, 256, 256, 0.15) !important"
    >
      <div class="container">
        <div class="row">
          <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
            <p class="m-0 text-white">
              &copy; <a href="#">Dominio do site</a>. All Rights Reserved.
            </p>
          </div>
          <div class="col-md-6 text-center text-md-right">
            <p class="m-0 text-white">
              Desenvolvido por
              <a href="https://freewebsitecode.com">Matheus F. Brandão</a>
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"
      ><i class="fa fa-angle-double-up"></i
    ></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="../../../public/assets/lib/easing/easing.min.js"></script>
    <script src="../../../public/assets/lib/waypoints/waypoints.min.js"></script>
    <script src="../../../public/assets/lib/counterup/counterup.min.js"></script>
    <script src="../../../public/assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../../../public/assets/lib/tempusdominus/js/moment.min.js"></script>
    <script src="../../../public/assets/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="../../../public/assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="../../../public/assets/mail/jqBootstrapValidation.min.js"></script>
    <script src="../../../public/assets/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="../../../public/assets/js/main.js"></script>
</body>

</html>