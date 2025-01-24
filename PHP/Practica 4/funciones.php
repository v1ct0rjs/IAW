<?php

	//ejemplo 1
	function saludar()
	{
		echo "Hola";
	}

	saludar();

	//ejemplo 2 factorial

	<?php
   function factorial($numero){
   	
	if($numero==0) return 1;

   	return ($numero*factorial($numero-1));
   }
   echo factorial(15);
   ?>

   //
   

	//1.- Crea una función para despedirte


    //ejemplo 2
	echo "<br>";
	function suma ($sumando1, $sumando2)
	{
		 return $sumando1 + $sumando2;
	}
		//llamadas
		echo suma( 2,3);
		echo "<br>";
		$valor1=2;
		$valor2=5;
		echo suma($valor1,$valor2);

	// crea una función que multiplique 2 valores

		

	//ejemplo 3

	function encender($valor){
		if($valor == 1){
			echo "el móvil esta encendido"
		}
	}
	
	encender(1);
	//crea una función que pida un pin para el movil 1234 si es correcto mostrará un mensaje de ok si no mostrará un mensaje de error


	//Ejemplo 4/
	function Cuadrado($numero) {
              $calculo = $numero * $numero;
              return $calculo;
}
// crea una función que muestre la serie de fibonnaci



echo "<br>";

//Ejemplo IVA preestablecido
$pvp=100;
$iva=21;
//Llamo a la funcion
echo total_iva($pvp,$iva);
// declaro la funcion
function total_iva($precio,$iva=14){
	return $precio+$precio*$iva/100;
}

//Crea una función que calcule un precio con descuento preestablecido, no modifiques el valor del descuento al llamar a la función


//Ejemplo 
function suma(int $sumando1, int $sumando2): int{
		 return ($sumando1 + $sumando2);
	}
//Crea una función que calcule el precio final de un producto (float) con un IVA (entero) precio (float) descuento (entero) poniendo el tipo que trecibe y que tiene que devolver


//Ejemplo
//Paso de valores por referencia y permitir que la funcion modifique el valor
	$numero1=1;
	$numero2=2;
	function producto(&$numero1,&$numero2)
		{
			$numero1=$numero1+2;
			$numero2=$numero2+3;
			return $numero1*$numero2;
		}
	echo $numero1;
	echo $numero2;
	echo producto ($numero1,$numero2);
	echo $numero1;
	echo $numero2;
	
	//Crea una variable de texto, enviasela a una función pasada por referencia, desde dentro de la función modifica la variable.
	
	


?>


