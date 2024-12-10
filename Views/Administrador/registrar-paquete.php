<?php
    require_once ("../../Models/conexion.php");
    require_once ("../../Models/consultas.php");
    require_once ("../../Models/seguridadAdministrador.php");
    require_once ("../../Controllers/mostrarInfoAdmin.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Common -->
    <link href="../Dashboard/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="../Dashboard/css/lib/themify-icons.css" rel="stylesheet">
    <link href="../Dashboard/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="../Dashboard/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="../Dashboard/css/lib/helper.css" rel="stylesheet">
    <link href="../Dashboard/css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/pack-styles.css">
    <link rel="stylesheet" href="../../assets/css/publicaciones-styles.css">
    <title>Mantenimiento</title>
</head>

<body>
    <?php
    include 'menu-include.php';
    ?>

    <div class="content-wrap">
        <div class="main">
        <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header ms-4">
                            <div class="page-title d-flex align-items-center">
                                <div class="icon-content p-2 rounded-circle"
                                    style="background-color: #0000FF !important;">
                                    <img src="../../assets/icons/box-pack.png" alt="">
                                </div>
                                <h1 style="font-size: 1.7em;" class="ms-4">Mantenimiento</h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#" style="color: #0000FF">Administrador</a>
                                    </li>
                                    <li class="breadcrumb-item active">Pedir cita de mantenimiento</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- main content -->
            <div class="pt-3 ">
                <main class="w-100 row px-5 gap-4 flex-nowrap align-items-center py-4">
                    <form action="../../Controllers/registrarPaquete.php" class="col-md-5 p-5 pack-form h-75" method="post">
                    <div class="d-flex flex-column mb-3">
                            <h2 style="font-size: 1.7em;">Formulario de registro</h2>
                        </div>  

                        <div class="d-flex flex-column mb-3">
                            <label for="" class="py-2">Torre</label>
                            <input type="text" name="torre" placeholder="1" class="rounded-3 input">
                        </div>

                        <div class="d-flex flex-column mb-3">
                            <label for="" class="py-2">Apartamento</label>
                            <input type="text" name="apartamento" placeholder="a-12" class="rounded-3 input">
                        </div>

                        <div class="d-flex flex-column mb-4">
                            <label for="" class="py-2">Tipo de mantenimiento</label>
                            <input type="text" name="Tipo de mantenimiento" placeholder="Goteras" class="rounded-3 input">
                        </div>

                        <div class="d-flex flex-column  mt-3">
                        <button class="boton-btn">Registrar</button>                           
                        </div>
                    </form>
                    <div id="grid" class="col-md-7 p-0 m-0 grid-collage">
                        <img src="./images/pack.jpg"  width="100%" height="100%" alt="">
                        <img src="./images/vertical-p.jpg"  alt="">
                        <img src="./images/pack1.jpg" width="100%" height="100%"   alt="">
                    </div>
                </main>
            </div>
        </div>
    </div>


    <!-- Common -->
    <script src="../Dashboard/js/lib/jquery.min.js"></script>
    <script src="../Dashboard/js/lib/jquery.nanoscroller.min.js"></script>
    <script src="../Dashboard/js/lib/menubar/sidebar.js"></script>
    <script src="../Dashboard/js/lib/preloader/pace.min.js"></script>
    <script src="../Dashboard/js/lib/bootstrap.min.js"></script>
    <script src="../Dashboard/js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>