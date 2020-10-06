<HTML>
<HEAD><TITLE> EJ3-Conversion IP Decimal a Binario </TITLE></HEAD>
<H1>Ejercicio 3 cadenas</H1>
<BODY>
<?php

/*Lucas Fadavi*/    
    
/* guardo la ip en una variable */
    
$ip="192.168.16.100";

echo "La ip en decimal es: $ip";     
echo"<br>";
echo"<br>";

/*ip entera a binario*/
$ip1 = decbin(ip2long($ip));
echo "La ip en binario es: $ip1","<br>";
echo"<br>";

/*Vamos a obtener el valor de la mascara, que es la tercera cadena de las IPs*/

$mask=(bindec(substr($ip1,16,8)));
echo "La mascara es: $mask";
echo"<br>";

/*Selecciono los 16 primeros digitos de la ip, y los relleno con 0*/

echo "La direccion de red es ";

$var1=substr($ip1,0,$mask);
$dred=str_pad($var1,32,"0");
echo (bindec(substr($dred,0,8))),".",
	 (bindec(substr($dred,8,8))),".",
	 (bindec(substr($dred,16,8))),".",
	 (bindec(substr($dred,24,8)));

echo"<br>";

/*Selecciono los 16 primeros digitos de la ip, y relleno con 1*/
echo "La direccion de broadcast es ";
$var1=substr($ip1,0,$mask);
$broad=str_pad($var1,32,"1");

/*El substr coge desde la posicion inicial que le asignes, con longitud 8 porque se lo hemos aisgnado asi*/

echo (bindec(substr($broad,0,8))),".",
	 (bindec(substr($broad,8,8))),".",
	 (bindec(substr($broad,16,8))),".",
	 (bindec(substr($broad,24,8)));
	 
echo"<br>";

/*Ssumamos 1 a la direccion de red y restamos 1 a la direccion de broadcast*/

echo "El rango de IPs va desde ";

echo (bindec(substr($dred,0,8))),".",
	 (bindec(substr($dred,8,8))),".",
	 (bindec(substr($dred,16,8))),".",
	 (bindec(substr($dred,24,8))+1);
echo " hasta ";
echo (bindec(substr($broad,0,8))),".",
	 (bindec(substr($broad,8,8))),".",
	 (bindec(substr($broad,16,8))),".",
	 (bindec(substr($broad,24,8))-1);

?>

</BODY>
</HTML>
