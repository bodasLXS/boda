<?php
$url      = ruta::ctrRutaServidor();
$nosotros = controladorPlantilla::ctrMuestraNosotros();
?>
<footer class="page-footer pt-5 foo">
    <div class="container text-center text-md-left mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
            <div class="col-md-1 col-sm-0">
            </div>
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                <!-- Content -->
                <h6 class="text-uppercase font-weight-bold">
                   OCASIONES
                    <strong class="color1">
                         ESPECIALES
                    </strong>
                </h6>
                <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p class="text-dark">
                        Creamos todo tipo de arreglos florales:
                    </p>
                    <p class="text-dark">
                        <i class="fa fa-yelp mr-3">
                        </i>
                        Aniversarios
                    </p>
                    <p class="text-dark">
                        <i class="fa fa-graduation-cap mr-3">
                        </i>
                        Graduaciones
                    </p>
                    <p class="text-dark">
                        <i class="fa fa-heart mr-3">
                        </i>
                        Eventos sociales
                    </p>
                </hr>
            </div>
            <div class="col-md-4 col-lg-4 col-xl-3 mx-auto mb-4">
                <!-- Content -->
                <h6 class="text-uppercase font-weight-bold">
                    LA MEJOR
                    <strong class="color1">
                        CALIDAD
                    </strong>
                </h6>
                <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p class="text-dark text-justify">
                        Le ofrecemos toda la asesoría necesaria para que usted tenga entera confianza en la creación y decoración de su arreglo como lo imagino.
                    </p>
                </hr>
            </div>
            <div class="col-md-4 col-lg-4 col-xl-3 mx-auto mb-4">
                <!-- Content -->
                <h6 class="text-uppercase font-weight-bold">
                    ¡Conéctese con
                    <strong class="color1">
                        nosotros!
                    </strong>
                </h6>
                <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p class="text-dark">
                        Síganos en nuestras redes sociales:
                    </p>
                    <div class="row  pull-right">
                                                <?php
$jsonRedesSociales = json_decode($nosotros["redesSociales"], true);
foreach ($jsonRedesSociales as $key => $value) {

    if ($value["activo"] != 0) {

        echo '<div class="soc-item"><a href="' . $value["url"] . '" target="_blank" aria-label="Red social cibrnetica" rel="noopener">
                                        <i class="fa ' . $value["red"] . ' ' . $value["estilo"] . ' redSocial"></i>
                                    </a></div>';

    }
}
?>
                    </div>
                    <br><br>
                </hr>
            </div>
        </div>
    </div>
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3"><strong>
        © 2018 Copyright:
        <a href="">
            alnetsystems.com
        </a></strong>
    </div>
</footer>
