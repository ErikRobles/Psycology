<?php



$from="psicoterapiaviajeinterior@gmail.com";
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$subject=$_POST['subject'];
$comments=$_POST['comments'];

mail($name, $email, $phone, $subject, $comments, "from:".$from);

echo "Gracias por contactarnos! Estaremos en contacto en menos de 48 hrs."


?>
