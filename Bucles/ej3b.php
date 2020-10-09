<HTML>
<HEAD> <TITLE> Ej3b </TITLE> </HEAD>
<BODY>
<h4>Lucas Fadavi Solanilla</h4>   	
<?php
  	
  	/*Uso un switch para darle pasar la cifra decimal correspodiente a la letra 
  	equivalente en hexadecimal empezando apartir del 10 */

    $i = "";
    $num="222";
    while ($num>=1) {
    	switch($num%16){
		case 10:
		$letra="A";
		break;
		case 11:
		$letra="B";
		break;
		case 12:
		$letra="C";
		break;
		case 13:
		$letra="D";
		break;
		case 14:
		$letra="E";
		break;
		case 15:
		$letra="F";
		break;
		default:
		$letra=($num%16);
    	}

	    $i=($letra).$i;
		$num=$num/16;
	}
      
	echo "El numero 222 en hexadecimal es: ".$i;

?>
</BODY>
</HTML>