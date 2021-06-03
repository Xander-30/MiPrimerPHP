<?php

$edad=30;
$nombre= "alex";
$arreglogustos[0]= "cine";
$arreglogustos[1]= "pasear";
$arreglogustos[2]= "viajar";
$arreglogustos[3]= "videojuegos";
for($a=0; $a<=4; $a++)
{
 echo" <br/>gustos: ". $arreglogustos[$a];
}
//arreglos de posiciones asociativas

$moneda["mexico"]= "peso";
$moneda["usa"]= "dolar";
$moneda["espana"]=" euro";

foreach( $moneda as $pos=> $valor   ) //se usa este tipo de for especial para pasar valores asociativos
                                      //del arreglo y asi lo recorra porq son valores caracter asociativos.
                                      //aqui utiliza 3 parametro el del arreglo y que eso sea "as"= para asignar a una variable ejemplo:
                                      //$moneda as $pos=> y eso lo asignamos a una variable que contenga el valor en si.
                                      //puede usarse para sacra valores de base de datos y datos globales.tambien para posiciones numericas o asociativos.
{
  echo"<br/> mon ".$pos .":" .$valor ;  
  
}    
echo"<br/>";    
foreach( $arreglogustos as $pos=> $valor   ) 
    
{
  echo"<br/>mon ".$pos .":" .$valor ;  
  
}        

        
