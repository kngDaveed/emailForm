<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$mailheader = "From:".$name."<" .$email.">\r\n";

$recipient = "davidgodfrey365@gmail.com";


mail($recipient, $subject, $message, $mailheader)
or die("Error!");

echo'


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css" />
    <title>Email Submission With PHP</title>

    <!-- fontawesome icon link -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"

    
    />
  </head>
  <body>
    <div class="lead">
        <div class="header">
            <h1 class="">
              Mail Sent successfully, Thank you for contacting me. We will try to get back to you as soon as
              possible!
            </h1>
            <h4 class="link">
              <button onclick="location.href='index.html'" class="">
                Return to Homepage <i class="fa-solid fa-rotate-left"></i>
              </button>
            </h4>
          </div>
    </div>
  </body>
</html>


'


?>