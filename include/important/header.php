
<?php
      $currentPage = basename($_SERVER['PHP_SELF']);
?>


<div class="container-fluid">
      <div class="row">
            <div class="col-lg-3 bg-white d-none d-lg-block">
                  <a href="index.php" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
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
                              </a> -->
                              <a class="text-primary p-2" href="https://www.tiktok.com/@construmamparas.m?_r=1&_t=ZS-94PlZzOuKcn" target="_blank">
                                    <svg class="svgtiktok" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path d="M448.5 209.9c-44 .1-87-13.6-122.8-39.2l0 178.7c0 33.1-10.1 65.4-29 92.6s-45.6 48-76.6 59.6-64.8 13.5-96.9 5.3-60.9-25.9-82.7-50.8-35.3-56-39-88.9 2.9-66.1 18.6-95.2 40-52.7 69.6-67.7 62.9-20.5 95.7-16l0 89.9c-15-4.7-31.1-4.6-46 .4s-27.9 14.6-37 27.3-14 28.1-13.9 43.9 5.2 31 14.5 43.7 22.4 22.1 37.4 26.9 31.1 4.8 46-.1 28-14.4 37.2-27.1 14.2-28.1 14.2-43.8l0-349.4 88 0c-.1 7.4 .6 14.9 1.9 22.2 3.1 16.3 9.4 31.9 18.7 45.7s21.3 25.6 35.2 34.6c19.9 13.1 43.2 20.1 67 20.1l0 87.4z"/></svg>
                              </a>
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
                        <h1 class="m-1 pt-2 pb-2 text-primary logoNav"><img style="width: 50px" src="./img/logo-construmamparas.png" alt="Construmamparas" /></h1>
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