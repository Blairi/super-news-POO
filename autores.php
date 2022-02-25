<?php
require "includes/app.php";
incluirTemplate("nav");
?>

<main class="fill-display" id="top">
    <h2 class="title">Nuestros Autores</h2>
    <div class="contenedor">
        <?php incluirTemplate("autores"); ?>
    </div>
</main>

<?php
incluirTemplate("footer");
?>