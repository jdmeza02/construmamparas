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
                    <h1 class="display-4 mb-4 mb-md-0 text-secondary text-uppercase">Contacto</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-sm btn-outline-light" href="index.php">Inicio</a>
                        <i class="fas fa-angle-double-right text-light mx-2"></i>
                        <a class="btn btn-sm btn-outline-light disabled" href="">Contacto</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-end mb-4">
                <div class="col-lg-6">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Contáctanos</h6>
                    <h1 class="section-title mb-3">Contáctenos para servicios y presupuestos</h1>
                </div>
                <div class="col-lg-6">
                    <h4 class="font-weight-normal text-muted mb-3">Trabajamos como aliados estratégicos de constructoras e instituciones, aportando experiencia, capacidad operativa y compromiso en cada etapa del proyecto.</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="contact-form">
                        <div id="success"></div>
                        <form id="contactForm" novalidate="novalidate">
                            <div class="form-row">
                                <div class="col-sm-6 control-group">
                                    <input type="text" class="form-control p-4" id="name" name="name" placeholder="Nombre*" required="required" data-validation-required-message="Por favor complete el campo" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="col-sm-6 control-group">
                                    <input type="email" class="form-control p-4" id="email" name="email" placeholder="Email*" required="required" data-validation-required-message="Por favor complete el campo" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control p-4" id="subject" name="subject" placeholder="Servicio*" required="required" data-validation-required-message="Por favor complete el campo" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control p-4" rows="6" id="message" name="message" placeholder="Deje su mensaje" required="required" data-validation-required-message="Por favor complete el campo"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-primary btn-block py-3 px-5 text-white" type="submit" id="sendMessageButton">Enviar mensaje</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5" style="min-height: 400px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <iframe style="width: 100%; height: 100%; object-fit: cover;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119996.74755496738!2d-99.13257296195822!3d19.342989361645238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ce028207270789%3A0xc1e59250ec54f8a9!2sIztapalapa%2C%20Ciudad%20de%20M%C3%A9xico%2C%20CDMX!5e1!3m2!1ses!2smx!4v1772379516897!5m2!1ses!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Footer Inicio -->
    <?php include './include/important/footer.php'; ?>
    <!-- Footer Fin -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary px-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>
    <?php include './include/modal/whatsapp.php'; ?>


    <!-- piejs Inicio -->
    <?php include './include/seo/pie.php'; ?>
    <!-- piejs Fin -->
</body>

</html>