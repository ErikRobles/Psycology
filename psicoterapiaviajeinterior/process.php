<?php

require_once('functions.php');

$errors = array();
$sent = false;

if ( ! empty( $_POST )) {
  $process = process_form( $_POST );
  if ( ! empty( $process['message'] ) ) {
    $errors[] = $process['message'];
  } else if ( ! empty( $process['errors'] ) ) {
    $errors = $process['errors'];
  } else {
    $sent = true;
  }
}

$whitelist = array('name', 'email', 'subject', 'comments');
$from = 'Psicoterapia Viaje a tu interior';
$email_address = 'psicoterapiaviajeinterior@gmail.com';
$subject = 'De la página Web psicoterapia';
$table = 'mail';
define('DB_NAME', 'psicoter_contactform');
define('DB_USERNAME', 'psicoter_erik');
define('DB_PASSWORD', 'Star0101*');
define('DB_HOST', 'localhost');



 ?>
