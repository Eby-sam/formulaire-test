<?php

if(isset($_POST['user']) && isset($_POST['age']) && isset($_POST['mail'])
    && isset($_POST['password']) && isset($_POST['password-repeat'])) {

    $email = trim(strip_tags($_POST['email']));
    $password = trim(strip_tags($_POST['password']));
    $passwordRepeat = trim(strip_tags($_POST['password-repeat']));

    /* verification de l'age */
    $age = intval($_POST['age']);
    if($age < 18 || $age > 90) {
        echo " Vous n'avez pas l'age requis !!!";
    }

    /* verification du mail */
    elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        // si le mail n'est pas valide alors success 0 (error)
        header('location: /../index.php?success=0');
    }

    /* verification du password !!! */

    elseif($password === $passwordRepeat) {
        header('location: /../index.php');
    }
    else {
        echo 'erreur de mot de passe !!!';
    }
}
