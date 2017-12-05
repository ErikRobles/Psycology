<?php
require 'PHPMailer/vendor/autoload.php';

$mail = new PHPMailer();

$mail->isSMTP();                            // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                     // Enable SMTP authentication
// $mail->SMTPDebut = 2;
$mail->Username = 'psicoterapiaviajeinterior@gmail.com';          // SMTP username
$mail->Password = 'psicoterapia01*'; // SMTP password
$mail->SMTPSecure = 'ssl';                  // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                          // TCP port to connect to



//Recipients
    $mail->setFrom('psicoterapiaviajeinterior@gmail.com', 'Mailer');
    $mail->addAddress('psicoterapiaviajeinterior@gmail.com', 'Guillermina Ambriz Laguna');     // Add a recipient
/*
    $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');

    //Attachments
    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

*/

    //Content
    $mail->isHTML(false);                                  // Set email format to Normal text
    $mail->name = .$POST['name'];
    $mail->email = .$POST['email'];
    $mail->Subject = .$POST['subject'];
    $mail->Body  = .$POST['comments'];
    $mail->AltBody = .$POST['comments'];

    $mail->send();
    echo '{Éxito}';
} catch (Exception $e) {
    echo 'Algo mal pasó.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
?>
