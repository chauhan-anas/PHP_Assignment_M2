<!-- Get random values from array-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3 align="Center">
   <?php
    $array = array("Apple", "Banana", "Cherry", "Date", "Elderberry");


$numOfValues = 3;


$randomKeys = array_rand($array, $numOfValues);


$randomValues = array_map(function($key) use ($array) {
    return $array[$key];
}, $randomKeys);

echo "<u>Random Values</u> <br>|<br>|<br>\/<br>" . implode(", ", $randomValues);
?>

    </h3>
    
</body>
</html>

