<?php  
	include("operaciones.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">	
	<title>Ejemplos basicos con PHPS</title>	
</head>
<body>
	<h2>Tipos de Datos</h2>
	<h2>Enteros</h2>
	<?php
		$a = 12345; #Numero entero positivo
		$b = -12345; //Numero entero negativo
		$c = 0123; /* Numero entero base octal */
		$d = 0x12; // Numero en hexadecimal
	?>
	<p>El valor de la variable a es: <?php print($a); ?></p>
	<p>El valor de la variable b es: <?php print($b); ?></p>
	<p>El valor de la variable c es: <?php print($c); ?></p>
	<p>El valor de la variable d es: <?php print($d); ?></p>
	<hr>
	<h2>Valores con decimales</h2>
	<?php
		$a = 1.234; 
		$b = -1.234;
		$c = 1.2e3; 		
	?>
	<p>El valor de la variable a es: <?php print($a); ?></p>
	<p>El valor de la variable b es: <?php print($b); ?></p>
	<p>El valor de la variable c es: <?php print($c); ?></p>
	<hr>
	<h2>Caracteres especiales String</h2>
	<?php
		//print("Hola Mundo \n Esta es otra linea de texto");		
		print("Hola Mundo <br> Esta es otra linea de texto <br>");
		//print("\t Esta linea de texto tiene como margen izquierdo un tabulador");
		print("<span style='margin-left: 30px;'>Esta linea de texto tiene como margen izquierdo un tabulador</span><br>");
		print("El simbolo de pesos con codigo especial php \$ <br>");
		print("El simbolo de diagonal con codigo especial php \\ <br>");
		print("El simbolo de comillas dobles con codigo especial php \" <br>");
	?>
	<hr>
	<h2>String</h2>
	<?php
		$x = "Juan";
		$s = "Hola $x";
		$t = 'Hola $x';

		print("El contenido de la variable x es [$x]");
		print("<br>");
		print("El contenido de la variable s es [$s]");
		print("<br>");
		print("El contenido de la variable t es [$t]");		
	?>
	<hr>
	<h2>Concatenacion de Strings</h2>
	<?php
		$x = "Hola";
		$y = "Mundo";
		$s = $x.$y;
		$t = $x . " ". $y . ", esta es otra parte de la cadena";

		print("El contenido de la variable x es [$x]");
		print("<br>");
		print("El contenido de la variable y es [$y]");
		print("<br>");
		print("El contenido de la variable s es [$s]");
		print("<br>");
		print("El contenido de la variable t es [$t]");		
	?>
	<hr>
	<h2>Arrays (Vectores)</h2>
	<?php
		$dia[0] = "Domingo";
		$dia[1] = "Lunes";
		$dia[2] = "Martes";
		$dia[3] = "Miercoles";
		$dia[4] = "Jueves";
		$dia[5] = "Viernes";
		$dia[6] = "Sabado";

		for($i=0; $i<7; $i++)
		{
			print("El contenido del posicion [$i] es ==> " . $dia[$i] . "<br>");
		}
		print("<br>");
		print("<br>");
		print("<br>");
		for($i=0; $i<=10; $i++)
		{
			$Numeros[] = $i;
		}

		for($i=0; $i<=10; $i++)
		{
			print("El contenido del posicion [$i] del vector Numeros es ==> " . $Numeros[$i] . "<br>");
		}
	?>
	<hr>
	<h2>Matrices</h2>
	<?php
		$matriz[0][0] = 'A';
		$matriz[0][1] = 'B';
		$matriz[1][0] = 'C';
		$matriz[1][1] = 'D';

		for($i=0; $i<2; $i++)
		{
			for($j=0; $j<2; $j++)
			{
				print("El contenido de la matriz en la posicion [$i][$j] es ==> " . $matriz[$i][$j]. "<br>");
			}
		}
	?>
	<hr>
	<h2>Constantes</h2>
	<?php
		define("PI", 3.14151695);

		print("El contenido de la constante PI es [" . PI . "]<br>");
	?>
	<hr>
	<h2>Operadores</h2>
	<?php
		$a = 14;
		$b = 3;
		$c = 0;

		$c = $a + $b;
		print("El resultado de sumar la variable a[$a] + b[$b] es [$c]");
		print("<br>");

		$c = $a - $b;
		print("El resultado de restar la variable a[$a] - b[$b] es [$c]");
		print("<br>");

		$c = $a * $b;
		print("El resultado de multiplicar la variable a[$a] * b[$b] es [$c]");
		print("<br>");

		$c = $a / $b;
		print("El resultado de dividir la variable a[$a] / b[$b] es [$c]");
		print("<br>");

		$c = $a % $b;
		print("El resultado del modulo de la variable a[$a] % b[$b] es [$c]");
		print("<br>");

		$c = $a++;
		print("El pos-incremento de la variable a[$a] es [$c]");
		print("<br>");

		$c = ++$a;
		print("El pre-incremento de la variable a[$a] es [$c]");
		print("<br>");

		$c = $a--;
		print("El pos-decremento de la variable a[$a] es [$c]");
		print("<br>");

		$c = --$a;
		print("El pre-decremento de la variable a[$a] es [$c]");
		print("<br>");
	?>
	<hr>
	<h2>Asignaciones</h2>
	<?php
		$a = 100;
		print("El contenido de la variable a es [$a]");
		print("<br>");

		$b = 500;
		$a = $b;
		print("El contenido de la variable a es [$a]");
		print("<br>");
		print("El contenido de la variable b es [$b]");
		print("<br>");
		
		$a = ($b = 1000);
		print("El contenido de la variable a es [$a]");
		print("<br>");
		print("El contenido de la variable b es [$b]");
		print("<br>");

		$a += 500;
		print("El contenido de la variable a es [$a]");
		print("<br>");

		$a -= 100;
		print("El contenido de la variable a es [$a]");
		print("<br>");

		$a .= " Pesos";
		print("El contenido de la variable a es [$a]");
		print("<br>");
	?>
	<hr>
	<h2>Estructuras de Control</h2>
	<h2>IF</h2>
	<?php
		$a = 20;
		$b = 30;
		$c = 20;

		if($a < $b)
			print("El valor de a[$a] es menor que el valor de b[$b]");

		print("<br>");

		if($b < $c)
		{
			print("El valor de b[$b] es menor que el valor de c[$c]");
		}
		else 
		{
			print("El valor de b[$b] es mayor que el valor de c[$c]");
		}

		print("<br>");

		if($a < $c)
		{
			print("El valor de a[$a] es menor que el valor de c[$c]");
		}
		elseif($a > $c) 
		{
			print("El valor de a[$a] es mayor que el valor de c[$c]");
		}
		elseif($a == $c) 
		{
			print("El valor de a[$a] es igual que el valor de c[$c]");
		}
	?>
	<hr>	
	<h2>WHILE</h2>
	<?php
		$i = 0;

		print("El siguiente ciclo iniciara en 0 y terminara en 10 usando un WHILE <br>");

		while($i<=10)
		{
			print("Iteracion [$i]");
			print("<br>");
			$i++;
		}
	?>
	<hr>	
	<h2>Do - WHILE</h2>
	<?php
		$i = 0;

		print("El siguiente ciclo iniciara en 0 y terminara en 10 usando un DO - WHILE <br>");

		do
		{
			print("Iteracion [$i]");
			print("<br>");
			$i++;
		}while($i<=10)
	?>
	<hr>	
	<h2>FOR</h2>
	<?php
		
		print("El siguiente ciclo iniciara en 0 y terminara en 10 usando un FOR <br>");

		for($i=0; $i<=10; $i++)		
		{
			print("Iteracion [$i]");
			print("<br>");			
		}
	?>
	<hr>	
	<h2>SWITCH</h2>
	<?php
		$Operador = '/';

		switch($Operador)
		{
			case '+':
					print("La operacion seleccionada es una SUMA");
					break;
			case '-':
					print("La operacion seleccionada es una RESTA");
					break;
			case '*':
					print("La operacion seleccionada es una MULTIPLICACION");
					break;
			default:
					print("La operacion NO EXISTE");
					break;
		}
	?>
	<hr>	
	<h2>Funciones</h2>
	<?php
		$resultado = suma(5,5);
		print("El resultado de la suma de 5 + 5 llamando a la funcion SUMA es [$resultado]");
		print("<br>");

		$resultado = resta(5,2);
		print("El resultado de la resta de 5 - 2 llamando a la funcion RESTA es [$resultado]");
		print("<br>");

		$resultado = multiplica(5,5);
		print("El resultado de la multiplicacion de 5 * 5 llamando a la funcion MULTIPLICA es [$resultado]");
		print("<br>");

		$resultado = divide(5,2);
		print("El resultado de la division de 5 / 2 llamando a la funcion DIVIDE es [$resultado]");
		print("<br>");

	?>
	
</body>
</html>
 