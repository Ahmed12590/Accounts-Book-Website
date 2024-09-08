<?php
echo $name = $_POST['name'];
echo $email = $_POST['email'];
echo $phone = $_POST['phone'];
echo $eincome = $_POST['employee-income'];
echo $etax = $_POST['employee-taxes'];
echo $gincome = $_POST['gross-income'];
echo $expenses = $_POST['expenses'];


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the value of the select field
    $selectedOption = $_POST['tax-options'];
    
    // Process or display the selected value
    echo "Selected option: " . htmlspecialchars($selectedOption);
}


//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'accountsbook.co';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'info@accountsbook.co';                     //SMTP username
    $mail->Password   = 'GJB#)awuCGK2';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('info@accountsbook.co', $name);
    $mail->addAddress('info@accountsbook.co', 'AccountsBook');     //Add a recipient
    // $mail->addReplyTo('afaqkhan20@yahoo.com', 'Reply-To Name');     //reply to address


    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'from calculator';
    $mail->Body    = "Name = ".$name . '<br>' .
     "Email = ".$email . '<br>'.
     "phone = ". $phone. '<br>'.
     "Empolyee income = ". $eincome . '<br>'.
     "Employee Taxes = ". $etax . '<br>'.
     "Gross Income = ". $gincome . '<br>'.
     "Expenses = ". $expenses . '<br>'      ;





    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
    header ("Location: calculator.html");

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>

?>