<!-- 3. Ejercicio con Operador Ternario Anidado
Defina una variable llamada $calificacion que contenga un valor numérico.
Utilice un operador ternario anidado para determinar si la calificación es
"Sobresaliente" (90-100), "Buena" (70-89), o "Necesita mejorar" (menor a 70).
Imprime el resultado. -->

<?php
    echo "Ejecutando el script...<br>";
        $calificacion = 80; 

        $resultado = ($calificacion >= 90 && $calificacion <= 100) ? 'Sobresaliente' :
                    ($calificacion >= 70 && $calificacion < 90) ? 'Buena' : 'Regular'; 

        echo $resultado; 
?>

