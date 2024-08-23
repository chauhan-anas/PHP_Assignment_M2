<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Result</title>
</head>
<body>
    <form action="#" method="post">
    <h2 align="Center"><u>Enter Student Marks</u></h2>
    <label>Physics :</label>
    <input type="text" name="Sub1" id="Sub1"><br>
    <label>Chemistry :</label>
    <input type="text" name="Sub2" id="Sub2"><br>
    <label>Biology :</label>
    <input type="text" name="Sub3" id="Sub3"><br>
    <label>Mathematics :</label>
    <input type="text" name="Sub4" id="Sub4"><br>
    <label>Computer :</label>
    <input type="text" name="Sub5" id="Sub5"><br>
    <input type="Submit" value="Submit" name="submit" >
    </form>
    <?php 
    $sub1 = $_POST['Sub1'];
    $sub2 = $_POST['Sub2'];
    $sub3 = $_POST['Sub3'];
    $sub4 = $_POST['Sub4'];
    $sub5 = $_POST['Sub5'];
    $sum = $sub1+$sub2+$sub3+$sub4+$sub5;
    echo "<br>------Marks------";
    echo "<br>Physics : ".$sub1;
    echo "<br>Chemistry : ".$sub2;
    echo "<br>Biology : ".$sub3;
    echo "<br>Mathematics : ".$sub4;
    echo "<br>Computer : ".$sub5;
    echo "<br>Total marks is : ".$sum;
    $per = $sum/5;
    echo "<br>Percentages : ".$per;
    if ($per >= 90) {
        $grade = "A";
    } elseif ($per >= 80) {
        $grade = "B";
    } elseif ($per >= 70) {
        $grade = "C";
    } elseif ($per >= 50) {
        $grade = "D";
    } else {
        $grade = "F";
    }
    echo "<br> Grage : ".$grade;
    ?>
</body>
</html>