<!--Write a PHP script which decodes the following JSON string-->
<?php

$jsonString = '{
    "name": "Anas Chauhan",
    "age": 25,
    "hobbies": ["Sports", "travelling", "running"]
}';


$decodedArray = json_decode($jsonString, true);

echo "Decoded Array: <br><pre>";
print_r($decodedArray);

?>