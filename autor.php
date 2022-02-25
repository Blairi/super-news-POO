<?php
require "includes/app.php";
incluirTemplate("nav");
?>

<main class="fill-display" id="top">
    <h2 class="title">Noticas escritas por Axel...</h2>
    <div class="contenedor">
        <?php incluirTemplate("noticias") ?>1
    </div>
</main>

<?php
incluirTemplate("footer");
?>