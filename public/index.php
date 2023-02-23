<?php 

require '../adm/config/conexao.php';

require '../adm/consultasSQL/consultaProdutos.php';

require '../adm/consultasSQL/consultaUsuarios.php';

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
    <link href="../public/assets/css/style.css" rel="stylesheet" />
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
          <a class="text-primary px-2" href="../app/pages/login/login.php">
              <i class="fas fa-user-circle"></i>
              <span><?php if(isset($nomeUsuarioLogado)){
                 echo $nomeUsuarioLogado;
                 
              }else{ echo 'Fazer login'; } ?></span>
            </a>
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

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 pb-5">
      <div
        id="header-carousel"
        class="carousel slide carousel-fade"
        data-ride="carousel"
      >
        <ol class="carousel-indicators">
          <li
            data-target="#header-carousel"
            data-slide-to="0"
            class="active"
          ></li>
          <li data-target="#header-carousel" data-slide-to="1"></li>
          <li data-target="#header-carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div
            class="carousel-item position-relative active"
            style="min-height: 100vh"
          >
            <img
              class="position-absolute w-100 h-100"
              src="../public/assets/img/Bonito_do_seu_jeito,_do_jeito_que_você_é_e_com_a_cor_que_você_quiser.svg"
              style="object-fit: cover"
            />
            <div
              class="carousel-caption d-flex flex-column align-items-center justify-content-center"
            >
              <div class="p-3" style="max-width: 900px">
                <h3 class="display-3 text-capitalize text-white mb-3">Unhas</h3>
                <p class="mx-md-5 px-5">
                  Lorem rebum magna dolore amet lorem eirmod magna erat diam
                  stet. Sadips duo stet amet amet ndiam elitr ipsum labore diam
                </p>
                <a
                  class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp"
                  href="../app/pages/horarios/appointment.php#agendarhorario"
                  >Agendar Horario</a
                >
              </div>
            </div>
          </div>
          <div
            class="carousel-item position-relative"
            style="min-height: 100vh"
          >
            <img
              class="position-absolute w-100 h-100"
              src="../public/assets/img/beautiful-girl-with-perfect-hair.jpg"
              style="object-fit: cover"
            />
            <div
              class="carousel-caption d-flex flex-column align-items-center justify-content-center"
            >
              <div class="p-3" style="max-width: 900px">

                <h3 class="display-3 text-capitalize text-white mb-3">
                  Cabelo
                </h3>
                <p class="mx-md-5 px-5">
                  Lorem rebum magna dolore amet lorem eirmod magna erat diam
                  stet. Sadips duo stet amet amet ndiam elitr ipsum labore diam
                </p>
                <a
                  class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp"
                  href="../app/pages/horarios/appointment.php#agendarhorario"
                  >Agendar Horario</a
                >
              </div>
            </div>
          </div>
          <div
            class="carousel-item position-relative"
            style="min-height: 100vh"
          >
            <img
              class="position-absolute w-100 h-100"
              src="../public/assets/img/woman-relaxing-beauty-salon.jpg"
              style="object-fit: cover"
            />
            <div
              class="carousel-caption d-flex flex-column align-items-center justify-content-center"
            >
              <div class="p-3" style="max-width: 900px">
                <!--                 <h6
                  class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown"
                  style="letter-spacing: 3px"
                >
                  Spa & Beauty Center
                </h6> -->
                <h3 class="display-3 text-capitalize text-white mb-3">
                  sobrancelhas
                </h3>
                <p class="mx-md-5 px-5">
                  Lorem rebum magna dolore amet lorem eirmod magna erat diam
                  stet. Sadips duo stet amet amet ndiam elitr ipsum labore diam
                </p>
                <a
                  class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp"
                  href="../app/pages/horarios/appointment.php#agendarhorario"
                  >Agendar Horario</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-fluid py-5">
      <div class="container py-5">
        <div class="row align-items-center">
          <div class="col-lg-6 pb-5 pb-lg-0">
            <img
              class="img-fluid w-100"
              src="../public/assets/img/manicurist-master-makes-manicure-woman-s-hands-spa-treatment-concept.jpg"
              alt=""
            />
          </div>
          <div class="col-lg-6">
            <h6
              class="d-inline-block text-primary text-uppercase bg-light py-1 px-2"
            >
              Sobre mim
            </h6>
            <h1 class="mb-4">Your Best Spa, Beauty & Skin Care Center</h1>
            <p class="pl-4 border-left border-primary">
              Dolores lorem lorem ipsum sit et ipsum. Sadip sea amet diam dolore
              sed et. Sit rebum labore sit sit ut vero no sit. Et elitr stet
              dolor sed sit et sed ipsum et kasd erat duo eos et erat
            </p>
            <div class="row pt-3">
              <div class="col-6">
                <div class="bg-light text-center p-4">
                  <h3 class="display-4 text-primary" data-toggle="counter-up">
                    15
                  </h3>
                  <h6 class="text-uppercase">Especialidades</h6>
                </div>
              </div>
              <div class="col-6">
                <div class="bg-light text-center p-4">
                  <h3 class="display-4 text-primary" data-toggle="counter-up">
                    45
                  </h3>
                  <h6 class="text-uppercase">Clientes Satisfeitos</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- About End -->

    <!-- Service Start -->
    <div class="container-fluid px-0 py-5 my-5">
      <div class="row mx-0 justify-content-center text-center">
        <div class="col-lg-6">
          <h6
            class="d-inline-block bg-light text-primary text-uppercase py-1 px-2"
          >
            Nossos serviços
          </h6>
          <h1>Agende já seu Horario</h1>
        </div>
      </div>
      <div class="owl-carousel service-carousel">
        <div class="service-item position-relative">
          <img class="img-fluid img-servicos" src="../public/assets/img/image744.png" alt="" />
          <div class="service-text text-center">
            <h4 class="text-white font-weight-medium px-3">Hidratação</h4>
            <p class="text-white px-3 mb-3">
              Elitr labore sit dolor erat est lorem diam sea ipsum diam dolor
              duo sit ipsum
            </p>
            <div class="w-100 bg-white text-center p-4">
              <a class="btn btn-primary" href="../app/pages/horarios/appointment.php#agendarhorario">Agendar Horario</a>
            </div>
          </div>
        </div>
        <div class="service-item position-relative">
          <img class="img-fluid img-servicos" src="../public/assets/img/image864.png" alt="" />
          <div class="service-text text-center">
            <h4 class="text-white font-weight-medium px-3">Selagem</h4>
            <p class="text-white px-3 mb-3">
              Elitr labore sit dolor erat est lorem diam sea ipsum diam dolor
              duo sit ipsum
            </p>
            <div class="w-100 bg-white text-center p-4">
              <a class="btn btn-primary" href="../app/pages/horarios/appointment.php#agendarhorario">Agendar Horario</a>
            </div>
          </div>
        </div>
        <div class="service-item position-relative">
          <img class="img-fluid img-servicos" src="../public/assets/img/image876.png" alt="" />
          <div class="service-text text-center">
            <h4 class="text-white font-weight-medium px-3">
              Desing de sobrancelhas
            </h4>
            <p class="text-white px-3 mb-3">
              Elitr labore sit dolor erat est lorem diam sea ipsum diam dolor
              duo sit ipsum
            </p>
            <div class="w-100 bg-white text-center p-4">
              <a class="btn btn-primary" href="../app/pages/horarios/appointment.php#agendarhorario">Agendar Horario</a>
            </div>
          </div>
        </div>
        <div class="service-item position-relative">
          <img class="img-fluid img-servicos" src="../public/assets/img/image888.png" alt="" />
          <div class="service-text text-center">
            <h4 class="text-white font-weight-medium px-3">Manicure</h4>
            <p class="text-white px-3 mb-3">
              Elitr labore sit dolor erat est lorem diam sea ipsum diam dolor
              duo sit ipsum
            </p>
            <div class="w-100 bg-white text-center p-4">
              <a class="btn btn-primary" href="../app/pages/horarios/appointment.php#agendarhorario">Agendar Horario</a>
            </div>
          </div>
        </div>
        <div class="service-item position-relative">
          <img class="img-fluid img-servicos" src="../public/assets/img/image900.png" alt="" />
          <div class="service-text text-center">
            <h4 class="text-white font-weight-medium px-3">
              Alongamento em fibra
            </h4>
            <p class="text-white px-3 mb-3">
              Elitr labore sit dolor erat est lorem diam sea ipsum diam dolor
              duo sit ipsum
            </p>
            <div class="w-100 bg-white text-center p-4">
              <a class="btn btn-primary" href="../app/pages/horarios/appointment.php#agendarhorario">Agendar Horario</a>
            </div>
          </div>
        </div>
        <div class="service-item position-relative">
          <img class="img-fluid img-servicos" src="../public/assets/img/image912.png" alt="" />
          <div class="service-text text-center">
            <h4 class="text-white font-weight-medium px-3">Escova</h4>
            <p class="text-white px-3 mb-3">
              Elitr labore sit dolor erat est lorem diam sea ipsum diam dolor
              duo sit ipsum
            </p>
            <div class="w-100 bg-white text-center p-4">
              <a class="btn btn-primary" href="../app/pages/horarios/appointment.php#agendarhorario">Agendar Horario</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row justify-content-center bg-appointment mx-0">
        <div class="col-lg-6 py-5">
          <div class="p-5 my-5" style="background: rgba(33, 30, 28, 0.7)">
            <h1 class="text-white text-center mb-4" id="marcarHorario">Agende seu Horario</h1>
            <form action="../adm/manipulacoes/manipularHorarios/inserirHorario.php" method="post" enctype="multipart/form-data">
              <div class="form-row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <input
                      name="nomecliente"
                      type="text"
                      class="form-control bg-transparent p-4"
                      placeholder="Seu Nome"
                      required="required"
                    />
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input
                      name="emailcliente"
                      type="email"
                      class="form-control bg-transparent p-4"
                      placeholder="Seu Email"
                      required="required"
                    />
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <div class="date" id="date" data-target-input="nearest">
                      <input
                        name="diaservico"
                        type="date"
                        class="form-control bg-transparent p-4 datetimepicker-input"
                        data-target="#date"
                        data-toggle="datetimepicker"
                      />
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <div class="time" id="time" data-target-input="nearest">
                      <input
                        name="horaservico"
                        type="text"
                        class="form-control bg-transparent p-4 datetimepicker-input"
                        placeholder="Selecione a Hora"
                        data-target="#time"
                        data-toggle="datetimepicker"
                      />
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <select
                      name="selecionarservico"
                      class="custom-select bg-transparent px-4"
                      style="height: 47px"
                    >
                      <option selected>Selecione o tipo de serviço</option>
                      <option value="1">Service 1</option>
                      <option value="2">Service 1</option>
                      <option value="3">Service 1</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-6">
                  <button
                    class="btn btn-primary btn-block"
                    type="submit"
                    style="height: 47px"
                  >
                    Agendar Horario
                  </button>
                </div>
              </div>
              <?php if (isset($_GET['mensagem'])) { ?>
               <div id='mensagem' class='col-sm-12 text-center'><?php echo $_GET['mensagem'];?></div>
              <?php }else { ?>
                <div id='mensagem' class='col-sm-12 text-center'></div>
              <?php } ?>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Service End -->

    <!-- Open Hours Start -->
    <div class="container-fluid py-5">
      <div class="container py-5">
        <div class="row">
          <div class="col-lg-6" style="min-height: 500px">
            <div class="position-relative h-100">
              <img
                class="position-absolute w-100 h-100"
                src="../public/assets/img/woman-with-nail-art-promoting-design-luxury-earrings-ring.jpg"
                style="object-fit: cover"
              />
            </div>
          </div>
          <div class="col-lg-6 pt-5 pb-lg-5">
            <div class="hours-text bg-light p-4 p-lg-5 my-lg-5">
              <h6
                class="d-inline-block text-white text-uppercase bg-primary py-1 px-2"
              >
                Nosso Horario de Funcionamento
              </h6>
              <h1 class="mb-4">Local de Atendimento</h1>
              <p>
                Dolores lorem lorem ipsum sit et ipsum. Sadip sea amet diam
                dolore sed et. Sit rebum labore sit sit ut vero no sit. Et elitr
                stet dolor sed sit et sed ipsum et kasd ut. Erat duo eos et erat
                sed diam duo
              </p>
              <ul class="list-inline">
                <li class="h6 py-1">
                  <i class="far fa-circle text-primary mr-3"></i>Seg – Sex :
                  9:00 AM - 7:00 PM
                </li>
                <li class="h6 py-1">
                  <i class="far fa-circle text-primary mr-3"></i>Sabádo : 9:00
                  AM - 6:00 PM
                </li>
                <li class="h6 py-1">
                  <i class="far fa-circle text-primary mr-3"></i>Domingo : Closed
                </li>
              </ul>
              <a href="" class="btn btn-primary mt-2">Agende Agora</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Open Hours End -->

    <!-- Pricing Start -->
    <div class="container-fluid bg-pricing" style="margin: 90px 0">
      <div class="container">
        <div class="row">
          <div class="col-lg-5" style="min-height: 500px">
            <div class="position-relative h-100">
              <img
                class="position-absolute w-100 h-100"
                src="../public/assets/img/image322.png"
                style="object-fit: cover"
              />
            </div>
          </div>
          <div class="col-lg-7 pt-5 pb-lg-5">
            <div class="pricing-text bg-light p-4 p-lg-5 my-lg-5">
              <div class="owl-carousel pricing-carousel">
                <div class="bg-white">
                  <div
                    class="d-flex align-items-center justify-content-between border-bottom border-primary p-4"
                  >
                    <h1 class="display-4 mb-0">
                      <small
                        class="align-top text-muted font-weight-medium"
                        style="font-size: 22px; line-height: 45px"
                        >R$</small
                      >149<small
                        class="align-bottom text-muted font-weight-medium"
                        style="font-size: 16px; line-height: 40px"
                        >,00</small
                      >
                    </h1>
                    <h5 class="text-primary text-uppercase m-0">Pé e mão</h5>
                  </div>
                  <div class="p-4">
                    <p>
                      <i class="fa fa-check text-success mr-2"></i>Full Body
                      Massage
                    </p>
                    <p>
                      <i class="fa fa-check text-success mr-2"></i>Deep Tissue
                      Massage
                    </p>
                    <p>
                      <i class="fa fa-check text-success mr-2"></i>Hot Stone
                      Massage
                    </p>
                    <p>
                      <i class="fa fa-check text-success mr-2"></i>Tissue Body
                      Polish
                    </p>
                    <p>
                      <i class="fa fa-check text-success mr-2"></i>Foot & Nail
                      Care
                    </p>
                    <a href="" class="btn btn-primary my-2">Agende Agora</a>
                  </div>
                </div>
                <div class="bg-white">
                  <div
                    class="d-flex align-items-center justify-content-between border-bottom border-primary p-4"
                  >
                    <h1 class="display-4 mb-0">
                      <small
                        class="align-top text-muted font-weight-medium"
                        style="font-size: 22px; line-height: 45px"
                        >R$</small
                      >99<small
                        class="align-bottom text-muted font-weight-medium"
                        style="font-size: 16px; line-height: 40px"
                        >,00</small
                      >
                    </h1>
                    <h5 class="text-primary text-uppercase m-0">Manicure</h5>
                  </div>
                  <div class="p-4">
                    <p>
                      <i class="fa fa-check text-success mr-2"></i>Full Body
                      Massage
                    </p>
                    <p>
                      <i class="fa fa-check text-success mr-2"></i>Deep Tissue
                      Massage
                    </p>
                    <p>
                      <i class="fa fa-check text-success mr-2"></i>Hot Stone
                      Massage
                    </p>
                    <p>
                      <i class="fa fa-check text-success mr-2"></i>Tissue Body
                      Polish
                    </p>
                    <p>
                      <i class="fa fa-check text-success mr-2"></i>Foot & Nail
                      Care
                    </p>
                    <a href="" class="btn btn-primary my-2">Agende Agora</a>
                  </div>
                </div>
                <div class="bg-white">
                  <div
                    class="d-flex align-items-center justify-content-between border-bottom border-primary p-4"
                  >
                    <h1 class="display-4 mb-0">
                      <small
                        class="align-top text-muted font-weight-medium"
                        style="font-size: 22px; line-height: 45px"
                        >R$</small
                      >359<small
                        class="align-bottom text-muted font-weight-medium"
                        style="font-size: 16px; line-height: 40px"
                        >,00</small
                      >
                    </h1>
                    <h5 class="text-primary text-uppercase m-0">Cabelo e Unhas</h5>
                  </div>
                  <div class="p-4">
                    <p>
                      <i class="fa fa-check text-success mr-2"></i>Full Body
                      Massage
                    </p>
                    <p>
                      <i class="fa fa-check text-success mr-2"></i>Deep Tissue
                      Massage
                    </p>
                    <p>
                      <i class="fa fa-check text-success mr-2"></i>Hot Stone
                      Massage
                    </p>
                    <p>
                      <i class="fa fa-check text-success mr-2"></i>Tissue Body
                      Polish
                    </p>
                    <p>
                      <i class="fa fa-check text-success mr-2"></i>Foot & Nail
                      Care
                    </p>
                    <a href="" class="btn btn-primary my-2">Agende Agora</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Pricing End -->

    <!-- Produtos start -->
    <div class="container-fluid py-5">
      <div class="container pt-5">
        <div class="row justify-content-center text-center">
          <div class="col-lg-6">
            <h6
              class="d-inline-block bg-light text-primary text-uppercase py-1 px-2"
            >
              Nossos produtos
            </h6>
            <h1 class="mb-5"></h1>
          </div>
        </div>
        <div class="row">
        <?php  foreach ($exibeProdutos as $produto) { ?>
          <div class="col-lg-3 col-md-6">
            <form action="../adm/manipulacoes/manipularCarrinho/manipularCarrinho.php" method="post" enctype="multipart/form-data">
              <input type="number" name="numeroid" value="<?php echo $produto['produto_id'];?>" hidden>
              <input type="number" name="quantidade" value="1" hidden>
              <input type="number" name="usuario_id" value="1" hidden>
              <div class="team position-relative overflow-hidden mb-5">
                <img class="img-fluid img-produto" src="<?php echo $produto['imagem'];?>" alt="" />
                <div class="position-relative text-center">
                  <div class="team-text bg-primary text-white">
                    <h5 class="text-white text-uppercase"><?php echo $produto['nome'];?></h5>
                    <p class="m-0">R$ <?php echo number_format($produto['preco'],2,',','.');?></p>
                  </div>
                  <div class="team-social bg-dark text-center">
                    <button type="submit" class="btn btn-outline-primary btn-square mr-2" href="#"
                      ><i class="fa fa-shopping-cart"></i
                    ></button>
                    <a class="btn btn-outline-primary btn-square mr-2" href="#"
                      ><i class="far fa-heart"></i
                    ></a>
                    <a class="btn btn-outline-primary btn-square mr-2" href="#"
                      ><i class="fa fa-info"></i
                    ></a>
                    <a class="btn btn-outline-primary btn-square" href="#"
                      ><i class="fa fa-search"></i
                    ></a>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
    <!-- Produtos End -->

    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
      <div class="container py-5">
        <div class="row align-items-center">
          <div class="col-lg-6 pb-5 pb-lg-0">
            <img class="img-fluid w-100" src="../public/assets/img/image310.png" alt="" />
          </div>
          <div class="col-lg-6">
            <h6
              class="d-inline-block text-primary text-uppercase bg-light py-1 px-2"
            >
              Depoimentos
            </h6>
            <h1 class="mb-4">O que nossos clientes dizem sobre nossos serviços</h1>
            <div class="owl-carousel testimonial-carousel">
              <div class="position-relative">
                <i
                  class="fa fa-3x fa-quote-right text-primary position-absolute"
                  style="top: -6px; right: 0"
                ></i>
                <div class="d-flex align-items-center mb-3">
                  <img
                    class="img-fluid rounded-circle"
                    src="../public/assets/img/testimonial-1.jpg"
                    style="width: 60px; height: 60px"
                    alt=""
                  />
                  <div class="ml-3">
                    <h6 class="text-uppercase">Client Name</h6>
                    <span>Profession</span>
                  </div>
                </div>
                <p class="m-0">
                  Aliquyam sed elitr elitr erat sed diam ipsum eirmod eos lorem
                  nonumy. Tempor sea ipsum diam sed clita dolore eos dolores
                  magna erat dolore sed stet justo et dolor.
                </p>
              </div>
              <div class="position-relative">
                <i
                  class="fa fa-3x fa-quote-right text-primary position-absolute"
                  style="top: -6px; right: 0"
                ></i>
                <div class="d-flex align-items-center mb-3">
                  <img
                    class="img-fluid rounded-circle"
                    src="../public/assets/img/testimonial-2.jpg"
                    style="width: 60px; height: 60px"
                    alt=""
                  />
                  <div class="ml-3">
                    <h6 class="text-uppercase">Client Name</h6>
                    <span>Profession</span>
                  </div>
                </div>
                <p class="m-0">
                  Aliquyam sed elitr elitr erat sed diam ipsum eirmod eos lorem
                  nonumy. Tempor sea ipsum diam sed clita dolore eos dolores
                  magna erat dolore sed stet justo et dolor.
                </p>
              </div>
              <div class="position-relative">
                <i
                  class="fa fa-3x fa-quote-right text-primary position-absolute"
                  style="top: -6px; right: 0"
                ></i>
                <div class="d-flex align-items-center mb-3">
                  <img
                    class="img-fluid rounded-circle"
                    src="../public/assets/img/testimonial-3.jpg"
                    style="width: 60px; height: 60px"
                    alt=""
                  />
                  <div class="ml-3">
                    <h6 class="text-uppercase">Client Name</h6>
                    <span>Profession</span>
                  </div>
                </div>
                <p class="m-0">
                  Aliquyam sed elitr elitr erat sed diam ipsum eirmod eos lorem
                  nonumy. Tempor sea ipsum diam sed clita dolore eos dolores
                  magna erat dolore sed stet justo et dolor.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Testimonial End -->

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
    <script src="../public/assets/lib/easing/easing.min.js"></script>
    <script src="../public/assets/lib/waypoints/waypoints.min.js"></script>
    <script src="../public/assets/lib/counterup/counterup.min.js"></script>
    <script src="../public/assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../public/assets/lib/tempusdominus/js/moment.min.js"></script>
    <script src="../public/assets/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="../public/assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="../public/assets/mail/jqBootstrapValidation.min.js"></script>
    <script src="../public/assets/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="../public/assets/js/main.js"></script>
  </body>
</html>
