<?php

$emailadres = $_POST['emailadres'];

$host = 'localhost';
$username = 'root';
$password = '';
$dbname = '24191_db';

$dbc = mysqli_connect($host,$username,$password,$dbname)or die('error1');

$query = "SELECT * FROM nieuwsbrief WHERE emailadres = '$emailadres'";

$result = mysqli_query($dbc,$query) or die('error2');

$number_of_rows = mysqli_num_rows($result);
if($number_of_rows == 0){
    echo 'je email: ' .$emailadres. ' zit niet in de database<br>';
    echo '<a href="uitschrijven.php">terug naar uitschrijven</a><br><br>';
    exit();
}

$query = "DELETE FROM nieuwsbrief WHERE emailadres = '$emailadres'";

$result = mysqli_query($dbc,$query) or die('error3');

mysqli_close($dbc);

echo 'je email: ' .$emailadres. ' is nu verwijderd<br>';
echo'<a href="index.php">terug naar index</a><br><br>';
