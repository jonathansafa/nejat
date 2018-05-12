<?php
if(isset($_POST['submit'])) {
 
$to = "jonathansafa@yahoo.com";
$subject = "Reza Safa Ministries Contact Form";
$name_field = $_POST['name'];
$phone_field = $_POST['phone'];
$email_field = $_POST['email'];
$subject_field = $_POST['subject'];
$comments_field = $_POST['comments'];
 


foreach($_POST['check'] as $value) {
$check_msg .= "Checked: $value\n";
}

$body = "From: $name_field\n Phone: $phone_field\n Phone: $subject_field\n E-Mail: $email_field\n Message: $comments_field\n $check_msg";
 
if(mail($to, $subject, $body));
header('Location: http://www.rezasafa.com/contact/thankyou.html');
 
}
?>