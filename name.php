<?php>

echo smtp_mailer('botlhetenasen.tseme@gmail.com','Hello Tseme' , $html);
function smtp_mailer($to,$subject,$msg) {
require_once("smtp/class.phpmailer.php");
$mail= new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug = 1;
$mail->SMTPAuth=true;
$mail->SMTPSecure ='TLS';
$mail->Host ="smtp.office365.com";
$mail->Port=587;
$mail->IsHTML=(true);
$mail->CharSet='UTF-8';
$mail->Username="";
$mail->Password="";
$mail->SetFrom("");
$mail->Subject=$subject;
$mail->Body=$msg;
$mail->AddAdress($to);
if(!$email->send())
{
    return 0 ;
}
else{
    return 1 ;
}

}

<?>