<?php
if ( is_user_logged_in() ) {
?>
			<section class="box background-color1">
				<h1><?php _e('Your privacy settings','isotype'); ?></h1>
				<fieldset>
					<legend><?php _e('Cookies','isotype'); ?></legend>
				</fieldset>
<?php
	if(get_option('mailing_name') !== 'false'){
?>
				<fieldset>
					<legend><?php _e('Newsletter','isotype'); ?></legend>
					<label class="field"><?php _e('Send Newsletter to','isotype'); ?> <input type="email" placeholder="<?php _e('your@email.eu','isotype'); ?>" /></label>
				</fieldset>
<?php
	}
?>
			</section>
<?php
}
?>