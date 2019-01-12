<?php
session_start();

/* Om ett horoskop finns sparat i $_SESSION så returnera det JSON-kodat */
if (isset($_SESSION['horoscope'])) {
    echo json_encode($_SESSION['horoscope']);
    
/* Skapa annars ett "fake" objekt och indikera i dess namn att inget horoskop fanns i $SESSION */    
} else {
    $aFakeSign = new stdClass();
    $aFakeSign->name = "Error"; 
    echo json_encode($aFakeSign);
}
?>