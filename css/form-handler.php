<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['Subjects'];
$message = $_POST['Message'];

$email_from = 'thapagiriraj300@gmail.com';

$email_subject = 'New Form Submission';

$email_body = "User Name:$name.\n".
              "User Email:$visitor_email.\n".
               "Subject:$subject.\n".
                   "User Message:$message.\n";

$to = 'thapagiriraj300@gmail.com';

$headers = "From:$email_from \r\n";

$headers .= "Replay-To:$visitor_email \r\n";


header("Location: Contact.html");
?>