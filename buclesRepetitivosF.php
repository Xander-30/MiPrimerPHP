<?php

$edad=30;
$nombre= "alex";
$arreglogustos[0]= "cine";
$arreglogustos[1]= "pasear";
$arreglogustos[2]= "viajar";
$arreglogustos[3]= "videojuegos";
for($a=0; $a<4; $a++)
{
 echo" <br/>gustos: ".$arreglogustos[$a];
 //asort( arreglogustos);   


}
                                                         //arreglos de posiciones asociativas

$moneda["mexico"]= "peso";
$moneda["usa"]= "dolar";
$moneda["espana"]=" euro";
$moneda["japon" ]="yen";

foreach( $moneda as $pos=> $valor )    //se usa este tipo de for especial para pasar valores asociativos
                                      //del arreglo y asi lo recorra porq son valores caracter asociativos.
                                      //aqui utiliza 3 parametro el del arreglo y que eso sea "as"= para asignar a una variable ejemplo:
                                      //$moneda as $pos=> y eso lo asignamos a una variable que contenga el valor en si.
                                      //puede usarse para sacra valores de base de datos y datos globales.tambien para posiciones numericas o asociativos.
{
  echo"<br/> mon ".$pos .":" .$valor ;  
  
}    
echo"<br/>"; 

//include("basico02ePHP.php");
foreach( $arreglogustos as $pos=> $valor   ) 
    
{
  echo"<br/>mon ".$pos .":" .$valor; 

  
}  

echo"<br/>ordenar arreglos ";
echo"<br/>";   //ordenar arreglos con la funcion sort(),esta me permite ordenarlos de manera ascendente osea de menor a mayor
$arraynumerico= array(1, 4, 5, 2, 9);   //aqui utilizo una variable que me guarde el array (asi mismo le pongo el nombre array porq es un arreglo)
sort($arraynumerico);
var_export($arraynumerico);
echo"arreglo ordenado de forma ascendente"; //tambien debo usar una funcion llamada var_export() para que me permita capturar el arreglo y lo presente 
echo"<br/>";                                // en este caso ordenado de menor a mayor

rsort($arraynumerico); //aqui ordeno de forma descendente pero con la funcion rsort () osea de mayor a menor y asi mismo siguiendo los pasos del ejemplo antiguo
var_export($arraynumerico);
echo "arreglo ordenado de forma descendente";
echo"<br/>";

echo"<p>array asociativos ordenados por sus valores";
echo"<br/>";
$arrayasociativo = array("Juan"=>"29","Pedro"=>"18","Eduardo"=>"26"); //asi como lo primero pero esta ves con array asociativos ordendos por  
asort($arrayasociativo);     // por valores de menor a mayor usando la funcion asort();
var_export($arrayasociativo);
echo"arreglo asociativo ordenado por sus valores en forma ascendente";
echo"<br/>";

arsort($arrayasociativo);    // aqui es lo contrario pero en forma descendente usando la funcion arsort 
var_export($arrayasociativo);
echo"arreglo asociativo ordenado por sus valores en forma descendente";
$r=count($arrayasociativo);// con esta funcion cuento los valores existentes en el arreglo
echo"<br/>".$r;

$pila=array(" naranja", "manzana"); 
array_push($pila," melones", "sandias");  // funcion array_push(); para añadir un elemento al final del arreglo
echo"<br/>";
print_r($pila);
echo"<br/>";




$arrayasociativo = array("Juan"=>"29","Pedro"=>"18","Eduardo"=>"26");
ksort($arrayasociativo);
var_export($arrayasociativo);
echo"arreglo asociativo ordenado por sus claves en forma ascendente osea por sus nombres en orden alfabetico para aquello usamos la funcion ksort()";

echo"<br/>";

krsort($arrayasociativo);
var_export($arrayasociativo);
echo"arreglo asociativo ordenado por sus claves en forma descendente osea por sus nombres en orden alfabetico para aquello usamos la funcion krsort()";

echo"<br/>";


















//include("basico02ePHP.php"); // la funcion include incluye un archivo php dentro de otro, luego de usarlo puedo escribir debajo del include y seguir usando codigo
//include("a/b/a.php");                
                                 // para buscar un archivo dentro de una carpeta y incluirlo en el codigo.
include_once("a/b/a.php"); 
include_once("a/b/a.php");  // si el archivo ya fue incluido una ves est funciono no dejara que aparesca nuevamente solo esa ves 
require"basico02ePHP.php";     // esta funcion ,funciona semejante al include pero si se escribe mal el nombre del archivo ,pero a diferencia del include no deja ver lo demas del codigo luego include.
                               // para definicione de variables que sean indispensables usamos el requiere.

echo "<br/> esto es una prueba";




