<?php
//estructuras decisivas
echo" <strong > votaciones</strong>";//html para poner texto en negrita
echo "<div style='text-align:center;'>titulo</div>"; //css con el div que es para poner titulos.
//aqui se utiliza un estandar de alineacion de texto con css que es el style='text-align:center.
$edad=15;
$nombrepersona= "alex";
if ($edad >=18&&$edad<=21)
{
    echo" puedes votar";
}
else if ($edad==17)
{
    echo" animo ya te falta poco para poder votar";
}

       else if($edad==50)
       {
           echo" estas a punto de jubilarte y aun puedes votar";
       }
   else
   {
        echo" Aun no estas en edad de votar";
   }
     if ($nombrepersona=="alex")  
     { 
         echo"<br> bienvenido busca tu mesa";
     }
      else 
      { 
        echo"<br> no es tu mesa amigo";
      }
  
       ?>;





























































