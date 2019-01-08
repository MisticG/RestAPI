<?php
session_start();

$stringDate = $_POST["birthDate"];

$year = strtok($stringDate, "-");
$month = strtok("-");
$day = strtok("-");

//I "signs.php" skapas en array med horoskopsobjekt/stjärntecken.
include "signs.php";

$count = 0;
$signIndex = -1;

//leta upp vilket stjärntecken som födelsedatumet tillhör och letar upp vilken plats den ligger i arrayen.
foreach($signs as $sign) {
    if(($month == $sign->month1 && $day >= $sign->day1) || ($month == $sign->month2 && $day <= $sign->day2)) {
        $signIndex = $count;
    }
    $count++;
}

$_SESSION['horoscope'] = $signs[$signIndex];

?>