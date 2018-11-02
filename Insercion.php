<?php
// ------------------------------------------------------------------------------ MÉTODO INSERCIÓN DIRECTA ------------------------------------------------------------------------------
function insercionDirecta($array,$num_array){ // funcion insercionDirecta que recibe dos parámetros (el array y la longitud del array)
    for ($i = 1; $i < $num_array; $i++){ 
        $posicion = $array[$i];
        $j = $i - 1;
        while ($j >= 0 && $array[$j] > $posicion){ // ciclo que mueve la posición posterior de la array si esta es mas peque�a que la anterior
            $array[$j + 1] = $array[$j];
            $j--;
        } 
        $array[$j + 1] = $posicion;
    }
    for($i=0;$i<sizeof($array);$i++){
        echo $array[$i]." ";
    }
}
?>