<?php
global $privacy_page_id, $cookies_page_id, $disclaimer_page_id, $contact_page_id;
if($privacy_page_id or $cookies_page_id or $disclaimer_page_id or $contact_page_id){
?>
<ul>
<?php
	if($privacy_page_id){
?>
	<li><a href="<?php echo get_page_link($privacy_page_id); ?>" title="<?php _e('Leggi la nostra informativa sulla Privacy','isotype'); ?>"><?php echo get_the_title($privacy_page_id); ?></a></li>
<?php
	}
?>
<?php
	if($cookies_page_id){
?>
	<li><a href="<?php echo get_page_link($cookies_page_id); ?>" title="<?php _e('Leggi la nostra informativa sui Cookie','isotype'); ?>"><?php echo get_the_title($cookies_page_id); ?></a></li>
<?php
	}
?>
<?php
	if($disclaimer_page_id){
?>
	<li><a href="<?php echo get_page_link($disclaimer_page_id); ?>" title="<?php _e('Leggi le nostre note legali','isotype'); ?>"><?php echo get_the_title($disclaimer_page_id); ?></a></li>
<?php
	}
?>
<?php
	if($contact_page_id){
?>
	<li><a href="<?php echo get_page_link($contact_page_id); ?>" title="<?php _e('I nostri contatti e le nostre sedi','isotype'); ?>"><?php echo get_the_title($contact_page_id); ?></a></li>
<?php
	}
?>
</ul>
<?php
}
?>