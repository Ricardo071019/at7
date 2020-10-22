<?php
$temperatura  = 0;
echo '<h1> A temperatura é de'. $temperatura. 'º<h1>';
if ($temperatura <=3) {
	echo "Dia Gelado";
}
 
 elseif ($temperatura > 3 && $temperatura <=15 ) {
 	echo "Dia Frio";
 }

 elseif ($temperatura>15 and $temperatura<=29)
  {
 echo 'Dia Agradavel';
 }

else{
	echo '...começa a ficar demasiado calor';
}
?>