<?php

    $_POST = json_decode(array_keys($_POST)[0], true);
    //$_POST = (array) json_decode(file_get_contents('php://input'), true);
        //$array = $obj->search($_POST['query']);

        //echo json_encode(array_values($array));

    // Check for empty fields
    $name = $_POST['name'];
    $email_address = $_POST['email'];
    $phone = $_POST['phone'];
    $situation = $_POST['situation'];
    $legalaid = $_POST['legalaid'];

    // Create the email and send the message
    $to = 'faizalroy2019@gmail.com';
    $email_subject = "Website Contact Form:  $name";
    $email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nSituation:\n$situation\n\nLegal Aid:\n$legalaid";
    $headers = "From: noreply@protect-my-child.ca\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
    $headers .= "Reply-To: $email_address";
    mail($to,$email_subject,$email_body,$headers);
    return true;
  ?>