<!-- 2. Ejercicio con Arrays Multidimensionales
Define un array multidimensional que contiene la información de tres productos:
nombre, precio, y cantidad_en_stock. Usa un bucle foreach para calcular el
valor total de cada producto ( precio * cantidad_en_stock) y muestra los
resultados. -->


            <?php   
            $productos = [
                ["nombre" => "IphoneX", "precio" => 900.99, "cantidad_en_stock" => 25],
                ["nombre" => "Galaxy A54 5G", "precio" => 430.45, "cantidad_en_stock" => 45],
                ["nombre" => "Xiaomi 12", "precio" => 110.32, "cantidad_en_stock" => 12]
            ];

            foreach ($productos as $producto) {
                $nombre = $producto["nombre"];
                $precio = $producto["precio"];
                $cantidad = $producto["cantidad_en_stock"];
 
                $valor = $precio * $cantidad;
                echo "$nombre cuesta $$precio, en stock hay $cantidad y su valor total es de $$valor.<br><br>";
            }
            ?>


