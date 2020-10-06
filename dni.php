<HTML>
<HEAD> <TITLE> Calcular letra DNI </TITLE> </HEAD>

<BODY>
<?php



  /* Obtiene letra del NIF a partir del DNI */

  echo "Primera forma: <br>";


  $dni="50622272";

  echo "Tu DNI es ".$dni." y ";
  switch ($dni%23) {
  case 0:
    print "La letra de tu NIF es : T <br>";
    break;
  case 1:
    print "La letra de tu NIF es : R <br>";
    break;
  case 2:
    print "La letra de tu NIF es : W <br>";
    break;
  case 3:
    print "La letra de tu NIF es : A <br>";
    break;
  case 4:
    print "La letra de tu NIF es : G <br>";
    break;
  case 5:
    print "La letra de tu NIF es : M <br>";
    break;
  case 6:
    print "La letra de tu NIF es : Y <br>";
    break;
  case 7:
    print "La letra de tu NIF es : F <br>";
    break;
  case 8:
    print "La letra de tu NIF es : P <br>";
    break;
  case 9:
    print "La letra de tu NIF es : D <br>";
    break;
  case 10:
    print "La letra de tu NIF es : X <br>";
    break;
  case 11:
    print "La letra de tu NIF es : B <br>";
    break;
  case 12:
    print "La letra de tu NIF es : N <br>";
    break;
  case 13:
    print "La letra de tu NIF es : J <br>";
    break;
  case 14:
    print "La letra de tu NIF es : Z <br>";
    break;
  case 15:
    print "La letra de tu NIF es : S <br>";
    break;
  case 16:
    print "La letra de tu NIF es : Q <br>";
    break;
  case 17:
    print "La letra de tu NIF es : V <br>";
    break;
  case 18:
    print "La letra de tu NIF es : H <br>";
    break;
  case 19:
    print "La letra de tu NIF es : L <br>";
    break;
  case 20:
    print "La letra de tu NIF es : C <br>";
    break;
  case 21:
    print "La letra de tu NIF es : K <br>";
    break;
  case 22:
    print "La letra de tu NIF es : E <br>";
    break;
}

  echo "<br>";

  echo "Segunda forma: <br>";


  /* Bonus */

  $dni1=(int)($dni / 23);
  echo "Resultado de dividir el dni entre 23 operando con numeros enteros es: $dni1<br>";
  $dni1 *= 23;
  echo "Luego multiplico el resultado por 23 es: $dni1<br>";
  $dni1= $dni - $dni1;
  echo "Resto al dni el valor de: $dni1<br>";
  $letras= "TRWAGMYFPDXBNJZSQVHLCKEO";
  $letraNif= substr ($letras, $dni1,1);
  
   echo "La letra de tu NIF es : $letraNif<br>";

  
?>
</BODY>
</HTML>
