<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Armstrong Number</title>
</head>
<body>
    <form action="#" method="post">
    <h2 align="Center"><b><u>Armstrong Number</u></b></h2>
    <label><b>Enter Number to find Armstrong</b></label><br>
    <input type="text" name="arm" id="arm"><br>
    <input type="Submit" value="Submit" name="submit" >
    </form>
    <?php

$num = $_POST['arm'];
$sum = 0;
$temp = $num;


$numDigits = floor(log10($num) + 1);

while ($temp > 0) {
    $digit = $temp % 10;
    $sum += pow($digit, $numDigits);
    $temp = floor($temp / 10);
}

if ($sum == $num) {
    echo $num . "<br> is an Armstrong number.";
} else {
    echo $num . "<br> is not an Armstrong number.";
}

?>

</body>
</html>