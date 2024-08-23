<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odd Even</title>
</head>
<body>
    <h2>How can you tell if a number is even or odd without using any Condition orloop?</h2>
    <h3>:- I use Ternary Operator to Find odd even </h3>
    
    <h1 align="Center" >
        <form action="#" method="post">
            <label for="Odd Even">Enter Number</label><br>
            <input type="text" name="oddeven" id="oddeven"><br>
            <input type="Submit" name="Submit" id="Submit">

        </form>
        <?php
        $a = $_POST['oddeven'];

        $result = $a % 2 ? "Odd" : "Even" ;

        echo "<br>".$a." is ".$result;
        ?>
    </h1>
</body>
</html>