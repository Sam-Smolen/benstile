<?php include 'portal-config.php'?>
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
<body>
<nav class="navbar">
    <a class="navbar-brand" href="index.html">Ben's Tile & More</a>    
    <div class="navbar__bars"><i class="fa-solid fa-bars"></i></div>
    <div class="navbar__menu">
       <a href="/" class="navbar__menu--links">Home</a>
       <a href="/"
        class="navbar__menu--links">My work</a>
       <a href="/"
        class="navbar__menu--links">Our services</a>
       <a href="contactme.php"
       class="navbar__menu--links" id="button">Contact me</a>
    </div>
   </nav>
<?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "sam.smolen@icloud.com";  //place your/your client's email address here
        $toName = "Ben Smolen"; //place your client's name here
        $website = "Bens Tile and more";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
        </body>
</html>