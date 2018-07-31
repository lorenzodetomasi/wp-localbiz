<?php
// 1. Copy this folder (wp-privacy) in wp-content/themes/your-theme/
// 2. Copy the following code in wp-content/themes/your-theme/functions.php
// 3. Edit the variable values
// Privacy
$privacy_dateModified = '24/10/2017';
$privacy_settings = array(
	'WordPress Comments', 
	'Gravatar', 
//	'Google Analytics', 
	'Google Analytics (Anonymized IP)', 
	'Google Fonts', 
	'Google Maps',
//	'YouTube', 
	'Newsletter',
//	'MailChimp', 
//	'Google Adwords', 
//	'Remarketing', 
//	'Tawk.to',
);
//$hosting_provider = '<a href="http://www.register.it">Register.it</a>';
$hosting_provider = '<a href="http://www.tophost.it">TopHost.it</a>';
//$hosting_provider = '<a href="http://www.artera.it">Artera.it</a>';
include_once('privacy/functions.php');
?>