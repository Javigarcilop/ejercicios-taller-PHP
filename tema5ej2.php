<!-- 2. Ejercicio con Bucledo-while
Escribe un script en PHP que use un bucle do-while para pedir al usuario que
ingrese un número positivo. Si el número ingresado es negativo, el script debe
continuar pidiendo un número hasta que se ingrese uno positivo. Luego, imprime el
número positivo ingresado. -->


<?php
  
   do{
        echo'
        <form action="tema5ej2.php">
        <p>Ingrese un número positivo: <input type="text" name="numero"></p>
        <p><input type="submit" value="Enviar"></p>
        </form>';

       echo $_REQUEST[numero];

   }while(numero < 0)

   

?>