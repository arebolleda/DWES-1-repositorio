<HTML>
<HEAD><TITLE> EJ4B Tabla Multiplicar</TITLE></HEAD>
<BODY>
<h4>Lucas Fadavi Solanilla</h4>   
<?php
		
	/* Utilizo un bucle for con incremento positivo de +1 */
		
	$num="8";

	echo "La tabla de multiplicar del numero ".$num. " es: ";

	echo "<br>";
	
	for ($i=1; $i<=10; $i++){


	 echo "".$num." x ".$i." = ".($num*$i)."<br />";
}
?>
</BODY>
</HTML>