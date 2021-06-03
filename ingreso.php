<?php
$usuario=$_REQUEST["n_usuario"];
$password=$_REQUEST["pwd"];

$conexion=mysql_connect("localhost","root","");
mysql_select_db("biblioteca", $conexion);
$sql= "INSERT INTO tbl_usuario(usu_nombre,usu_contrasena)values('".$usuario."','".$password."')";
$result= mysql_query($sql,$conexion);



    echo "Usuario y Contraseña registrados correctamente";

    echo"<br>Ya puede iniciar sesion<br/> <a href= iniciarsesion.html> Iniciar Sesion</a>";

 ?>

