<!DOCTYPE html>
<html lang="en">

<?php
    $pag = "";
    include("inc/head.php");
?>

<body>

    <?php include("inc/menu.php"); ?>

    <!-- Page Content -->
    <div class="container container-body container-produtos">

        <!-- Lista de Produtos -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Estofados</h2>
            </div>
            
            <!-- Estofado Roma -->
            <div class="col-md-4">
                <a
                    href="img/estofados/roma/1.jpg"
                    class="item-produto"
                    data-lightbox="roma"
                    data-title="<div class='col-lg-7'>
                                    <span class='title-prod'>Estofado Roma</span>
                                    <span class='medidas-prod'>Comp: 2,00m Alt: 0,87m Larg. Aberto: 1,28m Larg. Fechado: 0,98m</span>
                                </div>

                                <div class='col-lg-5'>
                                    <span class='desc-prod'>
                                        ASSENTO RETRÁTIL COM MOLAS
                                    </span>
                                    <span class='material-prod'>
                                        ASSENTO COM ESPUMA D23 | ENCOSTO COM ALMOFADA FIXA | ARTICULAÇÃO DE FERRO (TUBO) | RODÍZIOS EM SILICONE | PÉS EM “L” EM MDF
                                    </span>
                                </div>">

                    <img alt="" src="img/estofados/roma/1.jpg" class="img-responsive img-portfolio img-hover" width="800">
                    <h3>Estofado Roma</h3>
                </a>
                <a
                    href="img/estofados/roma/2.jpg"
                    class="item-produto display-none"
                    data-lightbox="roma"
                    data-title="<div class='col-lg-7'>
                                    <span class='title-prod'>Estofado Roma</span>
                                    <span class='medidas-prod'>Comp: 2,00m Alt: 0,87m Larg. Aberto: 1,28m Larg. Fechado: 0,98m</span>
                                </div>

                                <div class='col-lg-5'>
                                    <span class='desc-prod'>
                                        ASSENTO RETRÁTIL COM MOLAS
                                    </span>
                                    <span class='material-prod'>
                                        ASSENTO COM ESPUMA D23 | ENCOSTO COM ALMOFADA FIXA | ARTICULAÇÃO DE FERRO (TUBO) | RODÍZIOS EM SILICONE | PÉS EM “L” EM MDF
                                    </span>
                                </div>">
                    <h3>Estofado Roma</h3>
                </a>
            </div><!-- Estofado Roma -->



            <!-- Estofado Durban -->
            <div class="col-md-4">
                <a
                    href="img/estofados/durban/1.jpg"
                    class="item-produto"
                    data-lightbox="durban"
                    data-title="<div class='col-lg-7'>
                                    <span class='title-prod'>Estofado Durban</span>
                                    <span class='medidas-prod'>Alt: 0,98m  Alt. do assento: 0,45m Larg. Aberto: 1,53m    Larg. Fechado: 1,14m Módulos: 0,70m / 0,80m / 0,90m Braços: 0,20m / 0,25m</span>
                                </div>

                                <div class='col-lg-5'>
                                    <span class='desc-prod'>
                                        ASSENTO RETRÁTIL COM MOLAS
                                    </span>
                                    <span class='material-prod'>
                                        ASSENTO RETRÁTIL COM MOLAS | ASSENTO COM ESPUMA D26 | ENCOSTO COM ALMOFADA FIXA | ARTICULAÇÃO DE FERRO (TUBO) | RODÍZIOS EM SILICONE | PÉS EM “L” EM MDF
                                    </span>
                                </div>">

                    <img alt="" src="img/estofados/durban/1.jpg" class="img-responsive img-portfolio img-hover" width="800">
                    <h3>Estofado Durban</h3>
                </a>
                <a
                    href="img/estofados/durban/2.jpg"
                    class="item-produto display-none"
                    data-lightbox="durban"
                    data-title="<div class='col-lg-7'>
                                    <span class='title-prod'>Estofado Durban</span>
                                    <span class='medidas-prod'>Alt: 0,98m  Alt. do assento: 0,45m Larg. Aberto: 1,53m    Larg. Fechado: 1,14m Módulos: 0,70m / 0,80m / 0,90m Braços: 0,20m / 0,25m</span>
                                </div>

                                <div class='col-lg-5'>
                                    <span class='desc-prod'>
                                        ASSENTO RETRÁTIL COM MOLAS
                                    </span>
                                    <span class='material-prod'>
                                        ASSENTO RETRÁTIL COM MOLAS | ASSENTO COM ESPUMA D26 | ENCOSTO COM ALMOFADA FIXA | ARTICULAÇÃO DE FERRO (TUBO) | RODÍZIOS EM SILICONE | PÉS EM “L” EM MDF
                                    </span>
                                </div>">
                    <h3>Estofado Durban</h3>
                </a>
            </div><!-- Estofado Durban -->
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <?php include("inc/footer.php"); ?>

    <!-- Iguala Altura JavaScript -->
    <script src="js/igualaAltura.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $(".item-produto img").igualaAltura();
        });
    </script>

</body>

</html>
