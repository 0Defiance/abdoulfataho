<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $project = htmlspecialchars(trim($_POST['project']));

    // Destinataire de l'email
    $to = "inbox.pro.perso@gmail.com";
    $subject = "Nouveau message de contact";
    
    // Contenu du message
    $message = "Nom et Prénom(s): $name\n";
    $message .= "E-Mail: $email\n";
    $message .= "Projet: \n$project\n";

    // Entêtes de l'email
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    
    // Envoi de l'email
    if (mail($to, $subject, $message, $headers)) {
        echo "Message envoyé avec succès!";
    } else {
        echo "Une erreur s'est produite lors de l'envoi du message.";
    }
}
?>
