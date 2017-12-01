<?php

$con = mysqli_connect('localhost','psicoter_erik','Star0101');
/*
$db_host="localhost";
$db_username="psicoter_erik";
$db_password="Star0101*";
$db_name="psicoter_contactform";
*/
/*
DB_NAME', 'psicoter_contactform';
'DB_USER', 'psicoter_erik';
'DB_PASSWORD', 'Star0101*';
'DB_HOST', 'localhost';
*/
if (!$con) {
  echo 'Not conected to Server';
}

if (!mysqli_select_db($con,'psicoter_contactform')) {
  echo 'DataBase not selected';
}
/*
$db_conect=mysqli_conect($db_host,$db_username,$db_password,$db_name) or die();
*/
/*
$link = mysql_connect (DB_HOST, DB_USER, DB_PASSWORD);



if (!link) {
  die('Could not connect: ' . mysql_error());
}

$db_selected = mysql_select_db(DB_NAME, $link);

if (!$db_selected) {
  die('Can\'t use ' . DB_NAME . ': ' . mysql_error());
}
*/
/*
if(mysqli_connect_error()) {
  echo "failed to connect to MySQL:" .mysqli_connect_error();
}
*/
echo "connection successful";



$name = $_POST['name'];
$name = $_POST['email'];
$name = $_POST['opt-in'];
$subject = $_POST['subject'];
$msg = $_POST['message'];
$formcontent="From: $name \n Message: $Comments";
$to = "ambriz57@msn.com";
$subject = "Correo de Psicoterapia Viaje a tu Interior - Sitio Web";
$mailheader = "From: $email \r\n";
mail($to, $subject, $msg, $name, $formcontent, $mailheader) or die("Error!");
echo "Gracias por contactarnos! Estaremos en contacto en menos de 48 hrs. ";

$sql = "INSERT INTO mail (name,email,opt-in,subject,message) VALUES ('$name','$email','$subject','$msg',)";
if(!mysqli_query($con,$sqli)) {
  echo 'Not Inserted';
}

else {
  echo 'Inserted';
}

header("refresh:2; url=index.html");

?>
