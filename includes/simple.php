<?php
/**
 * simple.php is a postback application designed to provide a 
 * contact form for users to email our clients.  
 * 
 * simple.php provides a typical feedback form for a website
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 2 2019/10/13
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php  
 * @todo none
 */

#--------------END CONFIG AREA ------------------------#
?>

	<!-- START HTML FORM -->
	<div class="container">
        <div class="text">Contact Form</div>
		<form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">
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
        
        <div class="g-recaptcha" data-sitekey="<?=$siteKey;?>"></div>
        
        <div class="form-row submit-btn">
            <div class="input-data">
                <div class="inner"></div>
                <input type="submit" value="submit">
        </div>
    </div>
	</form>
	<!-- END HTML FORM -->
