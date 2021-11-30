<?php
require_once './head.php';
?>

<?php
require_once './menu.php';
?>

<div class="container" style="margin-top: 90px;">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" method="post">
                    <fieldset>
                        <legend class="text-left header text-warning">CONTACTO</legend>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon text-warning" color="black"></i></span>
                            <div class="col-md-8">
                                <input id="fname" value="nombre" name="nombre" type="text" placeholder="Nombre" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon text-warning"></i></span>
                            <div class="col-md-8">
                                <input id="lname" value="apellido" name="apellido" type="text" placeholder="Apellido" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fas fa-envelope-square text-warning"></i></span>
                            <div class="col-md-8">
                                <input id="email" value="email" name="email" type="email" placeholder="Email" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon text-warning"></i></span>
                            <div class="col-md-8">
                                <input id="phone" value="telefono" name="telefono" type="number" placeholder="Telefono" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon text-warning"></i></span>
                            <div class="col-md-8">
                                <textarea class="form-control" id="message" value="mensaje" name="mensaje" placeholder="Ingresa aquí un mensaje para nosotros, nos comunicaremos a la brevedad" rows="7" required></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-left">
                                <button type="submit" class="btn btn-warning btn-lg">Enviar</button>
                            </div>
                        </div>
                    </fieldset>
                    <!-- inicio del php mail -->
                    <?php

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $nombre = $_POST["nombre"];
                        $apellido = $_POST["apellido"];
                        $email = $_POST["email"];
                        $telefono = $_POST["telefono"];
                        $mensaje = $_POST["mensaje"];

                        if (isset($nombre)) {
                            if (isset($email)) {
                                if (isset($mensaje)) {
                                    $para = "castroelsucio@outlook.com"; //colocar aqui el correo a dodne quieres que llegue
                                    $asunto = "consulta";
                                    $cuerpo = $nombre . "\n" . $apellido . "\n" . $email . "\n" . $telefono . "\n" . $mensaje;
                                    $adicional = "From: noreply@jacoboamaru.com";

                                    mail($para, $asunto, $cuerpo, $adicional);
                    ?>
                                    <p class="text-warning">Envio exitoso, nos estaremos comunicando con Ud.</p>
                    <?php
                                }
                            }
                        }
                    }
                    ?>
                    <!-- fin del php email -->
                </form>
            </div>
        </div>
    </div>
</div>

<?php
require_once './footer.php';
?>