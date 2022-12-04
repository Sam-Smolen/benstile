<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="stylesheet.css" type="text/css" charset="utf-8" />
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/0407a525c9.js" crossorigin="anonymous"></script>
</head>
<body id="secondPage">
    <!-- navbar -->

       <!-- About section -->
     
    <!-- contact form -->
    <div class="container">
        <div class="text">Contact Form</div>
        <form action="contactme.php" method="post">
            <div class="form-row">
                <div class="input-data">
                    <input type="text" name="firstname" required>
                    <div class="underline"></div>
                    <label>First name</label>
                </div>
                <div class="input-data" >
                    <input type="text" name="lastname" required>
                    <div class="underline"></div>
                    <label>Last name</label>
                </div>
            </div>
            <div class="form-row">
                <div class="input-data">
                    <input type="text" name="email" required>
                    <div class="underline"></div>
                    <label>Email Adress</label>
                </div>
                <div class="input-data">
                    <input type="text" name="phone number"required>
                    <div class="underline"></div>
                    <label>Phone no</label>
                </div>
            </div>
            <div class="form-row">
                <div class="input-data textarea">
                    <textarea name="message" cols="30" rows="10" required></textarea>
                    <div class="underline"></div>
                    <label>Write your message here</label>
            </div>
        </div>
        
        <div class="g-recaptcha" data-sitekey="6Lc9dJQiAAAAAKVsvz3Jij4g17f23VfcEIsgbQo8"></div>
        
        <div class="form-row submit-btn">
            <div class="input-data">
                <div class="inner"></div>
                <input type="submit" value="submit">
        </div>
    </div>
        </form>
        <div class="status">
<!-- recaptcha php -->
<?php
    if(isset($_POST['submit']))
    {
        $First_name = $_POST['firstname'];
        $Last_name = $_POST['lastname'];
        $user_email = $_POST['email'];
        $phone = $_POST['phone'];
        $user_message = $_POST['message'];

        $email_from = 'sam.smolen15@gmail.com';
        $email_subject = 'New Form Submission';
        $email_body = "Firstname: $First_name.\n".
                        "Lastname: $Last_name.\n".
                        "Email id: $user_email.\n".
                        "Phone No: $phone.\n".
                        "User Message: $user_message.\n";
        
        $to_email ="sam.smolen@icloud.com";
        $headers = "From: $email_from \r\n";
        $headers .= "Reply: $email_from \r\n";


        $secretKey = "6Lc9dJQiAAAAABGR8YYWQPDEe4rO4oUwIpFtgx3a";
        $responseKey = $_POST['g-recaptcha-response'];
        $UserIP = $_SERVER['REMOTE_ADDR'];
        $url = "https://www.google.com/recaptcha/api/siteverify? METHOD: POST
        secret=$secretKey&response=$responseKey&remoteip=$userIP";

        $response = file_get_contents($url);
        $response = json_decode($response);

        if ($response->success)
        {
            mail($to_email,$email_subject,$email_body,$headers);
            echo "Message sent successfully";
        }
        else
        {
            echo "<span>Invalid Captcha, Please Try Again</span>";
        }
    }
    ?>
    
    </div>
    <!--end recaptcha php -->
    <!-- footer -->

</body>
</html>