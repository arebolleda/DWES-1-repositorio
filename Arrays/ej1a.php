<!DOCTYPE html>
<HTML>
<HEAD>
<TITLE> Ej1A Arrays</TITLE></HEAD>
<BODY>
<h4>Lucas Fadavi Solanilla</h4>   	
<?php

/*ALFONSO:<<<< Muy bien resuelto ...
No es necesario inicializar variables, pero para ervitar resultados inesperados es buena práctica

*/
$arrayI = array();
$nImp=0;
$incre=0;


echo "<br>";
echo " <table border=\"1\" align=\"center\">";

		echo "<tr>";
		echo "<th> Indice </th> <th> Valor </th> <th> Suma </th>";
	    echo "</tr>";															
														
		for ($x=0;$x<20;$x++){
				$arrayI[$x]=$nImp+2;
				$nImp+=2;
				$incre+= $nImp;
				$arrayI[$x]=$nImp-1;
				$incre--;
				
	echo "<tr> <td>".$x."</td><td>".$arrayI[$x]."</td><td>".$incre."</td>";
	}
echo " </tr>";
echo"</table>";
?>
</BODY>
</HTML>
