<?php

     $result="";
if(isset($_POST['submit'])){
    require 'phpmailer/PHPMailerAutoload.php';
    $mail= new PHPMailer;

    $mail->Host='smtp.gmail.com';
    $mail->Port=587;
    $mail->SMTPAuth=true;
    $mail->SMTPSecure='tls';
    $mail->Username='info@neezergreene.com';
    $mail->password='Admin@neezergreene';

    $mail->setFrom($_POST['email'],$_POST['fname']);
    $mail->addAddress('info@neezergreene.com');
    $mail->addReplyTo($_POST['email'],$_POST['fname']);

    $mail->isHTML(true);
    $mail->Subject='Agent Form Submission: ';  
    $mail->Body='Full Name: '.$_POST['fname'].''.$_POST['lname'].
                '<br>Phone Number: '.$_POST['phone'].
                '<br>Email Address: '.$_POST['email'].
                '<br> Residential Address: '.$_POST['address'].'.';

    if(!$mail->send()){
        $result="Something when wrong, probably NEPA took light. PLease try again";
    }else{
        $result="Thanks, ".$_POST['fname']."for showing interest, we get back to you soon! cheers...";
    }

}



?>