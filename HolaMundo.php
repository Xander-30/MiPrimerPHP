<html>
 <head>
  <title>Prueba de PHP</title>
 </head>
 <body>
 <?php // inicio del php
 // para saltos de lineas<p> </p>
   echo '<p>Hola Mundo</p>'; //para mostrar mensajes
   
   //tipos de variables:
    $numero= 1.5; //numerica
    $numero2=3.5;
    $resultado= $numero+$numero2;
    $promedio= $resultado/2;


    



    
    $_texto= "hola";// caracter
    $$_texto= "variable referenciada";// para referenciar una variable
   echo "$_texto ";
   echo "<p> $hola</p>";
   echo"<p>la suma es :$resultado</P>" ; printf( "<p> el promedio es:$promedio </p>");
   echo "el promedio final es:".$promedio ."de las dos notas".$numero," y".$numero2;//concatenando mensajes y valores de las variables
   //FINAL DE PHP



  ?>    
     
     
 </body>
</html>