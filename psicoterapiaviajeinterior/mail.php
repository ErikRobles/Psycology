<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$comments = $_POST['comments'];
$formcontent="De: $name \n Telefono: $phone \n Mensaje: $comments";
$recipient = "psicoter@psicoterapiaviajeinterior.com";
$subject = "Formulario de Contacto de tu sitio web";
$mailheader = "De: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("¡Error!");

//echo "<h1>¡Gracias por contactarme, <br>En las próximas 48 horas estaré respondiendo tu mensaje!</h1>";

header("Location: contactthanks.php");
exit;
?>
