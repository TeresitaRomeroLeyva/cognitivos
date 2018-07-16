<?php
require 'class.phpmailer.php';
require 'class.smtp.php';   
			
if(!isset($_POST['modal_name']) || !isset($_POST['modal_email']) || !isset($_POST['modal_phone']) || !isset($_POST['modal_message']) || !isset($_POST['modal_company'])

	|| !isset($_POST['modal_how']) || !isset($_POST['modal_supporters']))
{	
	echo json_encode(array("message" => "Faltan campos!", "fields" => $_POST));
	exit(); 
}

if($_POST['modal_name'] == "" || $_POST['modal_email'] == "" || $_POST['modal_phone'] == "" || $_POST['modal_message'] == "" || $_POST['modal_company'] == ""
	|| $_POST['modal_how'] == "" || $_POST['modal_supporters'] == "")
{	
	echo json_encode(array("message" => "Faltan campos!","fields" => $_POST));
	exit();
}

$name = $_POST['modal_name'];
$email = $_POST['modal_email'];
$phone = $_POST['modal_phone'];
$m_message = $_POST['modal_message'];
$company = $_POST['modal_company'];
$media_used = $_POST['modal_how'];
$supporters = $_POST['modal_supporters'];


//who recives
$customer_fullname = "MailMe"; 
$customer_email = "a.acosta@somos.mx"; //ventas@misclientes.net
//

$message = file_get_contents('contents2.html'); 

$message = str_replace('%mailvisitor%', $email, $message);
$message = str_replace('%telvisitor%', $phone, $message); 
$message = str_replace('%namevisitor%', $name, $message);
$message = str_replace('%companyvisitor%', $company, $message);
$message = str_replace('%message%', $m_message, $message);

$message = str_replace('%media%', $media_used, $message);
$message = str_replace('%supporters%', $supporters, $message);


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
$mail->Subject = 'SOMOS Multimedia® solicitud de cotización MailMe';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML($message);
//Replace the plain text body with one created manually
$mail->AltBody = 'Tiene un nuevo mensaje! '.$name.' Está interesado en solicitar una cotización! dejó; su correo electronico: '.$email.', esta esperando a que lo contacte por email. Es muy sencillo, simplemente responde este email.';
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