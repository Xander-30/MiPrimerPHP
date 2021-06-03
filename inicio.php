<?php


if(isset( $_COOKIE["misitio_userid"])) {

header("Location:paginaprincipal.html");
     echo" Usuario con sesion iniciada <a href= paginaprincipal.html> Ir a Paginaprincipal</a>";

   
}     else {

             echo" <br> No haz iniciado sesion <br /> <a href= 
      iniciarsesion.html> Iniciar Sesion</a>";
}
   ?>
