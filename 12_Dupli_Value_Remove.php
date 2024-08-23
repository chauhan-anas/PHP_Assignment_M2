<!--Write program to remove duplicate values from array -->
<?php
$array = array(1,2,3,4,5,6,7,8,6,2,3,4,3,2,1,2,3,5,6,7,8,9);

$uarray = array_unique($array);
echo"<pre>";
print_r($uarray);
?>