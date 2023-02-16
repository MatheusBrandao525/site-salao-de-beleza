<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Pagamento</title>
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
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
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
          <h1 class="m-0 text-primary">Wilkyanne</h1>
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
            <a href="../produtos/produtos.php" class="nav-item nav-link">Produtos</a>
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
                    <a class="breadcrumb-item text-dark" href="#">Shop</a>
                    <span class="breadcrumb-item active">Checkout</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Checkout Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">ENDEREÇO DE COBRANÇA</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>Nome</label>
                            <input class="form-control" type="text" placeholder="John">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Sobrenome</label>
                            <input class="form-control" type="text" placeholder="Doe">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>E-mail</label>
                            <input class="form-control" type="text" placeholder="example@email.com">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Numero de telefone</label>
                            <input class="form-control" type="text" placeholder="+123 456 789">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Endereço principal</label>
                            <input class="form-control" type="text" placeholder="123 Street">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Endereço segundario</label>
                            <input class="form-control" type="text" placeholder="123 Street">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>País</label>
                            <select class="custom-select">
                                <option selected>United States</option>
                                <option>Afghanistan</option>
                                <option>Albania</option>
                                <option>Algeria</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Cidade</label>
                            <input class="form-control" type="text" placeholder="New York">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Estado</label>
                            <input class="form-control" type="text" placeholder="New York">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>CEP</label>
                            <input class="form-control" type="text" placeholder="123">
                        </div>
                        <div class="col-md-12 form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="newaccount">
                                <label class="custom-control-label" for="newaccount">Create an account</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="shipto">
                                <label class="custom-control-label" for="shipto"  data-toggle="collapse" data-target="#shipping-address">Ship to different address</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="collapse mb-5" id="shipping-address">
                    <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Shipping Address</span></h5>
                    <div class="bg-light p-30">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label>Nome</label>
                                <input class="form-control" type="text" placeholder="John">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Sobrenome</label>
                                <input class="form-control" type="text" placeholder="Doe">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>E-mail</label>
                                <input class="form-control" type="text" placeholder="example@email.com">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Numero de telefone</label>
                                <input class="form-control" type="text" placeholder="+123 456 789">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Endereço principal</label>
                                <input class="form-control" type="text" placeholder="123 Street">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Endereço segundario</label>
                                <input class="form-control" type="text" placeholder="123 Street">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>País</label>
                                <select class="custom-select">
                                    <option selected>United States</option>
                                    <option>Afghanistan</option>
                                    <option>Albania</option>
                                    <option>Algeria</option>
                                </select>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Cidade</label>
                                <input class="form-control" type="text" placeholder="New York">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Estado</label>
                                <input class="form-control" type="text" placeholder="New York">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>CEP</label>
                                <input class="form-control" type="text" placeholder="123">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Total do pedido</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="border-bottom">
                        <h6 class="mb-3">Products</h6>
                        <div class="d-flex justify-content-between">
                            <p>Product Name 1</p>
                            <p>R$150</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p>Product Name 2</p>
                            <p>R$150</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p>Product Name 3</p>
                            <p>R$150</p>
                        </div>
                    </div>
                    <div class="border-bottom pt-3 pb-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h6>Subtotal</h6>
                            <h6>R$150</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Shipping</h6>
                            <h6 class="font-weight-medium">R$10</h6>
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="d-flex justify-content-between mt-2">
                            <h5>Total</h5>
                            <h5>R$160</h5>
                        </div>
                    </div>
                </div>
                <div class="mb-5">
                    <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Forma de pagamento</span></h5>
                    <div class="bg-light p-30">
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="payment" id="paypal">
                                <label class="custom-control-label" for="paypal">Paypal</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="payment" id="directcheck">
                                <label class="custom-control-label" for="directcheck">Direct Check</label>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="payment" id="banktransfer">
                                <label class="custom-control-label" for="banktransfer">Bank Transfer</label>
                            </div>
                        </div>
                        <button class="btn btn-block btn-primary font-weight-bold py-3">Efetuar pagamento</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Checkout End -->


    <!-- Footer Start -->
    <div
      class="footer container-fluid position-relative bg-dark py-5"
      style="margin-top: 90px"
    >
      <div class="container pt-5">
        <div class="row">
          <div class="col-lg-6 pr-lg-5 mb-5">
            <a href="index.html" class="navbar-brand">
              <h1 class="mb-3 text-white">
                <span class="text-primary">SPA</span> Center
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
                <h5 class="text-white text-uppercase mb-4">Quick Links</h5>
                <div class="d-flex flex-column justify-content-start">
                  <a class="text-white-50 mb-2" href="#"
                    ><i class="fa fa-angle-right mr-2"></i>Home</a
                  >
                  <a class="text-white-50 mb-2" href="#"
                    ><i class="fa fa-angle-right mr-2"></i>About Us</a
                  >
                  <a class="text-white-50 mb-2" href="#"
                    ><i class="fa fa-angle-right mr-2"></i>Our Services</a
                  >
                  <a class="text-white-50 mb-2" href="#"
                    ><i class="fa fa-angle-right mr-2"></i>Pricing Plan</a
                  >
                  <a class="text-white-50" href="#"
                    ><i class="fa fa-angle-right mr-2"></i>Contact Us</a
                  >
                </div>
              </div>
              <div class="col-sm-6 mb-5">
                <h5 class="text-white text-uppercase mb-4">Our Services</h5>
                <div class="d-flex flex-column justify-content-start">
                  <a class="text-white-50 mb-2" href="#"
                    ><i class="fa fa-angle-right mr-2"></i>Body Massage</a
                  >
                  <a class="text-white-50 mb-2" href="#"
                    ><i class="fa fa-angle-right mr-2"></i>Stone Therapy</a
                  >
                  <a class="text-white-50 mb-2" href="#"
                    ><i class="fa fa-angle-right mr-2"></i>Facial Therapy</a
                  >
                  <a class="text-white-50 mb-2" href="#"
                    ><i class="fa fa-angle-right mr-2"></i>Skin Care</a
                  >
                  <a class="text-white-50" href="#"
                    ><i class="fa fa-angle-right mr-2"></i>Nail Care</a
                  >
                </div>
              </div>
              <div class="col-sm-12 mb-5">
                <h5 class="text-white text-uppercase mb-4">Newsletter</h5>
                <div class="w-100">
                  <div class="input-group">
                    <input
                      type="text"
                      class="form-control border-light"
                      style="padding: 30px"
                      placeholder="Your Email Address"
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
              Designed by
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