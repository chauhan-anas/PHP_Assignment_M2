$a = '1';
$b = &$a;
$b = "2$b";
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?PHP
        $a = '1';
        $b = &$a;
        $b = "2$b";
        
    ?>
    <h3>
:- $a and $b will be "21". This is because $b is a reference to $a, so when $b is updated to "2$b", $a is also updated to "21".
    </h3>
    
</body>
</html>