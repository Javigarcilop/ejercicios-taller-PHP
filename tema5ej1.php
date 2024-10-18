<!-- 1. Ejercicio con if, else, elseifpara Determinar Edad
Escribe un script en PHP que pida al usuario ingresar su edad. Luego, utiliza una
estructura if, elseif, else para imprimir un mensaje diferente según la edad:
"Eres menor de edad" (< 18), "Eres adulto joven" (18-35), "Eres adulto" (36-65),
"Eres alcalde" (> 65). -->


  <?php
    
    echo '<form method="post" action="tema5ej1.php">
    <label for="edad">Introduce la edad:</label><br>
    <input type="text" id="edad" name="edad"><br>
    <input type="submit" value="Submit">
    </form>';    

    if($_POST != null) {
        $edad = $_POST['edad'];
        echo 'Tienes ' . $edad . ' años' . '<br></br>'; 

        if($edad < 18){
          echo 'Eres menor de edad';

        }else if($edad <= 35){
          echo 'Eres adulto joven';

        }else if($edad == 36 or $edad <= 65){
          echo 'Eres adulto';

        }else if($edad > 65){
          echo 'Eres alcalde';
        }
    } 

  ?>


