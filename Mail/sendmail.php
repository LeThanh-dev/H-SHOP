<?php

include  "PHPMailer/src/PHPMailer.php";
include  "PHPMailer/src/Exception.php";
//include  "PHPMailer/src/OAuth.php";
include  "PHPMailer/src/POP3.php";
include  "PHPMailer/src/SMTP.php";
 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
function sendmail($mailgui,$mk)
{
$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'sonbgt36@gmail.com';                 // SMTP username
    $mail->Password = 'avfyiywvuvufbwud';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
 
    //Recipients
    $mail->setFrom('sonbgt36@gmail.com', 'Mailer');
    $mail->addAddress($mailgui, 'Khách hàng');     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
   // $mail->addCC('cc@example.com');
   // $mail->addBCC('bcc@example.com');
 
    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
 
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $subject = 'Mật khẩu của bạn đã được gửi thành công';
$encoded_subject = mb_encode_mimeheader($subject, 'UTF-8');
$mail->Subject = $encoded_subject;
    $mail->Body    = 'Mật khẩu là: '.$mk;
   // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
 
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
}

function xacnhandon($mailgui,$mk)
{
$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'sonbgt36@gmail.com';                 // SMTP username
    $mail->Password = 'avfyiywvuvufbwud';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
 
    //Recipients
    $mail->setFrom('sonbgt36@gmail.com', 'Mailer');
    $mail->addAddress($mailgui, 'Khách hàng');     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
   // $mail->addCC('cc@example.com');
   // $mail->addBCC('bcc@example.com');
 
    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
 
    //Content
    $mail->isHTML(true); 
                                     // Set email format to HTML
 $subject = 'Xác nhận đơn hàng đặt thành công';
$encoded_subject = mb_encode_mimeheader($subject, 'UTF-8');
$mail->Subject = $encoded_subject;
    $mail->Body    = 'Chi tiết là đơn hàng của bạn là: '.$mk;
   // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
 
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
}

function sendmailgiamgia($mailgui,$giamgia,$giam)
{
$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'sonbgt36@gmail.com';                 // SMTP username
    $mail->Password = 'avfyiywvuvufbwud';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
 
    //Recipients
    $mail->setFrom('sonbgt36@gmail.com', 'Mailer');
    $mail->addAddress($mailgui, 'Khách hàng');     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
   // $mail->addCC('cc@example.com');
   // $mail->addBCC('bcc@example.com');
 
    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
 
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $subject = 'Bạn nhận được mã giảm giá từ TP SHOP';
    $encoded_subject = mb_encode_mimeheader($subject, 'UTF-8');
    $mail->Subject = $encoded_subject;
    $mail->Body    = 'Mã giảm giá là: '.$giamgia.' - giảm giá '.$giam.'<br> Áp dụng cho tổng đơn hàng khi mua sắm tại TP SHOP';
   // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
 
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
}


?>