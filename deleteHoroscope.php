<?php
session_start();
//om $_session innehåller nåt så kommer innehållet att tas bort
if($_SERVER['REQUEST_METHOD'] == 'DELETE'){
    if(isset($_SESSION['horoscope'])) {
        unset($_SESSION['horoscope']);
        echo "true";
    }else{
        echo "false";
    }
}    

?>


