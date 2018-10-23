<html>
	<head>
	<style>
		fieldset.teclado,fieldset.fichero{height:55px;}
		input.ordenar{margin-top:1%}
	</style>
	</head>
	<body>
<form action="ordenacion.php" method="post">
  <fieldset>
    <legend>&nbsp; Formulario ordenación &nbsp;</legend>
    <fieldset>
    <fieldset class="teclado">
      <legend>&nbsp; Entrada por teclado &nbsp;</legend>
      <label for="fname">Separado por comas</label></br>
      <input type="text" id="fname" size="30" name="arreglo" placeholder="tu array..">
    </fieldset>
    </fieldset>	
    <fieldset>
    <legend> Método </legend>
      <label for="burbuja">Burbuja</label>
      <input type="radio" id="burbuja" name="radio" value="burbuja"></br>
      <label for="binaria">Búsqueda binaria</label>
      <input type="radio" id="binaria" name="radio" value="binaria"></br>
      <label for="directa">Inserción directa</label>
      <input type="radio" id="directa" name="radio" value="directa"></br>
      <label for="quick">Quicksort</label>
      <input type="radio" id="quick" name="radio" value="quick">
    </fieldset>  
    <input class="ordenar" name="submit" type="submit" value="Ordenar">
  </fieldset>
</form>
	</body>
	<?php
		if (isset($_POST['submit'])) {
			$cadena = $_POST['arreglo'];
			$array = explode(",", $cadena);
			$metodo = $_POST['radio'];
			if($metodo == "burbuja"){
				burbuja($array,count($array));
			}elseif($metodo == "binaria"){
				busquedaBinaria($array,count($array));
			}elseif($metodo == "directa"){
				insercionDirecta($array,count($array));
			}elseif ($metodo == "quick") {
				quick($array);
			}
		}
		// ------------------------------------------------------------------------------ MÉTODO BURBUJA ------------------------------------------------------------------------------

	
	function burbuja($array,$num_array){ // funcion burbuja que recibe dos parámetros (el array y la longitud del array)
		for($i=1;$i<$num_array;$i++){ // ciclo para ordenar por pasada
			for($j=0;$j<$num_array-$i;$j++){ // ciclo para comparar numero por posición
				if($array[$j]>$array[$j+1]){ // sentencia para comparar cual numero es mayor 
					$cambio=$array[$j+1];    // cambio de posición de los números
					$array[$j+1]=$array[$j]; 
					$array[$j]=$cambio;
				}
			}
		}

		for($i=0;$i<count($array);$i++){ // ciclo para recorrer el array ordenado y imprimir la cantidad de numeros que hay en el 
			echo $array[$i]." ";   // imprimir resultados ordenados
		}
	}
	// ------------------------------------------------------------------------------ MÉTODO BÚSQUEDA BINARIA ------------------------------------------------------------------------------
    function busquedaBinaria($array,$num_array){
            for($i=1;$i<$num_array;$i++){
                $arrayux = $array[$i];
                $izq=0;
                $der=$i-1;
 
                while($izq<=$der){
                    $m=(($izq+$der)/2);
                    if ($arrayux<$array[$m])
                        $der=$m-1;
                    else
                        $izq=$m+1;
                }				
                $j=$i-1;
 
                while($j>=$izq){
                    $array[$j+1]=$array[$j];
                    $j=$j-1;
                }				
                $array[$izq]=$arrayux;
            }
      
            for($i=0;$i<sizeof($array);$i++){
            	echo $array[$i]." ";
		}
    }
    // ------------------------------------------------------------------------------ MÉTODO INSERCIÓN DIRECTA ------------------------------------------------------------------------------
    function insercionDirecta($array,$num_array){ // funcion insercionDirecta que recibe dos parámetros (el array y la longitud del array)
        for ($i = 1; $i < $num_array; $i++){
                 $v = $array[$i];
                 $j = $i - 1;
                 while ($j >= 0 && $array[$j] > $v){ // ciclo que mueve la posición posterior de la array si esta es mas pequeña que la anterior
					$array[$j + 1] = $array[$j];
					$j--;
                 } 
                 $array[$j + 1] = $v;
        }
        for($i=0;$i<sizeof($array);$i++){
            echo $array[$i]." ";
		}
    }
    // ------------------------------------------------------------------------------ MÉTODO QUICKSORT ------------------------------------------------------------------------------
function quicksort($array, $izq, $der ){
	$i = $izq;
	$j = $der;
	$x = $array[ ($izq + $der) /2 ];
	do{
		while( ($array[$i] < $x) && ($j <= $der) ){
			$i++;
		}

		while( ($x < $array[$j]) && ($j > $izq) ){
			$j--;
		}

		if( $i <= $j ){
			$arrayux = $array[$i]; $array[$i] = $array[$j]; $array[$j] = $arrayux;
			$i++;  $j--;
		}
	}while( $i <= $j );

	if( $izq < $j )
		quicksort( $array, $izq, $j );
	if( $i < $der )
		quicksort( $array, $i, $der );

	return $array;
}

function quick($VectorA){

	$VectorB=quicksort($VectorA,0,sizeof($VectorA)-1);

	for($i=0;$i<sizeof($VectorB);$i++){
		echo $VectorB[$i]." ";
	}
}
	?>
</html>