<?php
// para interactuar con el usuario vamos a crear variables goblales y en la direccion url se le manda un simbolo de interrogacion 
// para terminar con el ?y ahi finaliza la url luego de esto se va a decir que la url va a tomar datos y le asiganamos
// un dato con esto la url va a tomar un dato ejemplo?dato=claudio

 
//print_r($_GET);                            // ESTA ES una variable global ´para extraer el parametro de mi url y funciona como un arreglo
                                            // esto php lo guarda como un arreglo en una posicion y lo almacena el dato claudio asi como en el ejemplo
                                            //http://localhost:85/MiPrimerPHP/tiposdevariables.php?dato=claudio%20morales // el % 20 es el espacio que se ve en el navegador

 


                                                
                                                  // el ($_GET )tiene un limite de rango
//isset(              )  ;                                           // veifica si tiene valor una posicion y tiene valor unos datos
//$nombreusar = $_GET[ "nombre" ];
$nombreusar = $_POST[ "nombre" ];
$edadusar = $_POST[ "edad" ];
//$edadusar = $_GET[ "edad" ];
echo "hola amigos: ".$nombreusar;
echo "<br> Edad: ".$edadusar;
if($edadusar>=18)
{
    echo" <br> eres mayor de edad";
}

 else {
    echo" <br> eres menor de edad ";
    
}
