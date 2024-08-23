<!--Use a for loop to total the contents of an integer array called numbers which
has five elements. Store the result in an integer called total. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
        <?php

            $numbers = array(10, 20, 30, 40, 50);


            $total = 0;


            for ($i = 0; $i < count($numbers); $i++) {
                $total += $numbers[$i];
            }


            echo "The total of the array elements is: " . $total;
        ?>
    
    
</body>
</html>