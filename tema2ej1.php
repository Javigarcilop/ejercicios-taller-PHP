<!-- 1. Ejercicio con echo y HTML Embebido
Crea un archivo PHP que imprime un formulario HTML usando la función echo. El
formulario debe contener un campo de texto para el nombre y un botón de envío.
Cuando el formulario se envía, muestra el nombre ingresado utilizando la misma
página PHP. -->

  <?php   
        echo '<form method="post" action="tema2ej1.php">
        <label for="nombre">First name:</label><br>
        <input type="text" id="nombre" name="nombre"><br>
        <input type="submit" value="Submit"></form>';    

        if($_POST != null) {
            $nombre = $_POST['nombre'];
            echo $nombre;
        }
  ?>  