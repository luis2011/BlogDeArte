<?php
require_once './head.php';
?>

<?php
require_once './menu.php';
?>


<div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4" id="galeria">

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

    </div>
</div>


<script>
    /*
  const imagenes = [1, 2, 3, 4, 5, 6];
    const galeria = document.getElementById('galeria');

    for (imagen of imagenes) {
        galeria.innerHTML += `
        <div class="col">
            <div class="card mt-2">
                <a href="#" data-bs-toggle="modal" data-bs-target="#id${imagen}">
                    <img src="./img/${imagen}.jpg" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p>Precio</p>
                </div>
            </div>

           
            <div class="modal fade" id="id${imagen}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <button type="button" class="btn-close ml-2" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-dialog modal-lg modal-dialog-centered" style="width: 35rem;">
                    <img src="./img/${imagen}.jpg" alt="..." class="img-fluid rounded">

                </div>
            </div>
        </div>
        `
    }*/


    const obj = [{
            'name': 'Peter',
            'email': 'petergriffin@example.com',
            'job': 'developer',
            'age': 1,
            'precio': 23
        },
        {
            'name': 'Test',
            'email': 'test@example.com',
            'job': 'developer',
            'age': 2,
            'precio': 56
        },
        {
            'name': 'TestB',
            'email': 'testb@example.com',
            'job': 'developer',
            'age': 3,
            'precio': 233
        },
    ]

    for (x of obj) {
        //console.log(x.name + ' ' + x.email);

        galeria.innerHTML += `
        <div class="col">
            <div class="card mt-2">
                <a href="#" data-bs-toggle="modal" data-bs-target="#id${x.age}">
                    <img src="./img/${x.age}.jpg" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                    <h5 class="card-title">${x.name}</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p>Precio: ${x.precio}</p>
                </div>
            </div>

           
            <div class="modal fade" id="id${x.age}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <button type="button" class="btn-close ml-2" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-dialog modal-lg modal-dialog-centered" style="width: 35rem;">
                    <img src="./img/${x.age}.jpg" alt="..." class="img-fluid rounded">

                </div>
            </div>
        </div>
        `
    }
</script>

<?php
require_once './footer.php';
?>