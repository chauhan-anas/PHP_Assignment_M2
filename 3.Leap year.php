<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Find leap year</h2>
    <?php
    for($year=1901;$year<=2016; $year++){
        if($year % 4 ==0){
            if($year % 100==0){
                if($year % 400==0){
                    echo "$year is a leap year.<br>";
                }else{ "$year is not a leap year.<br>";

                }
            }else{
                
               echo "$year is  a leap year.<br>";
            }
        }else{
            "$year is not a leap year.<br>";
        }
    }
    ?>
    
</body>
</html>
