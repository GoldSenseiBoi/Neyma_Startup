<?php
    if(isset($_POST["message"])){
        $message = "Ce message vous a été envoyé via le site de Neyma
        Nom : " . $_POST["nom"] . "
        Email : " . $_POST["mail"] . "
        Message : " . $_POST["message"];

        $retour = mail("acespeed2305@gmail.com", $message, "From:ibrahimasorydiallo360@gmail.com" . "\r\n" . "Reply-to" . $_POST["mail"]);
        if ($retour) {
            echo"<p>Votre Question a bien été envoyé.</p>";
        }
    }

?>