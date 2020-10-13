<HTML>
<HEAD> <TITLE> Arrays Unidimensionales </TITLE> </HEAD>
<meta charset="UTF-8">
<BODY>
	<h4>Lucas Fadavi Solanilla</h4> 
<?php
	
	
	$alumnosBBDD = array ("Nostromo"=>7, "Buenafuente"=>4, "Batman"=>10,"Terminator"=>9,"Amadeus"=>5);

	
 	/*foreach($alumnos as $name => $datos) {
	    echo "Alumno: ".$name." calificacion: ".$datos;
	    echo "<br>";
	 }*/
	
	

	$alumnoBBDDnMax=array_search(max($alumnosBBDD), $alumnosBBDD);

	 echo "La mejor nota en Base de datos es un: " .$alumnosBBDD[$alumnoBBDDnMax]."</br> y el alumno es: " .$alumnoBBDDnMax."</br>";

	$alumnoBBDDnMin=array_search(min($alumnosBBDD), $alumnosBBDD);

    echo "</br> La peor nota en Base de datos es un: " .$alumnosBBDD[$alumnoBBDDnMin]."</br> y el alumno es: " .$alumnoBBDDnMin."</br>";

    $sumaNotas=array_sum($alumnosBBDD);

    echo "</br> La media de las notas de los alumnos es: " .($sumaNotas/5);



	 


?>
</BODY>
</HTML>