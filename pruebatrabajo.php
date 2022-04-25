<?php


$sonido1="brr";
$sonido2="fiu";
$sonido3="cric-cri";
$sonido4="brrah";
$sonido5="birip";
$sonido6="trri-trri";
$sonido7="croac";
$sonido8="plop";
$sonido9="cric-cric";

$sonidototal=0;

  if ($sonido1 =="brr")
  {  
    $sonidototal= $sonido2." ".$sonido3." ".$sonido4;
   
    echo"<br/>la primera cancion es:"." ".$sonidototal; 
  }

  if ($sonido5=="birip")
  {
    $sonidototal= $sonido6." ".$sonido7;
    echo"<br/>la segunda cancion es:"." ".$sonidototal;
  }

  if($sonido8=="plop")
  {
    $sonidototal= $sonido9." ".$sonido4;     
    echo"<br/>la tercera cancion es:"." ".$sonidototal;
    //$canc++;
    //$acu=$acu+$canc; 

  }
    else if ($sonido7=="croac" or $sonido4=="brrah")
    {
      echo"<br/>silencio";
    }
  //  $canc++;
  //  $acu=$acu+$canc; 
//}