<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'PUT'){

    $putData = file_get_contents("php://input");
    $year = strtok($putData, "-");
    $month = strtok("-");
    $day = strtok("-");

    if(isset($_SESSION['horoscope'])) {
        
        include 'signs.php';

        $count = 0;
        $signIndex = -1;

    //leta upp vilket stjärntecken som födelsedatumet tillhör och letar upp vilken plats den ligger i arrayen.
        foreach($signs as $sign) {
            if(($month == $sign->month1 && $day >= $sign->day1) || ($month == $sign->month2 && $day <= $sign->day2)) {
                $signIndex = $count;
            }
            $count++;
        }
        echo "true";

    //stjärntecknet sparas i session
        $_SESSION['horoscope'] = $signs[$signIndex];
        }else{
            echo "false";
    }
}

?>