<?php
/**
 * Created by PhpStorm.
 * User: dexterkrijgsman
 * Date: 20/12/2017
 * Time: 11:17
 */
//MAILVARIABELEN AANMAKEN
$to = '24831@ma-web.nl';
$subject = $_POST['subject'];
$message = $_POST['message'];
$headers = 'Form: ' . $_POST['from'];

//MAIL VERSTUREN
mail($to, $subject, $message, $headers);

//BEVESTEGING VOOR DE GEBRUIKER
echo 'Uw mail is verstuurd. Bedankt!';