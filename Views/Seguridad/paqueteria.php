<?php
require_once("../../Models/conexion.php");
require_once("../../Models/consultas.php");
require_once("../../Models/seguridadPS.php");
require_once("../../Controllers/mostrarInfoAdmin.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Mantenimiento Harmony</title>


    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Custom styles -->
    <link rel="stylesheet" href="../../assets/css/pack-styles.css">
    <link rel="stylesheet" href="../../components/css/header.css">
    <link rel="stylesheet" href="../../components/css/menu.css">


    <!-- Transition.style website -->
    <link rel="stylesheet" href="https://unpkg.com/transition-style">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap');

        * {
            box-sizing: border-box;
        }

        label {
            font-family: 'Roboto', sans-serif !important;
            font-weight: 300 !important;
        }
    </style>
</head>

<body>

    <?php
    include '../../components/menuPS.php';
    include '../../components/headerIncludePS.php';
    ?>

    <div class="content-wrap mt-4">
        <div class="main d-flex flex-column justify-content-center w-100" style="height: 88vh;">
            <div class="row justify-content-between w-100">
                <div class="col-lg-8 p-r-0 title-margin-right align-items-center">
                    <div class="page-header ms-4 ">
                        <div class="page-title d-flex ms-3 r align-items-center">
                            <div class="icon-content p-2 rounded-circle" style="background-color: #0000FF !important;">
                                <img src="../../assets/icons/box-pack.png" alt="">
                            </div>
                            <h1 style="font-size: 1.7em;" class="ms-4  my-auto">Registro de Mantenimiento</h1>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
                <div class="col-lg-4 p-l-0 title-margin-left  d-flex align-items-center justify-content-end pe-4 ">
                    <div class="page-header d-flex align-items-center ">
                        <div class="page-title  " style="display: flex; align-items: center !important;">
                            <ol class="breadcrumb  m-0">
                                <li class="breadcrumb-item">
                                    <a href="#" style="color: #0000FF">Residente</a>
                                </li>
                                <li class="breadcrumb-item active">Registro de mantenimiento</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
            </div>
            <!-- main content -->
            <div class="pt-3 mt-5 ">
                <main class="w-100 row px-5 container mx-auto gap-4 flex-nowrap align-items-center py-4">
                    <form action="../../Controllers/registrarPaquete.php" class="col-md-5 p-5 pack-form-ps h-75" method="post">
                        <div class="d-flex flex-column mb-3">
                            <h2 style="font-size: 1.7em;">Requerir mantenimiento</h2>
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
                            <label for="" class="py-2">Remitente</label>
                            <input type="text" name="Tipo de mantenimiento" placeholder="Limpiar piscina" class="rounded-3 input">
                        </div>

                        <div class="d-flex flex-column  mt-3">
                            <button class="p-2 register-btn border border-none rounded-2">Registrar</button>
                        </div>
                    </form>
                    <div id="grid" class="col-md-7 p-0 m-0 grid-collage-ps">
                        <img src="./images/pack1.jpg" width="100%" height="100%" alt="">
                        <img src="./images/vertical-p.jpg" alt="">
                        <img src="./images/horizontal-pack.png" width="100%" height="100%" alt="">
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

</body>

</html>