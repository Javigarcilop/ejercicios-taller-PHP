<!-- 3. Ejercicio con Variables y Constantes Complejas
Declara una llamada constante GRAVITY con el valor 9.8. Luego, crea una función
que acepta el nombre de un planeta y, si el planeta es "Tierra", multiplica un valor de
masa ingresado por la gravedad (utilizando la constante). Usa variables para
almacenar el resultado e imprimir un mensaje con la fuerza de gravedad aplicada. -->

    <?php
        define("GRAVITY", 9.8);
        
        function multiplicadorMasa($nombrePlaneta) {
            if ($nombrePlaneta == "TIERRA") {
                $resultado = GRAVITY * 2;
                echo $resultado;
            } 
        }

        multiplicadorMasa("TIERRA");
    ?>  

