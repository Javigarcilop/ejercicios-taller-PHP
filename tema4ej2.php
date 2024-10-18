<!-- 2. Ejercicio con Operadores de Comparación y Lógicos
Declara tres variables: $a, $by $c, con valores numéricos diferentes. Utilice
operadores de comparación y lógicos para verificar si $a es mayor que $b y si 
$c es menor que $a. Imprima un mensaje que indique si ambas condiciones son
verdaderas o si alguna es falsa.  -->


    <?php    
        $a = 15; 
        $b = 10; 
        $c = 5;  
   
        $SiAmayorQueB = $a > $b; 
        $SiCmenorQueA = $c < $a; 
      
        if ($SiAmayorQueB && $SiCmenorQueA) {   
            echo "La variable <b>a</b> (" . $a . ") es mayor que <b>b</b> (" . $b . ")";
            echo "<br></br>";
            echo "La variable <b>c</b> (" . $c . ") es menor que <b>a</b> (" . $a . ")";
        } else {
            echo "Una de las condiciones es falsa.";
        }
    ?>
