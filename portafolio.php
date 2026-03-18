<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './include/seo/head.php'; ?>
  </head>

<body>
    <?php include './include/seo/analytics.php'; ?>
    <!-- Header Inicio-->
    <?php include './include/important/header.php'; ?>
    <!-- Header Fin-->


    <!-- Page Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="display-4 mb-4 mb-md-0 text-secondary text-uppercase">Portafolio</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-sm btn-outline-light" href="index.php">Inicio</a>
                        <i class="fas fa-angle-double-right text-light mx-2"></i>
                        <a class="btn btn-sm btn-outline-light disabled" href="">Portafolio</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Portfolio Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-end mb-4">
                <div class="col-lg-6">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Nuestro portafolio</h6>
                    <h1 class="section-title mb-3">Nuestros proyectos</h1>
                </div>
                <div class="col-lg-6 text-center text-lg-right">
                    <ul class="list-inline mb-2" id="portfolio-flters">
                        <li class="btn btn-sm btn-outline-primary m-1 active"  data-filter="*">Todos</li>
                        <li class="btn btn-sm btn-outline-primary m-1" data-filter=".mamparas">Mamparas</li>
                        <li class="btn btn-sm btn-outline-primary m-1" data-filter=".aluminio">Cancelería</li>
                        <li class="btn btn-sm btn-outline-primary m-1" data-filter=".herreria">Herreria</li>
                    </ul>
                </div>
            </div>
            <div class="row m-0 portfolio-container">
                <?php
                    $base = "./img/portafolio/herreria/herreria-";
                    for ($i = 1; $i <= 6; $i++):
                    ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item herreria">
                        <div class="position-relative overflow-hidden">
                            <div class="portfolio-img imgPorta">
                                <img class="img-fluid rounded w-100" src="<?= $base . $i ?>.jpeg" alt="Herreria">
                            </div>
                            <div class="portfolio-text bg-primary">
                                <h4 class="font-weight-bold mb-4 text-white">Herreria</h4>
                                <div class="d-flex align-items-center justify-content-center">
                                    <a class="btn btn-sm btn-secondary m-1" href="<?= $base . $i ?>.jpeg" data-lightbox="portfolio">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>

                <?php
                    $base = "./img/portafolio/mamparas/mamparas-";
                    for ($i = 1; $i <= 11; $i++):
                    ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item mamparas">
                        <div class="position-relative overflow-hidden">
                            <div class="portfolio-img imgPorta">
                                <img class="img-fluid rounded w-100" src="<?= $base . $i ?>.jpeg" alt="Mamparas">
                            </div>
                            <div class="portfolio-text bg-primary">
                                <h4 class="font-weight-bold mb-4 text-white">Mamparas</h4>
                                <div class="d-flex align-items-center justify-content-center">
                                    <a class="btn btn-sm btn-secondary m-1" href="<?= $base . $i ?>.jpeg" data-lightbox="portfolio">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
                <?php
                    $base = "./img/portafolio/aluminio/aluminio-";
                    for ($i = 1; $i <= 9; $i++):
                    ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item aluminio">
                        <div class="position-relative overflow-hidden">
                            <div class="portfolio-img imgPorta">
                                <img class="img-fluid rounded w-100" src="<?= $base . $i ?>.jpeg" alt="Aluminio">
                            </div>
                            <div class="portfolio-text bg-primary">
                                <h4 class="font-weight-bold mb-4 text-white">Aluminio y Cancelería</h4>
                                <div class="d-flex align-items-center justify-content-center">
                                    <a class="btn btn-sm btn-secondary m-1" href="<?= $base . $i ?>.jpeg" data-lightbox="portfolio">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
        </div>
    </div>
    <!-- Portfolio End -->

    <!-- Nav Contacto Inicio -->
    <?php include './include/navContacto.php'; ?>
    <!-- Nav Contacto Fin -->


    <!-- Footer Inicio -->
    <?php include './include/important/footer.php'; ?>
    <!-- Footer Fin -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary px-3 back-to-top text-white"><i class="fa fa-angle-double-up"></i></a>
    <?php include './include/modal/whatsapp.php'; ?>


    <!-- piejs Inicio -->
    <?php include './include/seo/pie.php'; ?>
    <!-- piejs Fin -->
</body>

</html>