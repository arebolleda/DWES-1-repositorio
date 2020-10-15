<HTML>
<HEAD> <TITLE> Arrays Unidimensionales </TITLE> </HEAD>
<meta charset="UTF-8">
<BODY>
	<h4>Lucas Fadavi Solanilla</h4> 
<?php
	
	
	$alumnos = array ("Nostromo"=>19, "Buenafuente"=>48, "Batman"=>31,"Terminator"=>50,"Amadeus"=>71);

	$numdatos=count($alumnos);

	 echo "<strong>Longitud del array asociativo:</strong> ".$numdatos."<br>";
 
/*ALFONSO:<<<< OK uso foreach

*/
 	foreach($alumnos as $alumno => $edad) {
	    echo "Alumno: ".$alumno." Edad: ".$edad;
	    echo "<br>";
	 }
	
	 echo "<br>";
	/*foreach($alumnos as $alumno => $edad) {
		while ($Buenafuente = current($alumnos)) {

	       
	       	if (key($alumnos)=="Buenafuente") {
	       	 next($alumnos);
	       	 echo key($alumnos).'<br />';
	       	}
			}
	}*/

	/* Estos apartado no se pueden realizar 
	b. Sitúa el puntero en la segunda posición del array y muestra su valor
	c. Avanza una posición y muestra el valor
	d. Coloca el puntero en la última posición y muestra el valor */
/*ALFONSO:<<<< OK uso función asort

*/
	asort($alumnos);

	echo "<strong>Array Ordenado:</strong> <br>";
	foreach($alumnos as $alumno => $edad) {
	    echo "Alumno: ".$alumno." Edad: ".$edad;
	    echo "<br>";
	 }


?>
</BODY>
</HTML>
