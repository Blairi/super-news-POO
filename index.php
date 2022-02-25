<?php
require "includes/app.php";

incluirTemplate("nav");

?>
<div class="slider-show" id="top">
        <div class="slider">
    
            <div class="slide">
                <a href="">
                    <img src="build/img/hong-kong.jpg" alt="">
                    <div class="slide-info contenedor">
                        <h2>Super ciudad</h2>
                        <h3>Hong Kong</h3>
                        <h4>2/24/2022</h4>
                    </div>
                </a>
            </div><!--.slide-->
    
            <div class="slide">
                <a href="">
                    <img src="build/img/japan-gcaa256506_1920.jpg" alt="">
                    <div class="slide-info contenedor">
                        <h2>Mas edificios</h2>
                        <h3>Japon</h3>
                        <h4>3/21/2022</h4>
                    </div>
                </a>
            </div><!--.slide-->
        
            <div class="slide">
                <a href="">
                    <img src="build/img/apocalypse-g03cd94988_1920.jpg" alt="">
                    <div class="slide-info contenedor">
                        <h2>Apocalipsis!</h2>
                        <h3>Mundo</h3>
                        <h4>12/12/2012</h4>
                    </div>
                </a>
            </div><!--.slide-->
    
        </div><!--.slider-->

    </div>
    <div class="contenedor-main-noticias">
        <main class="main-noticias contenedor padding-seccion">
            <h1>Mantente al tanto de las últimas noticias del mundo entero.</h1>
            <h2 class="title">Tendencias...</h2>
            
            <?php incluirTemplate("noticias"); ?>

            <section class="padding-seccion">

                <h2 class="title">Mundo...</h2>
                <?php incluirTemplate("noticias"); ?>

            </section>
        </main>
    </div>
<?php
incluirTemplate("footer");
?>