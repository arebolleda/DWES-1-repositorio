<HTML>
<HEAD> <TITLE> Ej1b </TITLE> </HEAD>

<BODY>
<?php
  
    /*Uso la funcion floor para eliminar los ceros sobrantes de la operacion*/
    /*Tambien podria expresar lo siguiente ($num >= 1) y asi no tendria que usar
    la funcion floor */

    $i = "";
    $num="168";
    while (floor($num) > 0) 
    {
        $i .= $num % 2;
        $num /= 2;
    }

    /*La funcion strrev me permite invertir el resultado almacenado en la variable $i*/

    echo"El numero 168 en binario es: ";
    echo strrev($i);

 
?>
</BODY>
</HTML>
