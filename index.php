<?php
require_once './head.php';
?>

<?php
require_once './menu.php';
?>

<style>
    @media (max-width:767px) {
        .logo__nombre__principal {
            font-size: 3em;
        }

        .container {
            height: 400px;
        }

        .videoSoldador {
            padding-top: 1rem;
            display: flex;
            align-items: flex-end;
        }
    }
</style>
<!--div class="container">
    <div class="text-warning titulo">
        <div>
            <h1 class="logo__nombre__principal centrar-texto">Castro</h1>
        </div>
        <div>
            <h1 class="logo__nombre__principal centrar-texto">El Sucio</h1>
        </div>
    </div>
</div-->

<div class="container">
    <div>
        <img src="./img/Portada.jpg" alt="" class="img_fluid">
    </div>
</div>

<!--div class="container">
    <div class="videoSoldador">
        <video width="100%" height="100%" controls autoplay>
            <source src="./videos/Soldador.mp4" type="video/mp4">
            Tu navegador no soporta los vídeos de HTML5
        </video>
    </div>
</div-->


<?php
require_once './footer.php';
?>