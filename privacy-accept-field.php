<?php
global $input_name_prefix, $privacy_page_id;
$acceptanceCheckedAttr = '';
$privacy_page_url = get_permalink($privacy_page_id);
if(get_field('acceptance', 'user_'.$user_ID) == 1){
	$acceptanceCheckedAttr = ' checked="checked"';
}
?>
<p class="question">
	<label class="field checkbox acceptance"><input name="acceptance" required="required" type="checkbox"<?php echo $acceptanceCheckedAttr; ?> /><span class="label"><span class="label-text"><?php printf(__('Hai letto e accetti l’<a href="%s" title="Leggi la nostra informativa sul trattamento dei dati personali">informativa privacy</a>', 'isotype'), $privacy_page_url); ?></span></span></label>
</p>