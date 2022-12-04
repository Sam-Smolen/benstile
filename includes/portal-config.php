<?php

/*
portal-config.php

Used to store all of our IT162 configuration information

*/

ob_start();

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');


//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;
//die;



?>
