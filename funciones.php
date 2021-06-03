<?php
//inicio de declaracion de una funcion


$moneda["mexico"]= "peso";
$moneda["usa"]= "dolar";
$moneda["espana"]=" euro";
$moneda["japon" ]="yen";

foreach( $moneda as $pos=> $valor )   
{
  echo"<br/> gust ".$pos .":" .$valor ;  
  
}    

//function micodigo($arreglo)               //ahi qu edeclarar una variable global para que pueda tomar acceso de  la informacion de manera interna 
//{                                        //inicio de la funcion se lo hace dentro de las llaves
  // foreach( $arreglo as $pos=> $valor )   // asi mismo luego que se la declara se puede utilizar esa variable para econocer el codigo 
    //{
     //echo"<br/> mon ".$pos .":" .$valor ; 
    //}
  //micodigo($moneda);                     //llamado de la funcion para que se ejecute necesita recibe un parametro para poder utilizarlo y ejecutar el proceso que desee con la funcion
  
//}                                         //fin de la funcion al cerrar la llave
    
// se puede usar las funciones dentro del include

function micodigo2($arreglo,$text)  // tambien se puede recibir dos parametros el segundo como diferente tipo de presentar mensajes            
{                                        
   foreach( $arreglo as $pos=> $valor )  
   {
     echo"<br/> $text ".$pos .":" .$valor ; 
    }
micodigo2($moneda,'gust');
}











 
