<HTML>
<HEAD><TITLE> EJ5B Tabla multiplicar con TD</TITLE></HEAD>
<BODY>
<h4>Lucas Fadavi Solanilla</h4>   	
	<br>	
	<?php

		$num="8";

		echo "<br>";
		echo " <table border=\"1\" align=\"center\">";

	
	  	echo "La tabla de multiplicar del numero ".$num." es:";	
		
		for ($i=1; $i<=10; $i++){

		echo "<tr>";
			
		echo "<td>".$num." x ".$i." = ".($num*$i)."</td>";

		  
		}

		echo " </tr>";
		echo"</table>"; 
		
	?>
</table>
</BODY>
</HTML>