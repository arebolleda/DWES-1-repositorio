<HTML>
<HEAD><TITLE> EJ1-Conversion IP Decimal a Binario </TITLE></HEAD>
<H1>Ejercicio 1 cadenas</H1>
<BODY>
    
<?php

/*Lucas Fadavi*/  
    
$ip="192.18.16.204";
$findme=".";

/* Me gusta comerme la cabeza innecesariamente asi que hago una serie de pruebas
como remplazar puntos por espacios y viceversa. Tambien pruebo la funcion strpos
para ver su funcionamiento */

$pos = strpos($ip, $findme);
$ip1 = str_replace(".", " ", $ip);

/*prueba 1.0

$ip2 = str_replace(" ", "", $ip1);*/



echo "La ip en numeros enteros es: $ip";    
    
echo"<br>";
echo"<br>";

/*prueba 1.1

echo "la posicion del . es: $pos";    

*/

/* muestro la ip sin puntos */

echo "Resultado de la ip sin puntos: $ip1";  

echo"<br>";
echo"<br>";


/* Divido la ip en subcadenas con substr/strpos y luego mediante sprintf y el formato del 
binario para realizar la conversion del numero entero al binario muestro con echo los fragmentos de la ip en binario */

	echo "Numero que me tiene que mostrar al pasar la ip a binario 11000000.00010010.00010000.11001100";

    echo"<br>";
	echo"<br>";

	echo "Este es el resultado de la conversion de la ip en enteros a binario: ";


	echo sprintf('%08b',  $ip1); 

	$ip1=substr($ip1,strpos($ip1," ")+1);
    
    echo sprintf('%08b',  $ip1);

    $ip1=substr($ip1,strpos($ip1," ")+1);

    echo sprintf('%08b',  $ip1);

    $ip1=substr($ip1,strpos($ip1," ")+1);

    echo sprintf('%08b',  $ip1);

     echo"<br>";
     echo"<br>";

     
?>          
    
</BODY>
</HTML>