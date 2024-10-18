<!-- 1. Ejercicio con Arrays y Recorrido Completo
Crea un array llamado $numerosque contiene los números del 1 al 10. Luego, usa
un bucle foreach para recorrer el array y multiplicar cada número por 2. Almacena
los resultados en un nuevo array y muestra ambos arrays. -->

      

    <?php   
            $numeros = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
            foreach ($numeros as $numero) {
                echo $numero * 2;
            }
            $numeros2 = $numeros();
            foreach ($numeros as $numero) {
                $numeros2[] = $numero;
            }
            echo $numeros2;
    ?>  
