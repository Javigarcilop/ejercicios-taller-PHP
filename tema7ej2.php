<!-- 2. Ejercicio con Función con Argumentos Predeterminados y Retorno
Crea una función llamada convertirTemperatura()que acepte dos
argumentos: una temperatura y una escala ( "C"o "F"). Por defecto, convierte de
Celsius a Fahrenheit. La función debe devolver la temperatura convertida. Utilice la
fórmula: (C * 9/5) + 32. -->

        <?php
            function convertirTemperatura($temperatura, $escala) {
                if($escala == 'C'){
                    $gradosF = ($temperatura  * 9 / 5) + 32;
                    echo $temperatura . ' grados Celsius son ' . $gradosF . ' grados Fahrenheit' . "\n";

                }else if($escala == 'F'){
                    $gradosC = 5 / 9 * ($temperatura - 32);
                    echo $temperatura . ' grados Fahrenheit son ' . $gradosC . ' grados Celsius' . "\n";
                }          
            }
              convertirTemperatura(30, 'C');
        ?>
