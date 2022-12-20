<?php


    //recoger por el método get los parámetros codigo, denominacion, direccion y municipio

    $id=$_GET["id"];


//conectarme a la base de datos neptuno mediante objetos
    $conexion = new mysqli("cifpzonzamas.org", "institu3_neptuno", "institu3_neptuno", "institu3_neptuno");

    //si hay error en la conexion
    if ($conexion->connect_errno) {
        echo "Error al conectar con la base de datos";
        exit();
    }

    //charset utf8
    $conexion->set_charset("utf8");

    //$sql = "update centros set   Denominacion='$denominacion', Direccion='$direccion' where Codigo='$codigo'";
    $sql = "UPDATE jugadores SET deleted_at=sysdate() WHERE id='$id';";

    $resultado = $conexion->query($sql);

    //redireccionar a act2.php
    header("Location: act1.php");
?>