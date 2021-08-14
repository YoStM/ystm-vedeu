<?php
require "html_elements_functions.php";
?>
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="/"><img src="../../assets/img/ystm-logov2.png" alt="Logo Yohan Saint-Martin" height="115px" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <?php foreach (nav_items('nav-link') as $nav_item) : ?>
                    <?= $nav_item ?>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</nav>