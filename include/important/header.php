
<?php
      $currentPage = basename($_SERVER['PHP_SELF']);
?>


<div class="container-fluid">
      <div class="row">
            <div class="col-lg-3 bg-white d-none d-lg-block">
                  <a href="" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                        <h1 class="m-0 display-3"><img src="./img/logo-construmamparas.png" alt="Construmamparas" /></h1>
                  </a>
            </div>
            <div class="col-lg-9">
                  <div class="row bg-dark d-none d-lg-flex">
                        <div class="col-lg-7 text-left text-white">
                              <div class="h-100 d-inline-flex align-items-center border-right border-primary py-2 px-3">
                                    <i class="fa fa-envelope text-primary mr-2"></i>
                                    <small>ventas@construmamparas.com.mx</small>
                              </div>
                              <div class="h-100 d-inline-flex align-items-center py-2 px-2">
                                    <i class="fa fa-phone-alt text-primary mr-2"></i>
                                    <small>55 7596 1747</small>
                              </div>
                        </div>
                        <div class="col-lg-5 text-right">
                              <div class="d-inline-flex align-items-center pr-2">
                              <a class="text-primary p-2" href="https://www.facebook.com/share/1AzTH1cL3Q/" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                              </a>
                              <!-- <a class="text-primary p-2" href="">
                                    <i class="fab fa-twitter"></i>
                              </a>
                              <a class="text-primary p-2" href="">
                                    <i class="fab fa-linkedin-in"></i>
                              </a> -->
                              <a class="text-primary p-2" href="https://www.instagram.com/construmamparas15?igsh=MWI1a2U5ZzMyZHVyeQ==" target="_blank">
                                    <i class="fab fa-instagram"></i>
                              </a>
                              <!-- <a class="text-primary p-2" href="">
                                    <i class="fab fa-youtube"></i>
                              </a> -->
                        </div>
                  </div>
            </div>
            <nav class="navbar navbar-expand-lg bg-white navbar-light p-0">
                  <a href="" class="navbar-brand d-block d-lg-none">
                        <h1 class="m-1 pt-2 pb-2 text-primary logoNav">Costrumamparas</h1>
                  </a>
                  <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                              <a href="index.php" class="nav-item nav-link <?= ($currentPage == 'index.php') ? 'active' : ''; ?>">Inicio</a>
                              <a href="quienes-somos.php" class="nav-item nav-link <?= ($currentPage == 'quienes-somos.php') ? 'active' : ''; ?>">¿Quiénes somos?</a>
                              <a href="servicios.php" class="nav-item nav-link <?= ($currentPage == 'servicios.php') ? 'active' : ''; ?>">Servicios</a>
                              <a href="portafolio.php" class="nav-item nav-link <?= ($currentPage == 'portafolio.php') ? 'active' : ''; ?>">Portafolio</a>
                              <a href="contacto.php" class="nav-item nav-link <?= ($currentPage == 'contacto.php') ? 'active' : ''; ?>">Contacto</a>
                        </div>
                        <a href="contacto.php" class="btn btn-primary mr-3 d-none d-lg-block text-white">Contáctanos</a>
                  </div>
            </nav>
            </div>
      </div>
</div>