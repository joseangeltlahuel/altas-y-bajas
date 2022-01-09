<?php

$NOMBRE = strtoupper($_POST["NOMBRE"]);
$APELLIDO_PATERNO = strtoupper($_POST["APELLIDO_PATERNO"]);
$APELLIDO_MATERNO = strtoupper($_POST["APELLIDO_MATERNO"]);
$CURP = strtoupper($_POST["CURP"]);
$RFC = strtoupper($_POST["RFC"]);
$DOMICILIO = strtoupper($_POST["DOMICILIO"]);
$CP = strtoupper($_POST["CP"]);
$PROVIDENCIA = strtoupper($_POST["PROVIDENCIA"]);
$NUMERO_DE_TELEFONO = strtoupper($_POST["NUMERO_DE_TELEFONO"]);
$EMAIL = strtoupper($_POST["EMAIL"]);

if(file_exists("conexion.php")){
    include "conexion.php"
}
else{
    echo "El fichero $nombre_fichero no existe";
}
$sql="insert into person(nombre,apellido_paterno,apellido_materno,CURP,RFC,domicilio,CP,providencia,numero_de_telefono,email,created_at)value('".$NOMBRE."','".$APELLIDO_PATERNO."','".$APELLIDO_MATERNO."','".$CURP."','".$RFC."','".$DOMICILIO."','".$CP."','".$PROVIDENCIA."','".$NUMERO_DE_TELEFONO."','".$EMAIL."' ,NOW())";
                $query = $con->query($sql);
                if($query!=null){
                    print "<script>alert(\"Agregado exitosamente.\");window.location='../ver.php';</script>";
                }else{
                    print "<script>alert(\"No se pudo agregar.\");window.location='../ver.php';</script>";
                }
?>