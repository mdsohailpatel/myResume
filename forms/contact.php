<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  $receiving_email_address = 'patelkhan175@gmail.com';

  // if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
  //   include( $php_email_form );
  // } else {
  //   die( 'Unable to load the "PHP Email Form" Library!');
  // }

  // $contact = new PHP_Email_Form;
  // $contact->ajax = true;
  
  $from_name = $_POST['name'];
  $from_email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $message = "mail from: $from_name <br> Contact Person mail: $from_email <br> Reason : $message";

  $subject = "";
  $message = "This is a test email sent using PHP.";
  $headers = "From: mywebsite@noreply.com";

  if (mail($receiving_email_address, $subject, $message, $headers)) {
      echo "Email sent successfully.";
  } else {
      echo "Email could not be sent.";
  }

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  // $contact->add_message( $_POST['name'], 'From');
  // $contact->add_message( $_POST['email'], 'Email');
  // $contact->add_message( $_POST['message'], 'Message', 10);

  // echo $contact->send();
?>
