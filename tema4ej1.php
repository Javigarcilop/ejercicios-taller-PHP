<!-- 1. Ejercicio con Operadores de Asignación y Condicionales
Declara una variable con un valor inicial de 100. Usa operadores de asignación 
(+=, -=, etc.) para modificar su valor en diferentes etapas y luego usa una
condicional ifpara determinar si el valor final es mayor o menor que 100. -->

    <?php
        $valor = 100;

        $valor += 30; 
        $valor -= 10;
        $valor *= 2;  
        $valor /= 2;  

        if ($valor > 100) {
            echo "El valor es mayor que 100: " . $valor;
        } elseif ($valor < 100) {
            echo "El valor es menor que 100: " . $valor;
        } else {
            echo "El valor es igual a 100: " . $valor;
        }
    ?>
