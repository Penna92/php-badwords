<?php

//questa è una variabile
// $name= "Clelia";
// echo $name;
// if(isset($_GET['nome']) && isset($_GET['cognome'])){
//    $name = $_GET["nome"];
//    $cognome = $_GET["cognome"];
// } else {
//     $name = "non so come ti chiami";
//     $cognome = "";
// if(isset($_GET['nome']) && isset($_GET['cognome'])){
//    $name = $_GET["nome"];
//    $cognome = $_GET["cognome"];
// } else {
//     $name = "non so come ti chiami";
//     $cognome = "";

// }
// $parola = "notte"
// }

$stringa = "Grazie a voi, cari amici della notte. Io vi aspetto come di consueto sempre di notte, sempre sottovoce, noi diciamo un modo per capire, per capirsi e forse anche per capirci, quando un giorno, vista l'ora, è appena finito e un nuovo giorno è appena cominciato; un giorno in più per amare, per sognare, per vivere. Buonanotte.";
if(isset($_GET['parola'])){
    $parolaCensurata = $_GET["parola"];
    if(strpos($stringa, $parolaCensurata) !== false){
    $nuovaStringa = str_replace($parolaCensurata, '***', $stringa);
} else {
    $nuovaStringa = "La parola da te selezionata non esiste nella stringa originale";
    } 
} else {
    $nuovaStringa = "Non hai scelto nessuna parola da censurare!";
};


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <h3>Stringa originale</h3>
    <p><?php echo $stringa ?> </p>
    <p>La stringa originale contiene <?php echo strlen($stringa)?> caratteri totali. </p>
    <hr>
    <h3>Nuova stringa con una parola censurata a scelta dall'utente</h3>
    <p><?php echo $nuovaStringa ?></p>
    <p>La nuova stringa contiene <?php echo strlen($nuovaStringa)?> caratteri totali. </p>
</body>
</html>


