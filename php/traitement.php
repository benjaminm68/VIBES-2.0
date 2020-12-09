<?php

session_start();

foreach($_POST as $key => $val){
    if(!empty($val)){
        ${$key} = htmlspecialchars($val);
    }
    else{
        $_SESSION['error_champ'][$key] = "<p style='color: red; margin: 0;'>Le champ n'a pas été rempli !</p>";
        $_SESSION['error'] = "Votre mail n'a pas été envoyé !";
    }
}

if(isset($_SESSION['error_champ'])){
        header('location: http://benjaminmonvoisin.fr/vibes_2/#contact');
        exit();
}else if(isset($_SESSION['email_invalide'])){
    header('location: http://benjaminmonvoisin.fr/vibes_2/#contact');
        exit();
}

if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $_SESSION['email_invalide'] = "<p style='color: red; margin: 0;'>L'adresse mail n'est pas valide !</p>";
    header('location: http://benjaminmonvoisin.fr/vibes_2/#contact');
    exit();
}

$to = "ben-ca@outlook.fr";
$message = "Expéditeur: $name
            Email de l'expéditeur: $email
            Sujet: $subject
            Téléphone: $phone
            $message";

$headers = "From: $name <'$email'> \r\n.
            Reply To: $email \r\n";

if(mail($to, $subject, $message, $headers)){
    $_SESSION['success'] = "Votre mail bien été envoyé !";
    header('location: http://benjaminmonvoisin.fr/vibes_2/#contact');
    exit();
}else{
    $_SESSION['error'] = "Votre mail n'a pas été envoyé !";
    header('location: http://benjaminmonvoisin.fr/vibes_2/#contact');
    exit();
}
   

?> 