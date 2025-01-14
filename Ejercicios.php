<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Ejercicio 1
        echo "<h2>Ejercicio 1</h2>";
        $dato1 = array("Sara", "Martinez", 23, "Barcelona");
        $counter = 1;
        foreach($dato1 as $value){
            echo "dato $counter °: $value <br>";
            $counter++;
        }

        echo "<br>";

        //Ejercicio 2
        echo "<h2>Ejercicio 2</h2>";
        $dato2 = array("Nombre" => "Sara", "Apellido" => "Martinez","Edad" => 23, "Ciudad" => "Barcelona");

        foreach($dato2 as $key => $value){
            echo "$key: $value <br>";
        }

        echo "<br>";

        //Ejercicio 3
        echo "<h2>Ejercicio 3</h2>";
        $dato2["Edad"] = 24;
        $counter2 = 1;
        foreach($dato2 as $value){
            echo "dato $counter2 °: $value <br>";
            $counter2++;
        }

        echo "<br>";

        //Ejercicio 4
        echo "<h2>Ejercicio 4</h2>";
        unset($dato2["Ciudad"]);
        var_dump($dato2);

        echo "<br><br>";

        //Ejercicio 5
        echo "<h2>Ejercicio 5</h2>";
        $letters = "a,b,c,d,e,f";  
        $array = explode(",", $letters);

        for ($i = count($array) - 1; $i >= 0; $i--) {
            echo "letter " . ($i + 1) . "°: " . $array[$i] . "<br>";
        }
      
        echo "<br>";

        //Ejercicio 6
        echo "<h2>Ejercicio 6</h2>";
        $notas = array("Miguel"=> 5, "Luis" => 7, "Marta" => 10, "Isabel" => 8, "Aitor" => 4, "Pepe" => 1);

        arsort($notas);

        echo "Notas ordenadas: <br>";

        foreach($notas as $nombre => $nota){
            echo "$nombre: $nota ";
        }

        echo "<br>";

        //Ejercicio 7
        echo "<h2>Ejercicio 7</h2>";
        $suma = 0;
        foreach($notas as $x => $y){
            $suma += $y;
            $media = $suma / count($notas);
        }
        $media_formatted = number_format($media, 2, '.', '');
        echo "Media de las notas: $media_formatted<br>";

        echo "Alumnos con nota por encima de la media:<br>";
        foreach($notas as $x => $y){
            if($y > $media){
                echo "$x<br>";
            }  
        }

        //Ejercicio 8
        echo "<h2>Ejercicio 8</h2>";

        $max = max($notas);
        echo "La nota más alta es $max y el mejor alumno es ";

        foreach($notas as $x => $y){
            if($max === $y){
                echo "$x";
            }  
        }

        echo "<br><br><br>";
        

    ?>
</body>
</html>