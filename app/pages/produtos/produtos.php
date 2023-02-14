<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MultiShop - Online Shop Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

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
      href="../../../public/assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"
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
          <h1 class="m-0 text-primary">
            Wilkyanne
          </h1>
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
            <a href="../../../public/index.php" class="nav-item nav-link">Home</a>
            <a href="../produtos/produtos.php" class="nav-item nav-link active">Produtos</a>
            <a href="../sobre/about.php" class="nav-item nav-link">Sobre</a>
            <a href="../servicos/service.php" class="nav-item nav-link">Serviços</a>
            <a href="../precos/price.php" class="nav-item nav-link">Preços</a>
            <div class="nav-item dropdown">
              <a
                href="#"
                class="nav-link dropdown-toggle"
                data-toggle="dropdown"
                >Pages</a
              >
              <div class="dropdown-menu rounded-0 m-0">
                <a href="../horarios/appointment.php" class="dropdown-item"
                  >Agendamentos</a
                >
                <a href="../horarios/opening.php" class="dropdown-item"
                  >Horario de funcionamento</a
                >
              </div>
            </div>
            <a href="../contato/contact.php" class="nav-item nav-link">Contato</a>
          </div>
          <a href="../carrinho/carrinho.php" class="btn btn-primary d-none d-lg-block"
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
                    <a class="breadcrumb-item text-dark" href="#">Home</a>
                    <a class="breadcrumb-item text-dark" href="#">Produtos</a>
                    <span class="breadcrumb-item active">lista de produtos</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Shop Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <!-- Shop Sidebar Start -->
            <div class="col-lg-3 col-md-4">
                <!-- Price Start -->
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Filtar por preços</span></h5>
                <div class="bg-light p-4 mb-30">
                    <form>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" checked id="price-all">
                            <label class="custom-control-label" for="price-all">Todos os preços</label>
                            <span class="badge border font-weight-normal">1000</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="price-1">
                            <label class="custom-control-label" for="price-1">R$0 - R$100</label>
                            <span class="badge border font-weight-normal">150</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="price-2">
                            <label class="custom-control-label" for="price-2">R$100 - R$200</label>
                            <span class="badge border font-weight-normal">295</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="price-3">
                            <label class="custom-control-label" for="price-3">R$200 - R$300</label>
                            <span class="badge border font-weight-normal">246</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="price-4">
                            <label class="custom-control-label" for="price-4">R$300 - R$400</label>
                            <span class="badge border font-weight-normal">145</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between">
                            <input type="checkbox" class="custom-control-input" id="price-5">
                            <label class="custom-control-label" for="price-5">R$400 - R$500</label>
                            <span class="badge border font-weight-normal">168</span>
                        </div>
                    </form>
                </div>
                <!-- Price End -->
                
                <!-- Color Start -->
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Filtrar por cor</span></h5>
                <div class="bg-light p-4 mb-30">
                    <form>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" checked id="color-all">
                            <label class="custom-control-label" for="price-all">Todas as cores</label>
                            <span class="badge border font-weight-normal">1000</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="color-1">
                            <label class="custom-control-label" for="color-1">Preto</label>
                            <span class="badge border font-weight-normal">150</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="color-2">
                            <label class="custom-control-label" for="color-2">Branco</label>
                            <span class="badge border font-weight-normal">295</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="color-3">
                            <label class="custom-control-label" for="color-3">Vermelho</label>
                            <span class="badge border font-weight-normal">246</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="color-4">
                            <label class="custom-control-label" for="color-4">Azul</label>
                            <span class="badge border font-weight-normal">145</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between">
                            <input type="checkbox" class="custom-control-input" id="color-5">
                            <label class="custom-control-label" for="color-5">Verde</label>
                            <span class="badge border font-weight-normal">168</span>
                        </div>
                    </form>
                </div>
                <!-- Color End -->

                <!-- Size Start -->
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Filtrar por tamanho</span></h5>
                <div class="bg-light p-4 mb-30">
                    <form>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" checked id="size-all">
                            <label class="custom-control-label" for="size-all">Todos os tamanhos</label>
                            <span class="badge border font-weight-normal">1000</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="size-1">
                            <label class="custom-control-label" for="size-1">XS</label>
                            <span class="badge border font-weight-normal">150</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="size-2">
                            <label class="custom-control-label" for="size-2">S</label>
                            <span class="badge border font-weight-normal">295</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="size-3">
                            <label class="custom-control-label" for="size-3">M</label>
                            <span class="badge border font-weight-normal">246</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="size-4">
                            <label class="custom-control-label" for="size-4">L</label>
                            <span class="badge border font-weight-normal">145</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between">
                            <input type="checkbox" class="custom-control-input" id="size-5">
                            <label class="custom-control-label" for="size-5">XL</label>
                            <span class="badge border font-weight-normal">168</span>
                        </div>
                    </form>
                </div>
                <!-- Size End -->
            </div>
            <!-- Shop Sidebar End -->


            <!-- Shop Product Start -->
            <div class="col-lg-9 col-md-8">
                <!-- Team Start -->
                <div class="container-fluid">
                <div class="container pt-5">
                    <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="team position-relative overflow-hidden mb-5">
                        <img class="img-fluid img-produto" src="../../../public/assets/img/image190.png" alt="" />
                        <div class="position-relative text-center">
                            <div class="team-text bg-primary text-white">
                            <h5 class="text-white text-uppercase">Hidratante</h5>
                            <p class="m-0">R$ 00,00</p>
                            </div>
                            <div class="team-social bg-dark text-center">
                            <a class="btn btn-outline-primary btn-square mr-2" href="#"
                                ><i class="fa fa-shopping-cart"></i
                            ></a>
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
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team position-relative overflow-hidden mb-5">
                        <img class="img-fluid img-produto" src="../../../public/assets/img/image190.png" alt="" />
                        <div class="position-relative text-center">
                            <div class="team-text bg-primary text-white">
                            <h5 class="text-white text-uppercase">Hidratante</h5>
                            <p class="m-0">R$ 00,00</p>
                            </div>
                            <div class="team-social bg-dark text-center">
                            <a class="btn btn-outline-primary btn-square mr-2" href="#"
                                ><i class="fa fa-shopping-cart"></i
                            ></a>
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
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team position-relative overflow-hidden mb-5">
                        <img class="img-fluid img-produto" src="../../../public/assets/img/image190.png" alt="" />
                        <div class="position-relative text-center">
                            <div class="team-text bg-primary text-white">
                            <h5 class="text-white text-uppercase">Hidratante</h5>
                            <p class="m-0">R$ 00,00</p>
                            </div>
                            <div class="team-social bg-dark text-center">
                            <a class="btn btn-outline-primary btn-square mr-2" href="#"
                                ><i class="fa fa-shopping-cart"></i
                            ></a>
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
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team position-relative overflow-hidden mb-5">
                        <img class="img-fluid img-produto" src="../../../public/assets/img/image190.png" alt="" />
                        <div class="position-relative text-center">
                            <div class="team-text bg-primary text-white">
                            <h5 class="text-white text-uppercase">Hidratante</h5>
                            <p class="m-0">R$ 00,00</p>
                            </div>
                            <div class="team-social bg-dark text-center">
                            <a class="btn btn-outline-primary btn-square mr-2" href="#"
                                ><i class="fa fa-shopping-cart"></i
                            ></a>
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
                    </div>
                    </div>
                </div>
                </div>
                <!-- Team End -->
                    <!-- Team Start -->
    <div class="container-fluid">
      <div class="container pt-5">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="team position-relative overflow-hidden mb-5">
              <img class="img-fluid img-produto" src="../../../public/assets/img/image190.png" alt="" />
              <div class="position-relative text-center">
                <div class="team-text bg-primary text-white">
                  <h5 class="text-white text-uppercase">Hidratante</h5>
                  <p class="m-0">R$ 00,00</p>
                </div>
                <div class="team-social bg-dark text-center">
                  <a class="btn btn-outline-primary btn-square mr-2" href="#"
                    ><i class="fa fa-shopping-cart"></i
                  ></a>
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
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="team position-relative overflow-hidden mb-5">
              <img class="img-fluid img-produto" src="../../../public/assets/img/image190.png" alt="" />
              <div class="position-relative text-center">
                <div class="team-text bg-primary text-white">
                  <h5 class="text-white text-uppercase">Hidratante</h5>
                  <p class="m-0">R$ 00,00</p>
                </div>
                <div class="team-social bg-dark text-center">
                  <a class="btn btn-outline-primary btn-square mr-2" href="#"
                    ><i class="fa fa-shopping-cart"></i
                  ></a>
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
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="team position-relative overflow-hidden mb-5">
              <img class="img-fluid img-produto" src="../../../public/assets/img/image190.png" alt="" />
              <div class="position-relative text-center">
                <div class="team-text bg-primary text-white">
                  <h5 class="text-white text-uppercase">Hidratante</h5>
                  <p class="m-0">R$ 00,00</p>
                </div>
                <div class="team-social bg-dark text-center">
                  <a class="btn btn-outline-primary btn-square mr-2" href="#"
                    ><i class="fa fa-shopping-cart"></i
                  ></a>
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
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="team position-relative overflow-hidden mb-5">
              <img class="img-fluid img-produto" src="../../../public/assets/img/image190.png" alt="" />
              <div class="position-relative text-center">
                <div class="team-text bg-primary text-white">
                  <h5 class="text-white text-uppercase">Hidratante</h5>
                  <p class="m-0">R$ 00,00</p>
                </div>
                <div class="team-social bg-dark text-center">
                  <a class="btn btn-outline-primary btn-square mr-2" href="#"
                    ><i class="fa fa-shopping-cart"></i
                  ></a>
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
          </div>
        </div>
      </div>
    </div>
    <!-- Team End -->
            </div>
            <!-- Shop Product End -->
        </div>
    </div>
    <!-- Shop End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-secondary mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <h5 class="text-secondary text-uppercase mb-4">Get In Touch</h5>
                <p class="mb-4">No dolore ipsum accusam no lorem. Invidunt sed clita kasd clita et et dolor sed dolor. Rebum tempor no vero est magna amet no</p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Location, City, Country</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>info@example.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+012 345 67890</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Quick Shop</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Shop</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shop Detail</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                            <a class="text-secondary" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">My Account</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Shop</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shop Detail</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                            <a class="text-secondary" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Newsletter</h5>
                        <p>Duo stet tempor ipsum sit amet magna ipsum tempor est</p>
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Your Email Address">
                                <div class="input-group-append">
                                    <button class="btn btn-primary">Sign Up</button>
                                </div>
                            </div>
                        </form>
                        <h6 class="text-secondary text-uppercase mt-4 mb-3">Follow Us</h6>
                        <div class="d-flex">
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border-top mx-xl-5 py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-secondary">
                    &copy; <a class="text-primary" href="#">Domain</a>. All Rights Reserved. Designed
                    by
                    <a class="text-primary" href="https://freewebsitecode.com">Free Website Code</a>
                </p>
            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="img/payments.png" alt="">
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


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