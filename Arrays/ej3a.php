<!DOCTYPE html>
<HTML>
<HEAD>
<TITLE> Ej3A Arrays</TITLE></HEAD>
<BODY>
<h4>Lucas Fadavi Solanilla</h4>   	
<?php
/*ALFONSO:<<<< Muy bien resuelto ...*/
$arrayBin = array();
$arrayOct = array();



echo "<br>";
echo " <table border=\"1\" align=\"center\">";

		echo "<tr>";
		echo "<th> Indice </th> <th> Binario </th> <th> Octal </th>";
	    echo "</tr>";															
														
		for ($x=0;$x<20;$x++){
				$arrayBin[$x]=decbin($x);
				$arrayOct[$x]=decoct($x);
				
				
	echo "<tr> <td>".$x."</td><td>".$arrayBin[$x]."</td><td>".$arrayOct[$x]."</td>";
	}

echo " </tr>";
echo"</table>";
?>
</BODY>
</HTML>
