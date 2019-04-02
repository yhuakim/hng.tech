<?php
require_once "../vendor/autoload.php";
use PHPMailer\PHPMailer\PHPMailer;

$mail = new PHPMailer;

//server details
$mail->SMTPDebug = 3;                                 // Enable verbose debug output
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = $smtp_host;                     // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = $smtp_username;                   // SMTP username
$mail->Password = $smtp_password;                   // SMTP password
// $mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
$mail->Port = $smtp_port;                                   // TCP port to connect to


$email = $_POST['email'];
$name = $_POST['name'];
$subject = "HNG Internship 5.0";
$message = "<p>Hi! <b>HNG Internship 5.0</b> is starting soon, <b>" . $name . 
            "</b> sent you an invite. </p> <p>Please click on this link to <b> 
            <a href='https://docs.google.com/forms/d/1cfhq31KfV1X8iWeVm8O0ocNd4_OuZl7AlfJud47R5DU/viewform?edit_requested=true#responses'>Join</a></b> </p>";

$mail->From = $email;
$mail->FromName = "HNG Internship 5.0";
$mail->addAddress($email);

$mail->isHTML(true);
$mail->Subject = $subject;
$mail->Body = $message;


if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
    http_response_code(500);
} else {
    echo "Message has been sent successfully";
    http_response_code(200);
}

?>