<?php     
date_default_timezone_set('Europe/Athens');
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->CharSet  = 'utf-8';
// $mail->SMTPDebug = 2;                               // Enable verbose debug output
// $mail->Debugoutput = 'html';

// Assigning data from the $_POST array to variables     
$name = $_POST['sender_name'];     
$mail_from = $_POST['sender_email'];    
$message = $_POST['sender_message'];       

// Construct email subject     
$subject = 'Mesajın geldigi musteri: ' . $name;       
// Construct email body     
$body_message = '<b>From:</b> ' . $name . "\r\n" . "<br>";     
$body_message .= '<b>E-mail:</b> ' . $mail_from . "\r\n" . "<br>"; 
$body_message .= '<b>Message:</b> ' . "<br>" . $message . "<br>"; 

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.1and1.com';                       // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'alihan@globalgenetik.com';         // SMTP username
$mail->Password = 'Ggt2014rocks';                     // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->From = $mail_from;
$mail->setFrom($mail_from);
$mail->addAddress('alihan@globalgenetik.com');        // Add a recipient
$mail->addReplyTo($mail_from, 'Information');

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $subject;
$mail->Body    = $body_message;


// if(!$mail->send()) {
//     echo 'Mesaj gonderilememistir.' . '<br>';
//     echo 'Eposta hatasi: ' . $mail->ErrorInfo;
// } else {
//     echo 'Mesaj gonderilmistir.';
// }

if ($mail->send()){ ?>        
        <script language="javascript" type="text/javascript">         
        alert('Mesaj icin tesekkur ederiz. Tarafanizla en kisa surede iletisime gecilecektir.');                    
    window.location = 'index.html';         
        </script>    
         <?php } else { ?>     
         
     <script language="javascript" type="text/javascript">         
     alert('Mesaj gonderilememistir. Lutfen telefon ile iletisime geciniz.');            
     window.location = 'index.html';     
     </script>     
<?php }


		   
?>