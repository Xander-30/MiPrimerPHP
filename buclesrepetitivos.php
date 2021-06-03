<?php
$valor= 7;
$valor2=8;
$valor3=9;
$result=0;
echo" <strong > tablas de multiplicar del 5,6,7</strong>.<br>";
//echo"<br>tablas de multiplicar del 5 6 y 7";

for( $a=1; $a<=10; $a++)
{
 $result=$a*$valor; 
echo"<br>$valor x $a=$result"; 
echo" </td></td> , </td></td> ,</td></td>";
 $result=$a*$valor2; 
echo"$valor2 x $a=$result";
echo" </td></td> , </td></td> ,</td></td>";
 $result=$a*$valor3; 
 echo"$valor3 x $a=$result";
include("basico02ePHP.php");

}
