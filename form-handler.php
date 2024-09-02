<?php
$name = $_POST['name']
$vistor_email = $_POST['email']
$qualification = $_POST['qualification']
$message = $_POST['message']

$email_from='info@RamsTechSolutions.ac.za';

$email_subject='new form submission'

$email_body ="user Name: $name.\n".
            "user email: $visitor_email.\n".
            "user qualification: $qualification.\n".
            "user Message: $message.\n";


$to = 'Radzilanimpho@unitacsolutions.ac.za';

$headers ="from:$email_from \r\n";

$headers .="Reply-To:$visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html")
?>