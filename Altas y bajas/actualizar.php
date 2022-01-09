<?php
$ID_PERSONA =$_POST["id"];
$NOMBRE=strtoupper($_POST["NOMBRE"]);
$APELLIDO_PATERNO=strtoupper($_POST["APELLIDO_PATERNO"]);
$APELLIDO_MATERNO=strtoupper($_POST["APELLIDO_MATERNO"]);
$CURP=strtoupper($_POST["CURP"]);
$RFC=strtoupper($_POST["RFC"]);
$DOMICILIO=strtoupper($_POST["DOMICILIO"]);
$CP=strtoupper($_POST["CP"]);
$PROVIDENCIA=strtoupper($_POST["PROVIDENCIA"]);
$NUMERO_DE_TELEFONO=strtoupper($_POST["NUMERO_DE_TELEFONO"]);
$EMAIL=strtoupper($_POST["EMAIL"]);

if(file_exists("conexion.php")){
    include"conexion.php";
}
else{
    echo"El fichero $nombre_fichero no exisre"; 
}
$sql="update person SET nombre='".$NOMBRE."', apellido_paterno='".$APELLIDO_PATERNO."', apellido_materno='".$APELLIDO_MATERNO."', CURP='".$CURP."', RFC='".$RFC."', domicilio='".$DOMICILIO."',CP='".$CP."', providencia='".$PROVIDENCIA."', numero_de_telefono='".$NUMERO_DE_TELEFONO."',email='".$EMAIL."';";
echo $sql;
            $query =$con ->query($sql);
            if($query!=null){
                //print "<script>alert(\"Agregado exitosamente.\");window.location='../ver.php';</script>";
            }else{
                //print "<script>alert(\"No se agrego.\");window.location='../ver.php';</script>";
            }
?>
