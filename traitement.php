<?php
// création des variables de nom mail sujet et message

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    //  importer la librairie PHPMailer
    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';
    //dossier vendor ou mettre tout les fichier comme bootstrap, dossier php mailer, c'est une convention

//Create an instance; passing `true` enables exceptions

    $mail = new PHPMailer(true);
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $sujet = $_POST['sujet'];
    $message = $_POST['message'];

    $message = 'nom: '.$nom."<br>"."Email: ".$email."<br>".'tel:'.$tel."<br>".'sujet: '.$sujet.'<br>'."message: ".$message; 
try {

//option de serveur
    $mail = new PHPMailer(true);//on créé un objet phpmailer pour utiliser ses attributs et méthodes         
    $mail->isSMTP();                                  //envoi en SMTP 
    $mail->Host       = 'smtp.gmail.com';             //parametre le serveur SMTP pour envoyer par gmail
    $mail->SMTPAuth   = true;                         //SMTP authentification
    $mail->Username   = 'hichem.m83@gmail.com';       //Permet d'accder a l'attribut username de l'objet créé(c'est le mail qui sert à envoyer des mails)
    $mail->Password   = 'uljpwvllfymmhwtj';           //SMTP généré sur gmail c'est un mdp a double authentification
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;  //permet de crypter le message
    $mail->Port       = 465;                          //port TCP pour ce connecter; utiliser 587 si tu as parametré `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($email, $nom);      //le message est envoyé par $mail et son nom par $name
    $mail->addReplyTo($email, $nom);
    $mail->addAddress('hichem.m83@gmail.com');//ajoute un recepteur(qui receptionne les mails des users), ajoute un nom (facultatif) 

    
    //Content
    $mail->isHTML(true);     //parametre le format de l'email en HTML
    $mail->Subject = $sujet;
    $mail->Body = $message; //'c'est le corp du message qui est initialisé plus haut
    $mail->AltBody ="intitulé" ;  //'This is the body in plain text for non-HTML mail clients';
    
    // pour envoyer le message on va utiliser la methode send() -->

    $mail->send();     
    echo 'message envoyé' ; 
    }catch (Exception $e){
    echo 'message non envoyé:';
  }
?>+