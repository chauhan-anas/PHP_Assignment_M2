<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ternary operator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    
    <form action="#" method="POST">
        <label for="A">No1:</label>
        <input type="number" class="from control" name="max1">
        <label for="B">No2:</label>
        <input type="number" class="from control" name="max2">
        <label for="C">No3:</label>
        <input type="number" class="from control" name="max3">
        <input type="submit" name="save" value="submit" class="btn btn-primary">


    </form>
    <?php
    if(isset($_POST['save'])){
        $a=$_POST['max1'];
        $b=$_POST['max2'];
     $c=$_POST['max3'];
    $larg = ($a>$b) ? (($a>$c) ? $a : $c): (($b>$c) ? $b : $c);
     echo "<br> Largest Number is ". $larg;

    }
    
    ?>
    
</body>
</html>