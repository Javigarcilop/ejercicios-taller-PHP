<!-- 2. Ejercicio con Tipos Compuestos (Arrays Multidimensionales)
Crea un array multidimensional llamado $alumnosque contiene información de al
menos tres estudiantes. Cada estudiante debe tener un nombre, una edad y una
lista de materias con sus respectivas calificaciones. Registre la matriz para mostrar
el nombre de cada alumno y la calificación promedio de sus materias. -->

    <?php
        $alumnos = [
            ["nombre" => "Carlos", "edad" => 25, "materia1" => 8.4, "materia2" => 7.25, "materia3" => 6.32],
            ["nombre" => "Ana", "edad" => 27, "materia1" => 8, "materia2" => 10, "materia3" => 9.4],
            ["nombre" => "Juan", "edad" => 30, "materia1" => 4.2, "materia2" => 7, "materia3" => 5.7]
        ];

        echo $alumnos[0]["nombre"] . ' ' .  $alumnos[0]["materia1"] . ' ' . $alumnos[0]["materia2"] . ' ' . $alumnos[0]["materia3"];
        echo '<br></br>';
        echo $alumnos[1]["nombre"] . ' ' .  $alumnos[1]["materia1"] . ' ' . $alumnos[1]["materia2"] . ' ' . $alumnos[1]["materia3"];
        echo '<br></br>';
        echo $alumnos[2]["nombre"] . ' ' .  $alumnos[2]["materia1"] . ' ' . $alumnos[2]["materia2"] . ' ' . $alumnos[2]["materia3"];
        echo '<br></br>';
    ?>