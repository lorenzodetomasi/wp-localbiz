<?php
global $site_url;
if(function_exists('get_field')){
	$privacy_page_id = get_field('privacy_page_id', 'option');
	$cookies_page_id = get_field('cookies_page_id', 'option');
	$contact_page_id = get_field('contact_page_id', 'option');
	$disclaimer_page_id = get_field('disclaimer_page_id', 'option');
}
if(get_field('privacyResponsible', 'option')){
	$privacy_responsible_id = get_field('privacyResponsible', 'option')['ID'];
} elseif(get_field('privacyResponsible', $mainLocationID)) {
	$privacy_responsible_id = get_field('privacyResponsible', $mainLocationID)['ID'];
} else {
	$privacy_responsible_id = 1;
}
$privacy_responsible_type = get_option('privacy_responsible_type');
if($privacy_responsible_id){
	$privacy_responsible_data = get_userdata($privacy_responsible_id);
	if(get_field('name', 'user_'.$privacy_responsible_id)){
		$privacy_responsible_name = get_field('name', 'user_'.$privacy_responsible_id);
	} else {
		$privacy_responsible_name = $privacy_responsible_data->display_name;	
	}
	$privacy_responsible_address = get_user_meta($privacy_responsible_id, 'address', true)['address'];
	$privacy_responsible_email = get_userdata($privacy_responsible_id)->user_email;
} 
$analytics = get_option('analytics_name');
$mailing = get_option('mailing_name');