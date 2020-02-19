<?php
  $name = $_Post['name'];
  $visitor_email = $_Post['email'];
  $subject= $_Post['subject'];
  $message = $_Post['message'];

  $email_from = 'currydoya@gmail.com';

  $email_subject = "User Subject: $subject"

  $email_body = "User Name : $name.\n".
                  "User Email: $visitor_email.\n".
                      "User Message: $message.\n";

  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $subject = $_POST['subject'];
    $message= $_POST['message'];

    $email_from = 'admin@idnibesoluside.com';

    $email_subject = "Form Submission"

    $email_body = "You have received an e-mail from: \n\n" 
                    "Name : $name.\n".
                      "Email: $visitor_email.\n".
                        "Subject: $subject.\n".
                          "Message: $message.\n";

    $mailTo = "begawan.mariadi@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To $visitor_email \r\r";

    mail($mailTo, $email_subject, $email_body, $headers);
    header("Location: index.html");
  }

?>