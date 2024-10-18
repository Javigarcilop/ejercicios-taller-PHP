<!-- 2. Ejercicio de Comentarios y Buenas Prácticas
Escribe un script en PHP que contenga una función de llamada
calcularAreaRectangulo($ancho, $alto). Documente cada parte del guión
concomentarios detallados, incluyendo la explicación de la función, los parámetros y
cómo se realiza la operación. Usa comentarios multilínea para explicar el propósito
general delscript y comentarios de una sola línea para detallar las operaciones. -->

    <?php
    /** Función para calcular el área de un rectángulo.
     *  Esta función recibe la base y la altura de un rectángulo como parámetros 
     *  y devuelve el área, que se calcula multiplicando la base por la altura. 
     *  @param float $base La base del rectángulo. 
     *  @param float $alto La altura del rectángulo. 
     *  @return float El área del rectángulo. */
    
        function calcularAreaRectangulo($base, $alto) { 
            $area = $base * $alto //Fórmula para realizar el calculo.
        }
      
        calcularAreaRectangulo(9,5); //Llamada a función.
    ?>
