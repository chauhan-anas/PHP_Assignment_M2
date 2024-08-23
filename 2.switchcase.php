<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch case</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <form action="#" method="POST">
        <label for="week" class="from control" ><h2>Enter No: </h2></lAbel>
        <input type="number" class="from  control" name="Day" >
        <input type="submit" name="save" value="submit" class="btn btn-primary" >
    </form>
    
    <h3><?php
    if(isset($_POST['save'])){
        $day=$_POST['Day'];
        switch ($day){
            case 1:
                echo 'Monday';
                break;
            case 2:
                echo 'Tuesday' ;
                break;
            case 3:
                echo 'wenesday' ;
                break;
            case 4:
                echo 'Thursday' ;
                break;
            case 5 :
                echo 'Frieday'  ;
                  break;
            case 6 :
                echo 'Saturday';
                break;
            case 7 :
                echo 'Sunday' ;
                break;
            default :
                echo 'invalid number' ;                     
        }
        
    }
   
      
    ?></h3>

    


    
    
</body>
</html>