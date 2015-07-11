<!DOCTYPE html>
<html lang="en">

<?php include("inc/head.php"); ?>

<body>

    <?php include("inc/menu.php"); ?>

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide One');"></div>
                <div class="carousel-caption">
                    <h2>Caption 1</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');"></div>
                <div class="carousel-caption">
                    <h2>Caption 2</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container container-body">

        <!-- Destaque Home -->
        <div class="row">
            <div class="col-md-8">
                <div class="col-md-12 col-img-title">
                    <img src="img/logo_interna.png" class="img-max-size-100" />
                </div>
                <p class="par-padd-right">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sollicitudin odio nisl, at blandit neque faucibus porta. Praesent suscipit risus ex. Donec vitae quam faucibus, fringilla diam nec, porta tortor. Nullam a sodales tortor. Etiam rhoncus pretium ex id ullamcorper. Aliquam venenatis tellus in libero sollicitudin, aliquet congue lacus tempor. Etiam eu viverra ex, in faucibus dolor. Donec rhoncus mattis ligula, at accumsan libero convallis eu. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam auctor lorem sed lacus laoreet tristique. Quisque eleifend nunc sit amet sem eleifend, sit amet sagittis lorem facilisis. Maecenas ut eros sed metus egestas consectetur at a sapien.</p>
            </div>
            <div class="col-md-4 col-img-destaque">
                <img src="img/img-destaque-home.png" class="img-max-size-150 img-size-150 pull-right margin-negativa-right" />
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <?php include("inc/footer.php"); ?>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
