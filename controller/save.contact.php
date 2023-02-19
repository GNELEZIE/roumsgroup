<?php

if(isset($_POST['nom']) and isset($_POST['email']) and isset($_POST['msg']) and  isset($_SESSION['myformkey']) and isset($_POST['formkey']) and $_SESSION['myformkey'] == $_POST['formkey']){

    extract($_POST);

    $date = gmdate('Y-m-d H:i');
    $nom = $_POST['nom'];
    $message = $_POST['msg'];
    $dialPhone = $_POST['dialPhone'];
    $phone = $_POST['phone'];
    $numb = $dialPhone.' '.$phone;


    $messages = 'Bonjour, <br/><br/> Vous avez un nouveau message ! <br/><br/>Nom : '.$nom.'<br/><br/>Téléphone : '.$numb.'<br/><br/> Email : '.$email.'<br/><br/>'. $message;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo '1';
    }else{
        $subject = trim('Nouveau message');
//        sendMailToMe($email,$nom,$sujet,$messages);
        echo 'ok';

    }

}