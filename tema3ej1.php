<!-- 1. Ejercicio con Tipos y Conversión
Declara una variable de tipo cadena que contenga un número ( "25"). Luego,
convierte esta variable a un tipo de dato entero y realiza una suma con otro número.
Imprime el resultado antes y después de la conversión utilizando var_dump()para
ver el tipo de dato. -->

    <?php
       $varTipoCadena = "25";
       $varTipoEntero = intval($varTipoCadena);

       var_dump($varTipoCadena);
       echo '<br></br>';
       var_dump($varTipoEntero);

       $varTipoEntero = $varTipoEntero + 2;
       echo '<br></br>';
       echo $varTipoEntero;     
    ?>