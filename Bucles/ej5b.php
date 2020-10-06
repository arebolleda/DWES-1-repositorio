<HTML>
<HEAD><TITLE> EJ5B Tabla multiplicar con TD</TITLE></HEAD>
<BODY>
	<br>	
	 <table border="1" align="center">
	<?php

		$num="8";
		
		for ($i=1; $i<=10; $i++){

		echo "<tr>"."<td>";
		
		echo "La tabla de multiplicar del numero " .$num." es:"." x ".$i." = ".($num*$i)."<br />";
		  		
		  
		}
		echo "</td>"."</tr>"; 
		
	?>
</table>
</BODY>
</HTML>