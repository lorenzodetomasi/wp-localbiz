<?php
include_once('functions.php');
global $privacy_responsible_type, $privacy_responsible_name, $privacy_responsible_address, $privacy_responsible_email,
$privacy_dateModified, $privacy_page_id,
$analytics, $mailing, $adwords, $remarketing;
$responsibleLink = '<a href="#titolare"><em>Titolare del trattamento dei dati personali</em></a>';
$privacy_page_link = '<a href="'.get_permalink($privacy_page_id).'"><em>Privacy Policy</em></a>';
$dateModified = '24/05/2018';
?>
		<h2>Informativa sui cookie</h2>
		<p>In questa sezione troverai tutte le informazioni sui cookie installati attraverso questo sito e le indicazioni su come disabilitarli o gestirli. </p>
		<p>La presente nota informativa è resa, in conformità con molteplici ordinamenti legislativi, inclusi gli artt. 13 e 14 del Regolamento Generale per la protezione dei Dati dell’Unione Europea (<abbr class="acronym" lang="en" title="General Data Protection Regulation">GDPR</abbr>) 2016/679, d’ora in poi <em>Regolamento Privacy</em>.</p>
		<p id="data-aggiornamento">Data di aggiornamento: <?php echo $dateModified; ?></p>
	</header><!-- .header -->
	<div class="body page-padding-h">
		<section class="section-padding-bottom">
			<h1>Premessa</h1>
			<p>Crediamo fortemente nell’importanza della riservatezza dei dati e nella tutela dei diritti del consumatore. Per questo vogliamo spiegarti qual’è la nostra filosofia in termini di privacy e come funzionano le nostre applicazioni.</p>
			<p>Oltre a questa informativa, specifica sui cookie, ti invitiamo a leggere la nostra <?php echo $privacy_page_link; ?></p>
			<p>Eccetto dove diversamente specificato, questa informativa riguarda esclusivamente coloro che utilizzano il sito web <em><?php echo $site_url; ?></em>.</p>
			<p>L'informativa non è valida per altri siti web eventualmente consultabili attraverso i link in uscita. Il <?php echo $responsibleLink; ?> non è da considerarsi in alcun modo responsabile dei siti internet dei terzi</p>
			<p>La presente informativa è suddivisa per ogni sezione del sito e relativa a ogni specifico trattamento.</p>
			<nav>
				<h1 class="display-none">Indice</h1>
				<ul>
					<li><a href="#titolare">Titolare del trattamento dei dati personali</a></li>
					<li><a href="#cosa-sono-cookie">Cosa sono i cookie</a></li>
					<li><a href="#utilizzo-cookie">Utilizzo dei cookie</a></li>
					<li><a href="#cookie-utilizzati">Cookie utilizzati da questo sito</a></li>
					<li><a href="#come-dsabilitare-cookie">Come disabilitare i cookie</a></li>
					<li><a href="#modifiche">Modifiche all'informativa suli cookie</a></li>
				</ul>
			</nav>
		</section>
		<section id="titolare" class="section-padding-bottom">
			<h1>Titolare del trattamento dei dati personali</h1>
			<p>Responsabile del trattamento è <strong><?php echo $privacy_responsible_name; ?></strong>, residente in <?php echo $privacy_responsible_address; ?>.</p>
			<p><strong>Indirizzo email del Titolare del trattamento dei dati personali:</strong> <a href="mailto:<?php echo $privacy_responsible_email; ?>"><?php echo $privacy_responsible_email; ?></a></p>
		</section>
		<section id="cosa-sono-cookie" class="section-padding-bottom">
			<h1>Cosa sono i cookie?</h1>
			<p>I cookie sono file di testo che contengono pacchetti di informazioni che vengono memorizzati sul tuo computer o sul tuo dispositivo mobile tutte le volte che visiti un sito online attraverso un browser. Ad ogni successiva visita il browser invia questi cookie al sito web che li ha originati o a un altro sito. I cookie permettono ai siti di ricordare alcune informazioni per permetterti di navigare online in modo semplice e veloce.</p>
			<p>
				Ci sono due principali tipi di cookie: i cookie di sessione e cookie permanenti. <br />
				I <strong>cookie di sessione</strong> vengono eliminati dal computer automaticamente quando chiudi il browser, mentre <br />
				i <strong>cookie permanenti</strong> restano memorizzati sul tuo computer a meno che non siano eliminati o raggiungano la loro data di scadenza.
			</p>
		</section>
		<section id="utilizzo-cookie" class="section-padding-bottom">
			<h1>Utilizzo dei cookie</h1>
			<p>Il sito web <em><?php echo $site_url; ?></em> utilizza i cookie, anche di terze parti: utilizzandolo, l'utente dichiara di accettare e acconsentire all’ utilizzo dei cookie in conformità con i termini di uso espressi in questo documento.</p>
			<p>L’utilizzo di cookie da parte del <?php echo $responsibleLink; ?> si inquadra nella <?php echo $privacy_page_link; ?>.</p>
		</section>
		<section id="cookie-utilizzati" class="section-padding-bottom">
			<h1>Cookie utilizzati da questo sito</h1>
			<h2>Cookie tecnici (non richiedono consenso)</h2>
			<p>Il sito web <em><?php echo $site_url; ?></em> è basato sul <em lang="en">Content management system (cms) open source</em> <a href="https://www.wordpress.org"></a><em>WordPress.org</em></a> e ospitato su server su territorio italiano e/o europeo gestiti dall’hosting provider <?php echo $hosting_provider; ?>.</p>
			<p>Il sito web <em><?php echo $site_url; ?></em> utilizza i seguenti cookie tecnici, che non richiedono consenso e vengono installati automaticamente a seguito dell’accesso al sito, per le finalità indicate in relazione a ciascuno di essi.</p>
			<ul>
				<li><strong>cookie di sessione</strong> relativi ad attività strettamente necessarie al funzionamento del sito e all’erogazione del servizio;</li>
				<li><strong>cookie relativi ad attività di salvataggio delle preferenze e ottimizzazione</strong>;</li>
				<li><strong>cookie di statistica utilizzati direttamente dal gestore del sito</strong> per raccogliere informazioni in forma aggregata: utilizzati in forma anonima e senza possibilità di creare profilazioni;</li>
			</ul>
			<p><strong>Se lasci un commento</strong> sul nostro sito, puoi scegliere di salvare il tuo nome, indirizzo email e sito web nei cookie. Sono usati per la tua comodità in modo che tu non debba inserire nuovamente i tuoi dati quando lasci un altro commento. Questi cookie dureranno per un anno.<br /></p>
			<p>
				<strong>Se hai un account e accedi</strong> a questo sito, verrà impostato un cookie temporaneo per determinare se il tuo browser accetta i cookie. Questo cookie non contiene dati personali e viene eliminato quando chiudi il browser.<br />
				<strong>Quando effettui l'accesso</strong>, verranno impostati diversi cookie per salvare le tue informazioni di accesso e le tue opzioni di visualizzazione dello schermo. I cookie di accesso durano due giorni mentre i cookie per le opzioni dello schermo durano un anno. Se selezioni "Ricordami", il tuo accesso persisterà per due settimane. Se esci dal tuo account, i cookie di accesso verranno rimossi.
			</p>
			<p>
				<strong>Se sei un gestore o un autore del sito e modifichi o pubblichi un articolo</strong>, un cookie aggiuntivo verrà salvato nel tuo browser. Questo cookie non include dati personali, ma indica semplicemente l'ID dell'articolo appena modificato. Scade dopo 1 giorno.
			</p>			
			<h2>Cookie per cui è richiesto il consenso</h2>
			<p>Tutti i cookie diversi da quelli tecnici vengono installati o attivati solo a seguito del consenso espresso dall’utente la prima volta che visita il sito.</p>
			<h3>Cookie di terze parti</h3>
<?php 
if(in_array('Google Analytics (Anonymized IP)', $privacy_settings) or in_array('Google Analytics', $privacy_settings)){
?>
				<h4>Google Analytics <?php if(in_array('Google Analytics (Anonymized IP)', $privacy_settings)){ ?> con indirizzo IP anonimizzato<?php } ?></h4>
				<p>Questo sito web utilizza <a href="analytics.google.com">Google Analytics</a><?php if($analytics == 'Google Analytics (Anonymized IP)'){ ?> con indirizzo IP anonimizzato<?php } ?> per raccogliere informazioni circa l'utilizzo del sito web da parte degli utenti. Google Analytics genera informazioni statistiche e di altro genere attraverso cookie (cookie di statistica), memorizzati sui computer degli utenti.</p>
<?php 
	if(in_array('Google Analytics (Anonymized IP)', $privacy_settings)){
?>
				<p>L’anonimizzazione dell’indirizzo IP su questo sito web tronca l’indirizzo IP, nel rispetto della normativa UE sulla privacy.</p>
<?php
	}
?>
				<p>Le informazioni generate sono utilizzate per fare dei report sull’utilizzo del sito web, che ci permettono di migliorarlo costantemente.</p>
				<p>Conserviamo i tuoi dati per 26 mesi.</p>
				<p>Luogo del trattamento: Usa. <a href="https://www.google.com/intl/it/policies/privacy/">Privacy Policy di Google</a></p>
<?php
}
?>
<?php 
if(in_array('Google Fonts', $privacy_settings)){
?>
				<h4>Google Fonts</h4>
				<p>Questo sito web utilizza <a href="https://fonts.google.com/">Google Fonts</a> e le relative API per la visualizzazione di caratteri tipografici (contenuti esterni).</p>
				<p>Luogo del trattamento: Usa. <a href="https://www.google.com/intl/it/policies/privacy/">Privacy Policy di Google</a></p>
<?php
}
?>
<?php 
if(in_array('Google Maps', $privacy_settings)){
?>
				<h4>Google Maps</h4>
				<p>Questo sito web utilizza <a href="https://www.google.it/maps">Google Maps</a> e le relative API per la visualizzazione di mappe interattive (contenuti esterni) e per semplificare l'immissione di indirizzi postali e informazioni sulle attività locali.</p>
				<p>Utilizzando questo sito web, l’utente consente la raccolta, il trattamento e l’utilizzo dei dati raccolti automatiamente da Google Inc., i suoi rappresentanti e terze parti.</p>
				<p>Luogo del trattamento: Usa. <a href="https://www.google.com/intl/it/policies/privacy/">Privacy Policy di Google</a>, <a href="https://www.google.com/intl/it_it/help/terms_maps.html">Termini di servizio aggiuntivi di Google Maps/Google Earth</a></p>
<?php
}
?>
<?php 
if(in_array('YouTube', $privacy_settings)){
?>
				<h4>YouTube</h4>
				<p>Questo sito web utilizza YouTube per la visualizzazione di video (contenuti esterni).</p>
				<p>Luogo del trattamento: Usa. <a href="https://www.google.com/intl/it/policies/privacy/">Privacy Policy di Google</a></p>
<?php
}
?>
<?php
if(in_array('MailChimp', $privacy_settings)){
?>
				<p>Questo sito web utilizza <strong>MailChimp</strong> per l’impaginazione e l’invio delle newsletter, la gestione delle mailing list e per raccogliere informazioni circa l'utilizzo delle newsletter web da parte degli utenti.</p>
				<p>Le informazioni generate sono utilizzate per fare dei report sull’utilizzo delle newsletter.</p>
				<p>Luogo del trattamento: Usa. <a href="https://mailchimp.com/legal/privacy/">Privacy Policy</a>.</p>
<?php
}
?>
<!--
				<h2 class="h3">Cookie non utilizzati</h2>
				<ul>
					<li><strong>cookie di profilazione pubblicitaria gestiti direttamente dal <?php echo $responsibleLink; ?></strong> per l’invio di pubblicità, promozioni e offerte commerciali in linea con le preferenze manifestate dall’utente durante la navigazione: non utilizzati;</li>
					<li><strong>cookie di profilazione pubblicitaria gestiti da terze parti</strong> per erogare pubblicità basata sugli interessi manifestati attraverso la navigazione in internet (OBA): non utilizzati;</li>
					<li><strong>cookie di retargeting</strong> per l’invio di pubblicità a soggetti che hanno precedentemente visitato questo sito: non utilizzati;</li>
					<li><strong>cookie di social media</strong> per la condivisione di contenuti sui social media: non utilizzati. L’eventuale condivisione di news avviene per accesso diretto dell’utente ai propri profili social e il <?php echo $responsibleLink; ?> non è in grado di risalire a tali azioni;</li>
				</ul>
-->
			</section>
		<section id="come-disabilitare-cookie" class="section-padding-bottom">
			<h1>Come disabilitare i cookie</h1>
			<p>L'utente può<strong> disattivare i cookie</strong>, anche se <strong>rischia di perdere alcune delle funzionalità del sito</strong>. Ecco i link alle istruzioni per i browser più diffusi:</p>
			<ul>
				<li><a title="Google Chrome - cookie" href="https://support.google.com/chrome/answer/95647?hl=it" target="_blank">Google Chrome</a></li>
				<li><a title="Mozilla Firefox  - cookie" href="https://support.mozilla.org/it/kb/Gestione%20dei%20cookie" target="_blank">Mozilla Firefox</a></li>
				<li><a title="Microsoft Internet Explorer - cookie" href="https://windows.microsoft.com/it-it/internet-explorer/delete-manage-cookies#ie=ie-11" target="_blank">Microsoft Internet Explorer</a></li>
				<li><a title="Safari (iOS) - cookie" href="https://support.apple.com/it-it/HT201265" target="_blank">Safari (iOS)</a></li>
			</ul>
			<p>Per saperne di più riguardo ai cookie e come gestire o disabilitare quelli di terze parti o di marketing/retargeting, visita <a href="https://www.youronlinechoices.com">www.youronlinechoices.com</a>.</p>
			<p>Per disabilitare i cookie analitici e per impedire a Google Analytics di raccogliere dati sulla tua navigazione, puoi scaricare il Componente aggiuntivo del browser per la disattivazione di Google Analytics: <a href="https://tools.google.com/dlpage/gaoptout">https://tools.google.com/dlpage/gaoptout</a>.</p>
		</section>
		<section id="modifiche" class="section-padding-bottom">
			<h1>Modifiche all'informativa sui cookie</h1>
			<p>Il <?php echo $responsibleLink; ?> si riserva il diritto di modificare, aggiornare, aggiungere o rimuovere parti della presente informativa a propria discrezione e in qualsiasi momento. La persona interessata è tenuta a verificare periodicamente le eventuali modifiche. Al fine di facilitare tale verifica l'informativa conterrà l'indicazione della <a href="#data-aggiornamento">data di aggiornamento dell’informativa</a>. L'utilizzo del sito, dopo la pubblicazione delle modifiche, costituirà accettazione delle stesse.</p>
			<p>Ultima modifica: <?php echo $dateModified; ?></p>
		</section>
	</div>