<?php
$to = 'maryjane@email.com';
$subject = $_REQUEST['subject'];
$message = $_REQUEST['Message']; 
// Sending email
if(mail($to, $subject, $message)){
    echo 'Your mail has been sent successfully.';
} else{
    echo 'Unable to send email. Please try again.';
}
?>
