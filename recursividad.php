<?php
function recursividad($a)
{
	
	if ($a < 20) {
	   echo "$a\n";
	   recursividad($a + ($a*2));
	}
}
?>