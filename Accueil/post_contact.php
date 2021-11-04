<?php

session_start();

$name = $_POST['prenom'];
$lastName = $_POST['nom'];
$email = $_POST['email'];
$arrivee = $_POST['arrivee'];
$date_sortie = $_POST['sortie'];
$logement = $_POST['logement'];
$nb_adultes = $_POST['nb_adultes'];
$nb_enfants_13 = $_POST['nb_enfants_13'];
$nb_enfants_2 = $_POST['nb_enfants_2'];


$champagne = $_POST['champagne'];
$Vins = $_POST['vins'];
$petales = $_POST['petales'];
$mix = $_POST['mixte'];
$vegetarienne = $_POST['vegetarienne'];
$vegetalienne = $_POST['vegetalienne'];
$fondue = $_POST['fondue'];
$msg = $_POST['text'];

$message =  $nom . ' ' . $prenom . ' ' . ' aimerait le logement ' . $logement . ' pour  ' .
    ".\n" .
    $nb_adultes . ' adulte(s) ' .
    ".\n" .
    $nb_enfants_13 . ' enfant(s) de moins de 13 ans '
    . ".\n" .
    $nb_enfants_2 . ' enfant(s) de moins de 2 ans ' .
    ".\n" .
    ' et en options ' .
    ".\n" .
    $champagne . ' ' . $Vins . ' ' . $petales .
    ' ' . $mix . ' ' . $vegetarienne . ' ' . $vegetalienne . ' ' . $fondue
    . ".\n" .
    'a patir du ' . $arrivee . ' jusqu\'au ' . $date_sortie
    . ".\n" . ".\n" .
    $msg . ' ' . $email;


$headers = "Reservation : " . $email . '';
$txt = "Vous avait recu un e-mail de " . $name . ' ' .  $lastName .  ".\n\n" . $message;
mail("lorie.molina134@gmail.com", $headers, $txt);
header('Location: index.html');
