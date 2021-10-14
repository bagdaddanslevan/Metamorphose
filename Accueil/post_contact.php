<?php

if(isset($_POST['submit'])){
      $name = $_POST['prenom'];
      $lastName = $_POST['nom'];
      $mailForm = $_POST['email'] ;
      $message = '<b>date_entree : </b>' . $_POST['date_entree'] . '</p>'.'<br>
<b>date_sortie : </b>' . $_POST['date_sortie'] . '</p>'.'<br>
<b>nb_adultes : </b>' . $_POST['nb_adultes'] . '</p>'.'<br>
<b>nb_enfants : </b>' . $_POST['nb_enfants'] . '</p>'.'<br>
<b>logement : </b>' . $_POST['logement'] . '</p>'.'<br>
<b>options : </b>' . $_POST['options'] . '</p>';

$mailTo ="chimenbou.angelou@gmail.com";
$headers = "From: " . $mailFrom;
$txt = "you have received an e-mail from ".$name.".\n\n".$message;

    mail($mailTo,$txt,$headers);
}
?>