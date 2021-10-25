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


<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="./img/Portada.jpg" style="height: 85vh;" class="d-block mx-auto img-responsive" alt="portada">
            <div class="carousel-caption d-md-block">
                <button type="button" class="btn btn-warning parpadea">
                    <a href="./shop.php" style="color:black">
                        SHOP <i class="fas fa-shopping-cart"></i>
                    </a>
                </button>
            </div>
        </div>
        <div class="carousel-item">
            <img src="./img/dibu_1.jpg" style="height: 85vh;" class="d-block mx-auto img-responsive" alt="...">
            <div class="carousel-caption d-md-block">
                <button type="button" class="btn btn-warning parpadea">
                    <a href="./shop.php" style="color:black">
                        SHOP <i class="fas fa-shopping-cart"></i>
                    </a>
                </button>
            </div>
        </div>
        <div class="carousel-item">
            <img src="./img/pint_1.jpg" style="height: 85vh;" class="d-block mx-auto img-responsive" alt="...">
            <div class="carousel-caption d-md-block">
                <button type="button" class="btn btn-warning parpadea">
                    <a href="./shop.php" style="color:black">
                        SHOP <i class="fas fa-shopping-cart"></i>
                    </a>
                </button>
            </div>
        </div>
        <div class="carousel-item">
            <img src="./img/meta_1.jpg" style="height: 85vh;" class="d-block mx-auto img-responsive" alt="...">
            <div class="carousel-caption d-md-block">
                <button type="button" class="btn btn-warning parpadea">
                    <a href="./shop.php" style="color:black">
                        SHOP <i class="fas fa-shopping-cart"></i>
                    </a>
                </button>
            </div>
        </div>
        <div class="carousel-item">
            <img src="./img/mobi_1.jpg" style="height: 85vh;" class="d-block mx-auto img-responsive" alt="...">
            <div class="carousel-caption  d-md-block">
                <button type="button" class="btn btn-warning parpadea">
                    <a href="./shop.php" style="color:black">
                        SHOP <i class="fas fa-shopping-cart"></i>
                    </a>
                </button>
            </div>
        </div>
    </div>
</div>







<?php
require_once './footer.php';
?>