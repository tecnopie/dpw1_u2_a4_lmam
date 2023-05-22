<?php
$dbhost="localhost";
$dbuser="root";
$depass="";
$dbname="test122354";

$conn= mysqli_connect($dbhost,$dbuser,$depass,$dbname);
    if(!$conn)
    {
        die("No hay conexión".mysqli_connect_error());
    }

$nombre= $_POST["txtusuario"];
$pass=$_POST["txtpassword"];
    if($nr==1)
    {
        echo "Bienvenido".$nombre;
    }
    else if($nr==0)
    {
        echo "No ingreso";
    }

    ?>