<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
//Open a new connection to the MySQL server
$mysqli = new mysqli('localhost', 'root', 'Reshmamysql@123', 'portfolio');

//Output any connection error
if ($mysqli->connect_error) {
    die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

$name = mysqli_real_escape_string($mysqli, $_POST['name']);
$email = mysqli_real_escape_string($mysqli, $_POST['email']);
$message= mysqli_real_escape_string($mysqli, $_POST['message']);

$email2 = "sreshma2112@gmail.com";
$subject = "$name : $email";

if (strlen($name) > 50) {
    echo 'name_long';

} elseif (strlen($name) < 2) {
    echo 'name_short';

} elseif (strlen($email) > 50) {
    echo 'email_long';

} elseif (strlen($email) < 2) {
    echo 'email_short';

} elseif (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo 'eformat';

} elseif (strlen($message) > 500) {
    echo 'message_long';

} elseif (strlen($message) < 3) {
    echo 'message_short';

} else {
    	 //MAILER

    require 'C:\wamp64(2)\www\perfectcup\phpmailer\src\Exception.php';
    require 'C:\wamp64(2)\www\perfectcup\phpmailer\src\PHPMailer.php';
    require 'C:\wamp64(2)\www\perfectcup\phpmailer\src\SMTP.php';

    $mail = new PHPMailer(true);
    $alert='';
	
	//$mail->SMTPDebug = 3;                               // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'reshportfolio@gmail.com';                 // SMTP username of sender....customer
    $mail->Password = 'mzhttijivsksaubl';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    $mail->setFrom($email);
    $mail->addAddress($email2, 'Admin');
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body = $message;
    $mail->send();
    echo 'true';
}

?>