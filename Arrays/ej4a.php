<HTML>
<HEAD> <TITLE> Arrays Unidimensionales </TITLE> </HEAD>
<meta charset="UTF-8">
<BODY>
	<h4>Lucas Fadavi Solanilla</h4> 
<?php
	
	
	$arrayBin = array();
	$arrayOct = array();
	$inverso = array();


	echo "<br>";
	echo " <table border=\"1\" align=\"center\">";

		echo "<tr>";
		echo "<th> Indice </th> <th> Binario </th> <th> Octal </th>";
	    echo "</tr>";															
														
		for ($x=0;$x<=20;$x++){
				$arrayBin[$x]=decbin($x);
				$arrayOct[$x]=decoct($x);
				
				
	echo "<tr> <td>".$x."</td><td>".$arrayBin[$x]."</td><td>".$arrayOct[$x]."</td>";
	}

	echo " </tr>";
	echo"</table>";
	echo "<br>";

	echo "El orden inverso: ";

		$num=0;
	
        for($x=0;$x<=20;$x++){
            $inverso[$x]=$arrayBin[$x];
            
        }
        for($x=0;$x<count($inverso)-$num;$x++){
            echo $inverso[$x]."/";
        }

	

	
?>
</BODY>
</HTML>