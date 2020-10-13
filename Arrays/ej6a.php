<HTML>
<HEAD> <TITLE> Arrays Unidimensionales </TITLE> </HEAD>
<meta charset="UTF-8">
<BODY>
	<h4>Lucas Fadavi Solanilla</h4> 
<?php


	echo "<strong> Array sin invertir:</strong><br>";

	$asig1=array("Bases Datos","Entornos Desarrollo","Programación");
	$asig2=array("Sistemas Informáticos","FOL","Mecanizado");
	$asig3=array("Desarrollo Web ES","Desarrollo Web EC","Despliegue","Desarrollo Interfaces","Inglés");


	$unionMerge=array_merge($asig1,$asig2,$asig3);
	$nMerge=array();

	for($i=0;$i<count($unionMerge);$i++){
		$unionMerge = array_diff($unionMerge, ["Mecanizado"]);
		$nMerge=array_merge($unionMerge);
        echo $nMerge[$i]." ";
    
	}

	echo "<br>";

	echo "<br>";
	echo "<strong>Prueba para ver la salida del array y las posiciones: <br></strong>";
	var_export ($nMerge);

	echo"<br>";
	echo"<br>";

	echo "<strong>Orden inverso:</strong> ";

		echo"<br>";


		$i=9;
		$inverso=array();
	
        for($x=0;$x<=9;$x++){
            $inverso[$x]=$nMerge[$i];
            $i-=1;
        }
        for($x=0;$x<count($inverso);$x++){
            echo $inverso[$x]." ";
        }


	
	
?>
</BODY>
</HTML>