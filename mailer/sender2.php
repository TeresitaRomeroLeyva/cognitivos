<?php
require 'class.phpmailer.php';
require 'class.smtp.php';   
			
if(!isset($_POST['modal_name1']) || !isset($_POST['modal_email1']) || !isset($_POST['modal_message1']))
{	
	echo json_encode(array("message" => "Faltan campos!", "fields" => $_POST));
	exit(); 
}

if($_POST['modal_name1'] == "" || $_POST['modal_email1'] == "" ||$_POST['modal_message1'] == "")
{	
	echo json_encode(array("message" => "Faltan campos!","fields" => $_POST));
	exit();
}

$name = $_POST['modal_name1'];
$email = $_POST['modal_email1'];
$m_message = $_POST['modal_message1'];	


//who recives
$customer_fullname = "MisClientes"; 
$customer_email = "romeroteresita.10@gmail.com"; //
//

$message = file_get_contents('contents3.html'); 

$message = str_replace('%mailvisitor%', $email, $message);

$message = str_replace('%namevisitor%', $name, $message);

$message = str_replace('%message%', $m_message, $message);



//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Tell PHPMailer to use MAIL
//$mail->isMail();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
//Set the hostname of the mail server
$mail->Host = "tls://email-smtp.us-east-1.amazonaws.com";
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 587;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication
$mail->Username = "AKIAI5YDATZLXW2ITSAQ";
//Password to use for SMTP authentication
$mail->Password = "AtOTw7l12q0LMyOQNTq7ugwwS7xw0S9ppUzCGw4dsYDw";


//Set who the message is to be sent from
$mail->setFrom('soporte@misclientes.net', 'MisClientes');//must be a verified email address


//Set an alternative reply-to address
//$mail->addReplyTo($email, $email);
//Set who the message is to be sent to
$mail->addAddress($customer_email, $customer_fullname);
//$mail->AddCC('a.acosta@somos.mx', 'SOMOS Multimedia®');

//Set the subject line
$mail->Subject = ' solicitud de soporte MisClientes';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML($message);
//Replace the plain text body with one created manually
$mail->AltBody = 'Tiene un nuevo mensaje! '.$name.','.$email.' simplemente responde este email.';
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');
// Activo condificacción utf-8
$mail->CharSet = 'UTF-8';


//send the message, check for errors
if (!$mail->send()) {
    echo json_encode(array("message" => "Ha ocurrido un error, pruebe de nuevo más tarde!","errorfound"=>true));
} else {
    echo json_encode(array("message" => "Solicitud enviada, nos pondremos en contacto a la brevedad.","errorfound"=>false));
}