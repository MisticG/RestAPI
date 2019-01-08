<?php

session_start();

if (isset($_SESSION['horoscope'])) {
    echo json_encode($_SESSION['horoscope']);
}


?>