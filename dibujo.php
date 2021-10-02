<?php
require_once './head.php';
?>

<?php
require_once './menu.php';
?>

<style>
    .gallery {
        width: 100%;
        margin: 0;
        padding: 0;
    }

    .gallery li {
        display: none;
        float: left;
        list-style: none;
        margin-right: 2px;
    }

    .more,
    .less {
        background-color: black;
        clear: both;
        color: #eeb812;
        cursor: pointer;
        display: block;
        font-size: 14px;
        margin-top: 6px;
        padding: 6px 0;
        text-align: center;
        text-transform: uppercase;
        width: 100%;

    }

    .row-cols-md-3>* {

        width: 33% !important;
    }

    @media (max-width:992px) {
        .row-cols-md-3>* {

            width: 100% !important;
        }

    }
</style>


<!--id="galeria"-->
<div class="container">

    <ul id="galeria" class="row row-cols-1 row-cols-md-3 g-4 gallery">

    </ul>
    <div class="more">Ver Más..</div>
    <div class="less">Ver Menos</div>
</div>


<script>
    const obj = [{
            'id': '1',
            'titulo': 'Comida chatarra',
            'material': 'Lapices acuarelables en papel',
            'medida': '21x28cm',
        },
        {
            'id': '2',
            'titulo': 'Restriccion',
            'material': 'Grafito sobre papel',
            'medida': '21x28cm',
        },
        {
            'id': '3',
            'titulo': 'Play whit this',
            'material': 'Grafito sobre papel',
            'medida': '28x46cm',
        },
        {
            'id': '4',
            'titulo': 'S/T',
            'material': 'Grafito sobre papel',
            'medida': '21x28cm',
        },
        {
            'id': '5',
            'titulo': 'S/T',
            'material': 'Grafito sobre papel',
            'medida': '21x28cm',
        },
        {
            'id': '6',
            'titulo': 'S/T',
            'material': 'Grafito y oleo sobre papel',
            'medida': '21x28cm',
        },
        {
            'id': '7',
            'titulo': 'De la masturbacion y el amor propio 1',
            'material': 'Grafito sobre papel',
            'medida': '28x21cm',
        },
        {
            'id': '8',
            'titulo': 'Restriccion 2',
            'material': 'Grafito sobre papel',
            'medida': '21x28cm',
        },
        {
            'id': '9',
            'titulo': 'Hold me tight',
            'material': 'Grafito sobre papel',
            'medida': '28x21cm',
        },
        {
            'id': '10',
            'titulo': 'Buranero',
            'material': 'Grafito sobre papel',
            'medida': '28x21cm',
        },
        {
            'id': '11',
            'titulo': 'La Jefa',
            'material': 'Grafito sobre papel',
            'medida': '28x21cm',
        },
        {
            'id': '12',
            'titulo': 'Mirada salvaje',
            'material': 'Grafito sobre papel',
            'medida': '28x21cm',
        },
        {
            'id': '13',
            'titulo': 'Boceto S/T',
            'material': 'Dibujo en papel',
            'medida': '28x21cm',
        },
        {
            'id': '14',
            'titulo': 'Boceto S/T',
            'material': 'Acuarela en papel',
            'medida': '28x21cm',
        },
        {
            'id': '15',
            'titulo': 'La virgen de Masoka',
            'material': 'Fotocopia, grafito y tinta china',
            'medida': '28x21cm',
        },
        {
            'id': '16',
            'titulo': 'Choke`s on you',
            'material': 'Acuarela sobre papel',
            'medida': '21x28cm',
        }
    ]

    let menu = "dibu_"
    for (x of obj) {


        galeria.innerHTML += `
        <li class="col">
        <div class="card mt-2" style="background: black; border-color: black;>
                <a href="#" data-bs-toggle="modal" data-bs-target="#id${x.id}">
                    <img src="./img/${menu+x.id}.jpg" class="card-img-top" alt="...">
                </a>
                <div>
                <h6 class="text-light text-center mt-2">${x.titulo}</h6>
                <p class="text-light text-center">${x.material}</p>
                <p class="text-light text-center">${x.medida}</p>
                </div>
            </div>
            <div class="modal fade" id="id${x.id}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <button type="button" class="btn-close ml-2" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class=" modal-dialog modal-lg modal-dialog-centered ">
                
                <div class="card mt-2">  
                    <img src="./img/${menu+x.id}.jpg" alt="arte" class="img-fluid rounded">
                    </div>
                </div>

            </div>
        </li>
        `


    }
</script>
<script>
    let cantidadImagenes = 18; // cambiar la cantidad de item en cada pagina
    $(document).ready(function() {
        $('.gallery li:lt(6)').show();
        $('.less').hide();
        let items = cantidadImagenes;
        let shown = 6;
        $('.more').click(function() {

            shown = $('.gallery li:visible').length + 6;
            if (shown < items) {
                $('.gallery li:lt(' + shown + ')').show(300);
            } else {
                $('.gallery li:lt(' + items + ')').show(300);
                $('.more').hide();
                $('.less').show();
            }
        });

        $('.less').click(function() {
            $('.gallery li').not(':lt(6)').hide(300);
            $('.more').show();
            $('.less').hide();

        });
    });
</script>
<?php
require_once './footer.php';
?>

<!--div class="col">
            <div class="card mt-2">
                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <img src="./img/1.jpg" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p>Precio</p>
                </div>
            </div>

            Modal 
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <button type="button" class="btn-close ml-2" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-dialog modal-lg modal-dialog-centered" style="width: 35rem;">
                    <img src="./img/1.jpg" alt="..." class="img-fluid rounded">

                </div>
            </div>
        </div>-->