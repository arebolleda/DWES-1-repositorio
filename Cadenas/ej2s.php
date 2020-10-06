<HTML>
<HEAD><TITLE> EJ2-Conversion IP Decimal a Binario </TITLE></HEAD>
<H1>Ejercicio 2 cadenas</H1>
<BODY>
<?php

/*Lucas Fadavi*/    
    
/* guardo la ip en una variable */
    
$ip="192.18.16.204";
    
echo "La ip en decimal es: $ip";     

 echo"<br>";
 echo"<br>";

/* uso las funciones decbin y ip2long */
/* a ip2long le tienes que pasar una ip y decbin
convierte un numero decimal en binario */ 

$ip1 = decbin(ip2long($ip));
    
    echo "La ip en binario es: $ip1";
?>

</BODY>
</HTML>
