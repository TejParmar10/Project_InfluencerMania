<?php
session_start();
?>
<?php
include "header.php";
?>
<?php
include 'connect.php';
if(isset($_GET['id'])){
    $id=mysqli_real_escape_string($conn,$_GET['id']);
    $sql="select * from login where influencer_id=$id";
    $brand_name=$_GET['brand_name']; 
    $getData = $conn->query($sql);
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    $count=$row['counter'];
    $_SESSSION['brand_req']=true;
    // echo $count;
    $sql2 = "UPDATE login SET counter = counter + 1 WHERE influencer_id = $id";
    $result2=mysqli_query($conn,$sql2);
}
?>
<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exceptiooun;
//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.office365.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'tej.parmar@svkmmumbai.onmicrosoft.com';                     //SMTP username
    $mail->Password   = 'September@2020';                               //SMTP password
    $mail->SMTPSecure = "tls";            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('tej.parmar@svkmmumbai.onmicrosoft.com','Tej');
    $mail->addAddress($row['email'],$row['Name']);     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = "Hey! This is brand";
    $mail->Body    = 'Click on this link for the confirmation<a href="http://localhost/Project/seogram/html/index.php">Click Me!For verification</a>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
?>
<h1>Hey!This is <?php echo $brand_name?> and we have send a confirmation link to <?php echo $row['Name']?> please check your mailbox</h1>

<?php
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
<?php
include "footer.php";
?>