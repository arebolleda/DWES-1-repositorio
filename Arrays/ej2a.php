<!DOCTYPE html>
<HTML>
<HEAD>
<TITLE> Ej2A Arrays</TITLE></HEAD>
<BODY>
<h4>Lucas Fadavi Solanilla</h4>   	
<?php
/*ALFONSO:<<<< Muy bien resuelto ...*/
$arrayI = array();
$nImp=1;
$incre=0;
$contI=0;
$contP=0;



echo "<br>";
echo " <table border=\"1\" align=\"center\">";

		echo "<tr>";
		echo "<th> Indice </th> <th> Valor </th> <th> Suma </th>";
	    echo "</tr>";															
														
		for ($x=0;$x<20;$x++){
				$arrayI[$x]=$nImp;
				$incre+= $nImp;
				if($x%2==0){
					$contI+=$nImp;
				}else{	
					$contP+=$nImp;
					}

				echo "<tr> <td>".$x."</td><td>".$arrayI[$x]."</td><td>".$incre."</td>";
				echo " </tr>";	
				
			$nImp+=2;
		}	
				
echo"</table>";
				echo "Esta es la media de las posiciones pares: " .($contP/10)."<br>";
				echo "Esta es la media de las posiciones impares: ".($contI/10);
?>
</BODY>
</HTML>
