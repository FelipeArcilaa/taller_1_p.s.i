<!--creacion de la estructura html, punto 5 del taller-->
<html>
    <head>
        <title>Taller 1</title>
    </head>
    <body>
    <!--creacion y asignacion de variables, punto 6 del taller-->
        <?php
            $var1 = "texto";
            $var2 = 3;
            $var3 = true;
            $var4 = 3.9;
            $var5 = "12/03/2019";
            
        //imprimir la variable de texto en h1, punto 7 del taller
            echo "<h1>$var1</h1>";     
        
        //imprimir cualquier variable con h2, punto 8 del taller
            echo "<h2>$var4</h2>";
       ?>

    <!--crear una nueva etiqueta php, crear un array e imprimirlo con for, punto 9 del taller-->
        <?php
            
            $var6 = [
                10,
                12,
                8,
                63,
                11
            ];
            for($i=0; $i<5; $i++){
                echo "pocicion " .$i. " = " .$var6[$i]."<br>";
            }
        ?>
    
        
    </body>
</html>
