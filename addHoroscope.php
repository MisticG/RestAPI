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

print_r($_SESSION);








/*

$signs = array(
    'Aries'=> array(
    new DateTime('March-21'),
    new DateTime('April-20')
    ),
    'Tarus'=> array(
        new DateTime('April-21'),
        new DateTime('May-20')

    ),
);

echo $sign; 

foreach($signs as $sign => $dateTimeRange) {
    if($newDates >= $dateTimeRange[0] && $newDates <= $dateTimeRange[1]) {
        echo $sign;
        break;
    }
}
*/

/*$year = strtok($getDate, "-");
$month = strtok("-");
$day = strtok("-");

echo $year;
echo $month;
*/



/*switch($getDate) {
    case "0":
        array_push($database->fruits, "banana");
        break;
    case "1":
        array_push($database->fruits, "apple");
        break;
    case "2":
    samma som array_push blaha blaha
        $database->fruits[] = "balls";
        break;
    case "3":
        array_push($database->fruits, "orange");
        break;
    default:
    echo "no fruits available";
}

file_put_contents('database.json', json_encode($database));

$nrOfFruits = sizeof($database->fruits);

for($i = 0; $i < $nrOfFruits; $i++) {
    echo $database->fruits[$i] . "<br>";
}




$getDate = $_POST["birthDate"];

echo $getDate;

/*$Session = (file_get_contents('$_SESSION'));
$database = json_decode($Session);


if(!isset($database->newDate)) {
    $database->newDate = array();
}

$newDates = new stdClass();
$newDates = $_POST["birthDate"];

print_r($newDates);

array_push($database->newDate, $newDates);

file_put_contents('$_SESSION', json_encode($database));

*/
?>