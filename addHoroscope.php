<?php
session_start();

$databaseSession = (file_get_contents('$_SESSION'));
$database = json_decode($databaseSession);


if(!isset($database->newDate)) {
    $database->newDate = array();
}

$newDates = new stdClass();
$newDates = $_POST["birthDate"];

array_push($database->newDate, $newDates);

file_put_contents('$_SESSION', json_encode($database));

echo $newDates;

?>