<?php

// donnée postées

// (1) code php pour traiter l'envoie de l'email

// recuperation des variables et securisation des donnée

// variables de l'email

//envoyer un email html (header, content doit etre deffinit )


$_header="MIME-VERSION: 10\r\n";
$_header='From:"PrimFX.com"<support@gmail.com'."\n";
$_header='Content-Type:text/html; charset="utf-8"'."\n";
$_header='Content-Transfert-encoding: 8bit';

$message='
<html>
      <body>
            <div aligne="center">
            vous avez un message 
            </br>
            </div>

      </body>
</html>            
';

$message = '<h1>Message envoyé depuis la page Contact de metamorphose.fr</h1>
<p><b>Nom : </b>' . $_POST['nom'] . '<br>
<p><b>prenom : </b>' . $_POST['prenom'] . '<br>
<b>Email : </b>' . $_POST['email'] . '<br>
<b>date_entree : </b>' . $_POST['date_entree'] . '</p>'.'<br>
<b>date_sortie : </b>' . $_POST['date_sortie'] . '</p>'.'<br>
<b>nb_adultes : </b>' . $_POST['nb_adultes'] . '</p>'.'<br>
<b>nb_enfants : </b>' . $_POST['nb_enfants'] . '</p>'.'<br>
<b>logement : </b>' . $_POST['logement'] . '</p>'.'<br>
<b>options : </b>' . $_POST['options'] . '</p>';

$retour = mail('lorie.molina134@gmail.com', 'Envoi depuis page Contact', $message, $entete);

echo '<p>Votre message a bien été envoyé.</p>';


mail ("lorie.molina134@gmail.com", "test", $message, $_header);
?>


<!--
     $var_dump = ($_POST);
     $message = $_POST['message'];
     $header = ['from...@gmail.com'];
     $entete  = 'MIME-Version: 1.0' . "\r\n";
     $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
     $entete .= 'From: ' . $_POST['email'] . "\r\n";

      
      
