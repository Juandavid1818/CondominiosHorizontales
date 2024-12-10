<?php
// Enlazamos las dependencias necesario
require_once("../../Models/conexion.php");
require_once("../../Models/consultas.php");
require_once("../../Models/seguridadPS.php");
require_once("../../Controllers/mostrarInfoGuarda.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Condominios Horizontales</title>

        <!-- icono -->
        <link rel="shortcut icon" href="../../assets/icons/ico.ico">
        <!-- Common -->
        <link href="../Dashboard/css/lib/font-awesome.min.css" rel="stylesheet">
        <link href="../Dashboard/css/lib/themify-icons.css" rel="stylesheet">
        <link href="../Dashboard/css/lib/menubar/sidebar.css" rel="stylesheet">
        <link href="../Dashboard/css/lib/bootstrap.min.css" rel="stylesheet">
        <link href="../Dashboard/css/lib/helper.css" rel="stylesheet">
        <link href="../Dashboard/css/style.css" rel="stylesheet">

        <link rel="stylesheet" href="../../components/css/header.css">
        <link rel="stylesheet" href="../../components/css/menu.css">

        <!-- Transition.style website -->
        <link rel="stylesheet" href="https://unpkg.com/transition-style">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link rel="stylesheet" href="../../assets/css/pack-styles.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <link rel="stylesheet" href="../../assets/css/vehiculo-styles.css">



    </head>

<body>

    <?php
    include '../../components/menuPS.php';
    include '../../components/headerIncludePS.php';
    ?>



    <div class="content-wrap container-fluid">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1 style="font-size:40px">Modificar Novedades</h1>
                                <p style="font-size:15px; padding-right: 300px; margin-top: 10px">
                                    En este módulo, puedes editar las novedades realizadas por el personal en relación a
                                    los vehículos de nuestros residentes en caso de daños o incidencias. Realiza
                                    actualizaciones o correcciones, y garantiza un ambiente residencial seguro y bien
                                    gestionado para todos nuestros residentes.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#" style="color: #0000FF">Guarda de Seguridad</a>
                                    </li>
                                    <li class="breadcrumb-item active">Editar Novedad de Vehículo</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">


                    <div class="row"
                        style="display: flex; justify-content: center; align-items: center; margin-top:50px">
                        <div class="col-lg-6" style="display: flex;align-items: center;">
                            <img src="../../assets/img/car_edit.svg" alt="imagen de carro" style="width:100%">
                        </div>

                        <div class="col-lg-5">
                            <div class="card vehiculos_ver" style="border:none">
                                <div class="card-title">


                                </div>
                                <div class="card-body">
                                    <div class="basic-elements">


                                        <?php
                                        cargarNovedadesEditarPS();
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>




                    </div>
                </section>
            </div>
        </div>
    </div>



    <!-- Common -->
    <script src="../dashboard/js/lib/jquery.min.js"></script>
    <script src="../dashboard/js/lib/jquery.nanoscroller.min.js"></script>
    <script src="../dashboard/js/lib/menubar/sidebar.js"></script>
    <script src="../dashboard/js/lib/preloader/pace.min.js"></script>
    <script src="../dashboard/js/lib/bootstrap.min.js"></script>
    <script src="../dashboard/js/scripts.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

</body>

</html>