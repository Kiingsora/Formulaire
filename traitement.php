<?php
// création des variables de nom mail sujet et message

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
//  importer la librairie PHPMailer
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


//Create an instance; passing `true` enables exceptions

$mail = new PHPMailer(true);
$nom = $_POST['nom'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$sujet = $_POST['sujet'];
$message = $_POST['message'];

$message = 'nom:'.$nom."\n"."Email : ".$email."\n".'tel:'.$tel."\n"."message :".$message; 
try {

//Server settings
    $mail = new PHPMailer($nom, $email,$tel, $sujet, $message);//on creer un objet phpmailer pour utiliser ses attribut et méthode         
    $mail->isSMTP();                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';       //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                   //Enable SMTP authentication
    $mail->Username   = 'hichem.m83@gmail.com'; //Permet d'accder a l'attribut username de l'objet créé(c'est le mail qui sert à envoyer des mails)
    $mail->Password   = 'uljpwvllfymmhwtj';          //SMTP password généré sur gmail c'est un mdp a 2ble authentification
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //permet de crypter le message
    $mail->Port       = 465; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('from@example.com', 'Mailer');// le message est envoyé par $from_mail et son nom par $from_name
    $mail->addAddress('hichem.m83@gmail.com');     //ajoute un recepteur(qui receptionne les mails des users), ajoute un nom (facultatif) 

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'sujet du message de la personne';
    $mail->Body = $message; //'c'est le corp du message qui est initialisé plus haut
    $mail->AltBody ="intitulé" ;  //'This is the body in plain text for non-HTML mail clients';

    // pour envoyer le message on va utiliser la methode send -->

    $mail->send();     
    echo 'message envoyé' ; 
}catch (Exception $e){
      echo 'message non envoyé: {$mail->ErrorInfo}';
  }
?>