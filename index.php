<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
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
    <?php
        if(!empty($_POST["send"])){
            $userName = $_POST["userName"];
            $userEmail = $_POST["userEmail"];
            $userPhone = $_POST["userPhone"];
            $userSubject = $_POST["userSubject"];
            $userMessage = $_POST["userMessage"];
            $toEmail = "davidgodfrey365@gmail.com";

            $mailHeader = "Subject: " . $userSubject .
            "\r\n Email: " . $userEmail .
            "\r\n Name: " . $userName .
            "\r\n Phone: " . $userPhone .
            "\r\n Message: " . $userMessage . "\r\n";

            if(mail($toEmail, $userSubject, $mailHeaders)){
                $message = "Message Sent Successfully";
            }
        }


    ?>
<div class="form-container">
                <form action="" method="post" name="emailContact">
                    <div class="input-row">
                        <label> Name <em>*</em></label>
                        <input type="text" name="userName" required>
                    </div>
                    <div class="input-row">
                        <label> Email <em>*</em></label>
                        <input type="email" name="userEmail" required>
                    </div>
                    <div class="input-row">
                        <label> Phone <em>*</em></label>
                        <input type="tel" name="userPhone" required>
                    </div>
                    <div class="input-row">
                        <label> Subject <em>*</em></label>
                        <input type="text" name="userSubject" required>
                    </div>
                    <div class="input-row">
                        <label> Message <em>*</em></label>
                        <textarea 
                        name="userMessage" 
                        required
                        >
                    </textarea>
                    </div>
                    <div  id="submit" class="input-row">
                        <input type="submit" name="send" value="Submit">
                        <?php if(!empty($message)){ ?>
                        <div class="success">
                            <strong><i class="fa-solid fa-circle-check"></i> <?php echo $message; ?></strong>
                        </div>
                        <?php } ?>
                    </div>
                </form>
            </div>
</body>
</html>