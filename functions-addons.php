<?php
// #Google
$google_api_key = 'your-api-key';
$googlemaps_api_key = $google_api_key;

// #Organization
include_once('organization/cptui.php');
include_once('organization/acfpro.php');

// #Locations
include_once('locations/acfpro.php');
// Uncomment if you list locations in all pages, i.e. in the footer
// $locations = new WP_Query( array( 'post_type' => 'sedi', 'posts_per_page' => 0 ) );

// #Legal
// - Privacy
// - Cookies
// - Disclaimer
// - Copyright
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
include_once('legal/acfpro.php');
?>