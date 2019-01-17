<?php
//funktion som skapar ett stjärntecken-objekt
function createSign($name, $mon1, $day1, $mon2, $day2, $info, $signImage) {
    $newSign = new stdClass();
    $newSign->name = $name;
    $newSign->month1 = $mon1;
    $newSign->month2 = $mon2;
    $newSign->day1 = $day1;
    $newSign->day2 = $day2;
    $newSign->signInfo = $info;
    $newSign->signImage = $signImage;

    return $newSign;
}

//Array för stjärntecken-objekt
$signs = array();

$signs[0] = createSign(
    'Väduren', '03', '21', '04', '19', 'Varm, entusiastisk, social, känslosam, stressad, impulsstyrd och aggressiv', 'vaduren.png');
$signs[1] = createSign(
    'Oxen', '04', '20', '05', '20', 'Envis, beskyddande, lojal, tålmodig, uthållig, stabil, praktisk och realistisk', 'oxen.png');
$signs[2] = createSign(
    'Tvillingarna', '05', '21', '06', '21', 'Kvick, kommunikativ, ytlig, nyfiken, självständig, modig, impulsiv och stressad', 'tvillingarna.png');
$signs[3] = createSign(
    'Kräftan', '06', '22', '07', '22', 'Föräldern, beskyddaren, bevararen, den trofaste, den lojale och sympatiske', 'kraftan.png');
$signs[4] = createSign(
    'Lejonet', '07', '23', '08', '22', 'Storsint, kärleksfull, viljestark, svartsjuk, en ledare, trofast och plikttrogen', 'lejonet.png');
$signs[5] = createSign(
    'Jungfrun', '08', '23', '09', '22', 'Blyg, självmedveten, analytisk, produktiv, kritisk och föränderlig', 'Jungfrun.png');
$signs[6] = createSign(
    'Vågen', '09', '23', '10', '22', 'Förälskad, charmig, obeslutsam, förförisk, diplomatisk och social kompetent', 'vagen.png');
$signs[7] = createSign(
    'Skorpionen', '10', '23', '11', '21', 'Intensiv, svarsjuk, passionerad, tystlåten, intensiv, lojal, modig och stark', 'skorpionen.png');
$signs[8] = createSign(
    'Skytten', '11', '22', '12', '21', 'Ärlig, generös, idealistisk, optimistisk, överdriven, entusiastisk och sökare', 'skytten.png');
$signs[9] = createSign(
    'Stenbocken', '12', '22', '01', '19', 'Tillbakadragen, blyg, trogen, pliktkänslig, ambitiös och lojal', 'stenbocken.png');
$signs[10] = createSign(
    'Vattumannen', '01', '20', '02', '18', ' En fredsälskare, klarsynt, intuitiv, lojal, uppfinningsrik och en revolutionär', 'vattumannen.png');
$signs[11] = createSign(
    'Fiskarna', '02', '19', '03', '20', 'Empatisk, human, slarvig, vänlig, hemlighetsfull, lättpåverkad och inspirerande', 'fiskarna.png');

?>