<?php
require "includes/app.php";
incluirTemplate("nav");
?>

<main class="fill-display" id="top">
    <section class="contenedor">
        <h2 class="title">¿Qué pasa en...?</h2>
        <div class="paises">
            <a href="">
                <div class="pais">
                    <p class="nombre-pais">México</p>
                    <div class="thumb">
                        <img src="" alt="" class="bandera">
                    </div>
                </div>
            </a>
            <a href="">
                <div class="pais">
                    <p class="nombre-pais">Brasil</p>
                    <div class="thumb">
                        <img src="" alt="" class="bandera">
                    </div>
                </div>
            </a>
            <a href="">
                <div class="pais">
                    <p class="nombre-pais">Argentina</p>
                    <div class="thumb">
                        <img src="" alt="" class="bandera">
                    </div>
                </div>
            </a>
        </div>
    </section>
</main>

<?php
incluirTemplate("footer");
?>