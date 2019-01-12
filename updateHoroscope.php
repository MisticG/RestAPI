<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'PUT'){
    
$hello = file_get_contents("php://input");
//echo $hello;

/*$year = strtok($hello, "-");
$month = strtok("-");
$day = strtok("-");

echo $day;
*/
}




 
/*foreach($_PUT as $value) {
    echo $value;
}*/
/*for($i=0; $i <= $_PUT; $i++){
    echo $_PUT[$i];
    
}*/
//echo json_encode($_PUT);







?>