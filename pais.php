<?php
require "includes/app.php";
incluirTemplate("nav");
?>

<main class="fill-display">
    <h2 class="title">¿Que pasa en México?</h2>
    <div class="contenedor">
    <?php incluirTemplate("noticias"); ?>
    </div>
</main>

<?php
incluirTemplate("footer");
?>