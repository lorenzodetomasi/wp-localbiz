<?php
global $site_url;
?>
<section id="acceptance">
	<form action="<?php echo $site_url; ?>/grazie/" method="POST" name="privacy-acceptance">
		<input type="hidden" name="_ajax" value="#submitted" />
		<h1>Il tuo consenso</h1>
		<fieldset class="question">
			<legend><?php _e('Your company fiscal data', 'isotype'); ?></legend>
			<p>
				<label class="field">
					<span class="label"><?php _e('Legal name', 'isotype'); ?></span>
					<input type="text" name="legal_name" />
				</label>
				<label class="field postal-address">
					<span class="label"><?php _e('Postal address', 'isotype'); ?></span> <input id="autocomplete" name="postal-address" type="text" class="flex1" placeholder="piazza del Colosseo, 1, Roma RM, Italia" />
				</label>
			</p>
			<p>
				<label class="field vat_id">
					<span class="label"><?php _e('VAT ID', 'isotype'); ?></span>
					<input type="text" name="vat_id" />
				</label>
				<label class="field tax_id">
					<span class="label"><?php _e('Tax ID', 'isotype'); ?></span> <input name="tax_id" type="text" />
				</label>
			</p>
		</fieldset>
		<fieldset>
			<legend><?php _e('Your personal data', 'isotype'); ?></legend>
			<p class="question">
				<label class="field">
					<span class="label"><?php _e('Full name', 'isotype'); ?></span>
					<input type="text" name="name" />
				</label>
				<label class="field">
					<span class="label"><?php _e('Role', 'isotype'); ?></span>
					<input type="text" name="role" />
				</label>
			</p>
			<p class="question">
				<label class="field">
					<span class="label"><?php _e('Your email', 'isotype'); ?></span>
					<input type="email" name="email" required placeholder="<?php _e('your@email.eu', 'isotype'); ?>" /></label>
			</p>
		</fieldset>
		<p>Presa conoscenza della sopra estesa informativa</p>
		<ul>
			<li class="question">
				<label class="field radio"><input type="radio" name="acceptance12" /><span class="label-text">Presti il consenso</span></label>
				<label class="field radio"><input type="radio" name="acceptance12" /><span class="label-text">Neghi il consenso</span></label>
				al trattamento dei tuoi dati per le finalità di cui ai punti 1. e 2., così come indicato nell’informativa di cui sopra.
			</li>
			<li class="question">
				<label class="field radio"><input type="radio" name="acceptance3it" /><span class="label-text">Presti il consenso</span></label>
				<label class="field radio"><input type="radio" name="acceptance3foreign" /><span class="label-text">Neghi il consenso</span></label>
				al trattamento dei tuoi dati, ivi compresa la comunicazione a terzi nel territorio dello Stato, per le finalità di cui al punto 3., così come indicato nell’informativa di cui sopra.
			</li>
			<li class="question">
				<label class="field radio"><input type="radio" name="acceptance1" /><span class="label-text">Presti il consenso</span></label>
				<label class="field radio"><input type="radio" name="acceptance1" /><span class="label-text">Neghi il consenso</span></label>
				alla comunicazione a terzi e al trasferimento all’estero dei tuoi dati, per le finalità indicate al punto 3. dell’informativa di cui sopra.
			</li>
		</ul>
		<fieldset>
			<legend><?php _e('Newsletter', 'isotype'); ?></legend>
			<input type="hidden" name="_mailchimp_form_action" value="<?php echo get_option('mailchimp_form_action'); ?>" />
			<label class="field checkbox"><input type="checkbox" name="no_website" onclick="jQuery('#wants_newsletter').slideToggle();" /><span class="label">
				<span class="label-text">Iscriviti alla newsletter di ISOTYPE.ORG</span>
				<span class="help small">Potrai annullare autonomamente l’iscrizione, in qualsiasi momento, inviando una semplice e-mail.</span>
			</span></label>
			<p id="wants_newsletter" style="display: none;">
				<label class="field">
					<span class="label">
						<span class="text"><?php _e('Email ', 'isotype'); ?></span>
						<span class="help small">L'indirizzo a cui vuoi ricevere la nostra newsletter, se diverso dalla tua email.</span>
					</span>
					<input type="email" name="newsletter_email" placeholder="<?php _e('other@email.eu', 'isotype'); ?>" /></label>
			</p>
		</fieldset>
		<p>
			<button type="submit" class="button"><span class="label"><?php _e('Send', 'isotype'); ?></span> <i class="material-icons right">send</i></button>
		</p>
	</form>
</section>