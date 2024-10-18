<!-- 3. Ejercicio con switch para Menús
Crea un menú de opciones con switch, donde el usuario pueda elegir entre
"Sumar", "Restar", "Multiplicar" y "Dividir". Solicita dos números al usuario y realiza la
operación seleccionada. Si el usuario selecciona una opción inválida, se muestra un
mensaje de error. -->

    <?php

    echo '
        <form method="post" action="tema5ej3.php">
            <label for="n1">Ingresa el primer número:</label>
            <input type="number" id="n1" name="n1" required><br><br>

            <label for="n2">Ingresa el segundo número:</label>
            <input type="number" id="n2" name="n2" required><br><br>

            <label for="operacion">Selecciona una operación:</label>
            <input type="text" id="operacion" name="operacion" required><br><br>
            <input type="submit" value="Enviar">
        </form';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $operacion = $_POST['operacion'];

        switch ($operacion) {
            case 'sumar':
                $resultado = $n1 + $n2;
                echo '<br></br>';
                echo "<p>El resultado de sumar $n1 + $n2 es: $resultado</p>";
                break;
            case 'restar':
                $resultado = $n1 - $n2;
                echo '<br></br>';
                echo "<p>El resultado de restar $n1 - $n2 es: $resultado</p>";
                break;
            case 'multiplicar':
                $resultado = $n1 * $n2;
                echo '<br></br>';
                echo "<p>El resultado de multiplicar $n1 * $n2 es: $resultado</p>";
                break;
            case 'dividir':
                if ($num2 != 0) {
                    $resultado = $n1 / $n2;
                    echo '<br></br>';
                    echo "<p>El resultado de dividir $n1 entre $n2 es: $resultado</p>";
                } else {
                    echo '<br></br>';
                    echo "<p>Error: No se puede dividir entre cero.</p>";
                }
                break;
            default:
                echo '<br></br>';
                echo "<p>Opción inválida.</p>";
        }
    }
    ?>