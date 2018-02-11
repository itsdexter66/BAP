<?php

$voornaam = $_POST['voornaam'];
$tussenvoegsel = $_POST['tussenvoegsel'];
$achternaam = $_POST['achternaam'];
$emailadres = $_POST['emailadres'];

$dbc = mysqli_connect('localhost', 'root','','24831_db') or die('error no connection');

$query = "INSERT INTO nieuwsbrief VALUES (0,'$voornaam','$tussenvoegsel','$achternaam','$emailadres')";

$result = mysqli_query($dbc,$query) or die('error query');

mysqli_close($dbc);

if($result){

    echo 'DE VOLGENDE GEGEVENS ZIJN TOEGEVOEGD AAN DE DATABASE <br>';
    echo $voornaam . '<br>';
    echo $tussenvoegsel . '<br>';
    echo $achternaam . '<br>';
    echo $emailadres . '<br>';
} else{
    echo 'er is iets niet goed';
}
