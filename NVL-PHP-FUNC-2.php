<?php

 $letras = cuentaLetraA('Paleta','t');
 echo $letras;
 function cuentaLetraA($palabra,$letra){

 //	echo $palabra;
 	$array = explode($letra,$palabra);
 	
 	$longitud = count($array);
 	$longitud--;
 	return "la palabra \"$palabra\" contiene $longitud letras $letra";
 }



?>