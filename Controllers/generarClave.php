<?php
    require_once("../Models/conexion.php");
    require_once("../Models/generarClaveModel.php");

    $identificacion = $_POST['identificacion'];
    $email = $_POST['email'];

    $objClave = new GenerarCLave();
    $result = $objClave->enviarNuevaClave($identificacion, $email);


?>