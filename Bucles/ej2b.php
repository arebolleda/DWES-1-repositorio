<HTML>
<HEAD> <TITLE> Ej2b </TITLE> </HEAD>

<BODY>
<?php
  	
  /* La base del octal es 4 por eso vamos a divir entre 4*/

    $i = "";
    $num="48";
    while ($num >= 1) 
    {
        $i .= $num % 4;
        $num /= 4;
    }
    echo"El numero 48 en octal es: ";

    /*La funcion strrev me permite invertir el resultado almacenado en la variable $i*/
    echo strrev($i);

 
?>
</BODY>
</HTML>