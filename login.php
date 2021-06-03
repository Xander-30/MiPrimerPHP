
 <?php
$usuario=$_REQUEST["n_usuario"];
$password=$_REQUEST["pwd"];

$result="bibliotecalogo.php";




$conexion=mysql_connect("localhost","root","1234");
mysql_select_db("biblioteca", $conexion);
$sql= "SELECT   usu_codigo_del_usuario FROM tbl_usuario WHERE  usu_nombre='".$usuario."' AND usu_contrasena = '".$password."'";
$result= mysql_query($sql,$conexion);

if(mysql_num_rows($result)> 0)
{
     $id_usuario= mysql_result($result,0);
     setcookie("misitio_userid",$id_usuario,time()+ 3600);
     header("Location:inicio.php");
}
else 
    echo "Usuario o Contraseña incorrectas";

    echo"<br>Por favor intente  nuevamente<br/> <a href= iniciarsesion.html> Iniciar Sesion</a>"  ;
    

 ?>

<html>
<head>
	
<img src="imagenes/error.gif";align=ritgh>
</head>  
</html> 