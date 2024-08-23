<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div align="center">
    <h1><u>Fibonacci series</U></h1>
        <?php
        $n=6;
        $a=0;
        $b=1;
        echo  "$a <br> $b";

        for($i=0; $i<$n; $i++){
            $c=$a+$b;
            echo "<br>"."$c";
            $a=$b;
            $b=$c;
        }

        ?>    
    </div>
    
    
</body>
</html>