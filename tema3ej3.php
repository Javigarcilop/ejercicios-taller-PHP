<!-- 3. Ejercicio con Variables y Constantes
Define una constante TASA_INTERES con el valor 0.05. Luego, escribe un script
que acepta una cantidad principal ingresada por el usuario y calcula el interés simple
después de un año, utilizando la constante. Imprima el resultado con un formato
adecuado. -->

    <?php
    define("TASA_INTERES", 0.05);

    echo '<form method="post" action="tema3ej3.php">
        <label for="capital">Introduce el capital:</label><br>
        <input type="text" id="capital" name="capital"><br>
        <input type="submit" value="Submit">
        </form>';    
    
        if($_POST != null) {
            $capital = $_POST['capital'];
            $interesAcumulado = $capital * TASA_INTERES * 1;
            echo $interesAcumulado;
        } 
    ?>