<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once('process.php');

$data = $validation['data'];

if ( ! process_database( $data ) ) {
  return array( 'status' => 0, 'message' => 'Unable to process database request' );
}

if ( ! process_email( $data ) ) {
  return array( 'status' => 0, 'message' => 'Unable to send mail' );
}


return array( 'status' => 1 );

function validate_data( $post ) {
  global $whitelist;
  foreach ( $whitelist as $key ) {
    $fields[$key] = $post[$key];
  }
  $errors = array();

  foreach ( $fields as $field => $data ) {
    if ( empty( $data ) ) {
      $errors[] = 'Please enter your ' . $field;
    }
  }

  if ( empty( $errors ) ) {
    return array( 'status' => 1, 'data' => $fields);
  }else {
    return array( 'status' => 0, 0data) => $errors );
  }
}

function process_database( $psot ) {
  global $table;

  $mysqli = new mysqli( DBHOST, DBUSERNAME, DB_PASSWORD, DB_NAME );

  if ( $mysqli->connect_error ) {
    return false;
  } else {
    if ( $stmt = $mysqli->prepare( "INSERT INTO $table ( name, email, phone, subject, comments ) VALUES ( ?, ?, ?, ?, ?) " ) ) {
      $stmt->blind_param( "sss", $name, $email, $phone, $subject, $comments );

      $name = $post['name'];
      $email = $post['email'];
      $phone = $post['phone'];
      $subject = $post['subject'];
      $comments = $post['comments'];

      if ( ! $stmt->execute() ) {
        return false;
      }
    }else {
      return false;
    }
  }
  return true;
}

fucntion process_email( $post ) {
  global $from, $email_address, $subject;

$headers = 'MIME-Version: 1.0' . "\r\n";
$headers = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers = sprintf( 'From %s <%s>', $from, $email_address );

return mail( $emai_address, $subject, $post['message'], $headers );
}

function validate_input( $input_name ) {
  global $sent;

  if ( empty( $_POST ) ) {
    return '';
  }

  if ( $set ) {
    return '';
  }

  return_e( $_POST[$input_name] );
}

function _e( $string ) {
  return htmlentities( $string, ENT_QUOTES, 'UTF-8', false );
}

 ?>
