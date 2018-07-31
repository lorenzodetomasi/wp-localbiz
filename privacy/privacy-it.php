<?php
include_once('functions.php');
global $site_url, $privacy_responsible_name, $privacy_responsible_address, $privacy_responsible_email,
$privacy_dateModified, $cookies_page_id,
$remarketing;
$responsibleLink = '<a href="#titolare"><em>Titolare del trattamento dei dati personali</em></a>';
$cookieLink = '<a href="#cookie"><em>Cookie</em></a>';
$cookies_page_link = '<a href="'.get_permalink($cookies_page_id).'"><em>Cookie Policy</em></a>';
$privacy_dateModified = DateTime::createFromFormat('d/m/Y', $privacy_dateModified);
$dateModified = DateTime::createFromFormat('d/m/Y', '24/05/2018');
if($dateModified > $privacy_dateModified){
 	$privacy_dateModified = $dateModified;
}
?>
		<h2>Informativa per la tutela dei dati personali</h2>
		<p>La presente nota informativa è resa, in conformità con molteplici ordinamenti legislativi, inclusi gli artt. 13 e 14 del Regolamento Generale per la protezione dei Dati dell’Unione Europea (<abbr class="acronym" lang="en" title="General Data Protection Regulation">GDPR</abbr>) 2016/679, d’ora in poi <em>Regolamento Privacy</em>.</p>
		<p id="data-aggiornamento">Data di aggiornamento: <?php echo $privacy_dateModified->format('d/m/Y'); ?></p>
	</header><!-- .header -->
	<div class="body">
		<section class="section-padding-bottom">
			<h1>Premessa</h1>
			<p>Crediamo fortemente nell’importanza della riservatezza dei dati e nella tutela dei diritti del consumatore. Per questo vogliamo spiegarti qual è la nostra filosofia in termini di privacy e come funzionano le nostre applicazioni.</p>
			<p>Il sito web <em><?php echo $site_url; ?></em> <strong>raccoglie alcuni dati personali</strong> dei propri utenti, con modalità informatiche e/o telematiche e/o cartacee, e li <strong>condivide con terze parti</strong>.</p>
			<p>In particolare:</p>
			<ul>
				<li>per rendere il sito più usabile e permettervi una migliore navigazione, <strong>utilizza i <?php echo $cookieLink; ?></strong>.</li>
				<li>per migliorare l’esperienza d’uso degli utenti, <strong>raccoglie dati di utilizzo</strong>.</li>
				<li>per rispondere alle domande, alle richieste e alle esigenze degli utenti, ricontattandoli, <strong>raccoglie email, numero di telefono e altre informazioni necessarie o utili allo scopo</strong>.</li>
			</ul>
			<p>Eccetto dove diversamente specificato, questa informativa privacy riguarda esclusivamente coloro che utilizzano il sito web <em><?php echo $site_url; ?></em>.</p>
			<p>L'informativa non è valida per altri siti web eventualmente consultabili attraverso i link in uscita. Il <?php echo $responsibleLink; ?> non è da considerarsi in alcun modo responsabile dei siti internet dei terzi</p>
			<p>Il Regolamento Privacy richiede che il trattamento dei dati dell’Utente sia improntato ai principi di correttezza, liceità, trasparenza e che tuteli la riservatezza e i diritti dei singoli interessati.</p>
			<p>La presente informativa è suddivisa per ogni sezione del sito e relativa a ogni specifico trattamento.</p>
			<nav>
				<h1 class="display-none">Indice</h1>
				<ul>
					<li><a href="#titolare">Titolare del trattamento dei dati personali</a></li>
					<li><a href="#tipi-dati">Tipi di dati raccolti</a></li>
					<li><a href="#luogo-trattamento">Luogo di trattamento dei dati</a></li>
					<li><a href="#modalita">Modalità di trattamento e conservazione dei dati</a></li>
					<li><a href="#base-giuridica">Base giuridica del trattamento</a></li>
					<li><a href="#periodo">Periodo di conservazione dei dati</a></li>
					<li><a href="#finalita-trattamento">Finalità del trattamento dei dati raccolti</a></li>
					<li><a href="#cookie">Cookie</a></li>
					<li><a href="#strumenti-contatto">Strumenti di contatto</a></li>
					<li><a href="#commenti">Commenti</a></li>
					<li><a href="#gravatar">Gravatar</a></li>
					<li><a href="#media">Media</a></li>
					<li><a href="#diritti">Diritti degli utenti</a></li>
					<li><a href="#modifiche">Modifiche all'informativa sulla privacy</a></li>
				</ul>
			</nav>
		</section>
		<section id="titolare" class="section-padding-bottom">
			<h1>Titolare del trattamento dei dati personali</h1>
			<p>Responsabile del trattamento è <strong><?php echo $privacy_responsible_name; ?></strong>, residente in <?php echo $privacy_responsible_address; ?>.</p>
			<p><strong>Indirizzo email del Titolare del trattamento dei dati personali:</strong> <a href="mailto:<?php echo $privacy_responsible_email; ?>"><?php echo $privacy_responsible_email; ?></a></p>
		</section>
		<section id="tipi-dati" class="section-padding-bottom">
			<h1>Tipi di dati raccolti</h1>
			<p>Il sito web <em><?php echo $site_url; ?></em> raccoglie, in modo autonomo o tramite terze parti, con modalità informatiche e/o telematiche e/o cartacee, i seguenti tipi di dati personali dei propri utenti:</p>
			<ul>
				<li><strong>Dati personali</strong>, ovvero le informazioni (compreso un numero di identificazione personale) che identificano o rendono identificabile una persona fisica, anche indirettamente e che possono fornire dettagli sulle sue caratteristiche, le sue abitudini, il suo stile di vita, le sue relazioni personali ecc.</li>
				<li><strong>Dati identificativi</strong>, ovvero i dati personali che permettono l'identificazione diretta di una persona fisica, come i dati anagrafici (ad esempio: nome e cognome), l’indirizzo email, il numero di telefono, le immagini ecc.</li>
				<li><strong>Dati di utilizzo</strong>, raccolti automaticamente durante la navigazione di questo sito web.</li>
				<li>
					<strong><?php echo $cookieLink; ?></strong>, ovvero righe di codice memorizzate dal vostro browser per eseguire autenticazioni automatiche, tracciatura di sessioni e memorizzazione di informazioni specifiche riguardanti gli utenti che accedono al server. <a title="Pagina “Cookie” su Wikipedia in italiano" href="https://it.wikipedia.org/wiki/Cookie">Maggiori informazioni</a> su Wikipedia.
				</li>
			</ul>
			<p>L’utente si assume la responsabilità dei <strong>dati personali di terzi</strong> pubblicati o condivisi tramite questo sito web e dichiara di avere il diritto di comunicarli o diffonderli, liberando il <?php echo $responsibleLink; ?> da qualsiasi responsabilità verso terzi.</p>
			<p>I dati personali possono essere <strong>forniti volontariamente dall’utente</strong> attraverso gli <a href="#strumenti-contatto">strumenti di contatto</a> o <strong>raccolti automaticamente</strong>, come nel caso del numero di identificazione personale o indirizzo IP e dei dati di utilizzo.</p>
			<p>I dettagli su ciascun tipo di dato raccolti sono descritti nelle seguenti sezioni dedicate di questa privacy policy o attraverso testi informativi mostrati prima della raccolta dei dati.</p>
			<p>Se non diversamente specificato, <strong>tutti i dati richiesti sono obbligatori</strong>: il rifiuto di comunicarli da parte dell’utente potrebbe rendere impossibile la fornitura dei servizi.</p>
			<p>Se non diversamente specificato, l’utilizzo di <?php echo $cookieLink; ?> o di altri strumenti di tracciamento, da parte di questo sito web o dei titolari dei servizi terzi da esso utilizzati, ha l’obiettivo di fornire il servizio richiesto, oltre a ulteriori finalità descritte nel presente documento.</p>
			<p>L’utente è libero di astenersi dal comunicare i <strong>dati indicati esplicitamente come facoltativi</strong>, senza conseguenze sulla fornitura o sul funzionamento dei servizi.</p>
			<p>Per ulteriori informazioni sui dati obbligatori, contatta il <?php echo $responsibleLink; ?>.</p>
		</section>
		<section id="luogo-trattamento" class="section-padding-bottom">
			<h1>Luogo di trattamento dei dati</h1>
			<p>Eccetto dove diversamente specificato, il trattamento ha luogo presso le sedi legali e operative del <?php echo $responsibleLink; ?> e in ogni altro luogo in cui le parti coinvolte nel trattamento siano localizzate. In particolare: </p>
			<ul>
<?php
$locations = new WP_Query( array( 'post_type' => 'sedi', 'posts_per_page' => 0 ) );
$numero_sedi = $locations->post_count;
if($numero_sedi == 1){
	while ( $locations->have_posts() ) : $locations->the_post();
?>
				<li>la sede di <?php echo $legalName; ?>, all’indirizzo <?php echo $privacy_responsible_address; ?>, a cura esclusiva del <?php echo $responsibleLink; ?>;</li>
<?php
	endwhile;
} else {
?>
				<li>
					le sedi di <?php echo $legalName; ?>, agli indirizzi:
					<ul>
<?php
	while ( $locations->have_posts() ) : $locations->the_post();
?>
						 <li><?php echo get_postal_address(get_field('address')['address']); ?>, a cura esclusiva del <?php echo $responsibleLink; ?>;</li>
<?php
	endwhile;
?>
					</ul>
				</li>
<?php
	}
//base giuridica del trasferimento di Dati al di fuori dell’Unione Europea o ad un’organizzazione internazionale di diritto internazionale pubblico o costituita da due o più paesi, come ad esempio l’ONU, nonché in merito alle misure di sicurezza adottate dal <php echo $responsibleLink; > per proteggere i Dati
?>
				<li>i fornitori di servizi tecnici, finalizzati al corretto funzionamento dei servizi su Internet (ad es. società che gestisce l’hosting del sito web).</li>
			</ul>
			<p>I dati personali potrebbero essere trasferiti in un paese diverso da quello dell’utente.</p>
			<p>Per ulteriori informazioni, contatta il <?php echo $responsibleLink; ?>.</p>
		</section>
		<section id="modalita" class="section-padding-bottom">
			<h1>Modalità di trattamento e conservazione dei dati</h1>
			<p>I dati personali forniti dagli utenti:</p>
			<ul>
				<li>saranno trattati in forma automatizzata e manuale a opera del <?php echo $responsibleLink; ?> o di soggetti appositamente incaricati;</li>
				<li>saranno raccolti, conservati e trattati adottando modalità e strumenti volti a garantire la <strong>massima sicurezza e riservatezza</strong>, finalizzati a impedirne l’accesso, la divulgazione, la modifica o la distruzione non autorizzate;</li>
				<li>saranno trattati con strumenti informatici e/o telematici, con logiche e modalità organizzative strettamente correlate alle finalità indicate;</li>
				<li>saranno fisicamente posti “in hosting” e in servizio “Cloud SaaS” presso società terze, i cui Data Center sono allocati in Italia e/o in Europa;</li>
				<li>se la comunicazione è imposta da obblighi di legge o se strettamente necessario per le finalità indicate in seguito o per fornire un prodotto, un servizio o una prestazione richiesta dall'utente, <strong>potrebbero essere comunicati a soggetti terzi e/o trasferiti all’estero</strong> (dipendenti, collaboratori o consulenti, legali, hosting provider e altri fornitori di prodotti/servizi, corrieri postali ecc.). L'utente potrà sempre richiedere un elenco aggiornato al <?php echo $responsibleLink; ?>.</li>
			</ul>
		</section>
		<section id="base-giuridica" class="section-padding-bottom">
			<h1>Base giuridica del trattamento</h1>
			<p>Il <?php echo $responsibleLink; ?> tratta i dati personali dell’utente nel caso in cui sussista almeno una delle seguenti condizioni:</p>
			<ul>
				<li>
					<strong>l’utente abbia prestato il consenso</strong> per una o più finalità specifiche;
					<?php //Nota: in alcuni ordinamenti il Titolare può essere autorizzato a trattare Dati Personali senza che debba sussistere il consenso dell’Utente o un’altra delle basi giuridiche specificate di seguito, fino a quando l’Utente non si opponga (“opt-out”) a tale trattamento. Ciò non è tuttavia applicabile qualora il trattamento di Dati Personali sia regolato dalla legislazione europea in materia di protezione dei Dati Personali; ?>
				</li>
				<li>il trattamento sia <strong>necessario alla stipula o all’esecuzione di un contratto</strong>;</li>
				<li>il trattamento sia <strong>necessario all’adempimento di obblighi legali</strong> per il <?php echo $responsibleLink; ?>;</li>
				<li>il trattamento sia <strong>necessario all’adempimento di compiti di interesse pubblico o per l'esercizio di poteri pubblici</strong> di cui è investito il <?php echo $responsibleLink; ?>;</li>
				<li>il trattamento sia <strong>necessario per il perseguimento del legittimo interesse</strong> del <?php echo $responsibleLink; ?> o di terzi;</li>
			</ul>
			<p>Per ulteriori chiarimenti sulla base giuridica di ciascun trattamento, contatta il <?php echo $responsibleLink; ?>.</p>
			<?php //È comunque sempre possibile richiedere al Titolare di chiarire la concreta base giuridica di ciascun trattamento ed in particolare di specificare se il trattamento sia basato sulla legge, previsto da un contratto o necessario per concludere un contratto. ?>
		</section>
		<section id="periodo" class="section-padding-bottom">
			<h1>Periodo di conservazione dei dati</h1>
			<p>I dati saranno conservati e trattati <strong>per il tempo necessario</strong> alle finalità indicate per cui sono stati raccolti.</p>
			<p>In particolare:</p>
			<ul>
				<li>i dati personali raccolti per scopi collegati all’esecuzione di un contratto tra il <?php echo $responsibleLink; ?> e l’utente saranno trattenuti sino a quando sia completata l’esecuzione di tale contratto;</li>
				<li>i dati personali raccolti per finalità riconducibili all’interesse legittimo del <?php echo $responsibleLink; ?> saranno trattenuti sino al soddisfacimento di tale interesse; l’Utente può ottenere ulteriori informazioni in merito all’interesse legittimo perseguito dal <?php echo $responsibleLink; ?> nelle relative sezioni di questo documento o contattando il <?php echo $responsibleLink; ?>.</li>
			</ul>
			<p>Con esplicito consenso dell’utente al trattamento, il <?php echo $responsibleLink; ?> può conservare i dati personali a tempo indeterminato, fino alla revoca del consenso.</p>
			<p>In alcuni casi il <?php echo $responsibleLink; ?> potrebbe essere obbligato a conservare i dati personali per periodi di tempo più lunghi, per ordine di un’autorità o per un obbligo di legge.</p>
			<p>Al termine del Periodo di conservazione, i dati personali saranno cancellati, impedendo l’esercizio dei <a href="#diritti">Diritti degli utenti</a>.</p>
		</section>
		<section id="finalita-trattamento">
			<h1>Finalità del trattamento dei dati raccolti</h1>
			<p>I dati dell’utente sono raccolti dal <?php echo $responsibleLink; ?> per:</p>
			<ul>
				<li>consentire la <strong>fornitura dei propri servizi</strong>;</li>
				<li><strong>gestire contatti e pagamenti</strong> eventuali: database degli utenti, invio di messaggi e ricevute o fatture;</li>
<?php
	if(in_array('Remarketing', $privacy_settings)){
?>
				<li>finalità di <strong>remarketing e behavioral targeting</strong>;</li>
<?php
}
?>
				<li><strong>scopi statistici</strong>.</li>
			</ul>
			<p>Per ulteriori informazioni sulle finalità del trattamento e sui dati rilevanti per ciascuna di esse, consulta le seguenti sezioni specifiche o contatta il <?php echo $responsibleLink; ?>.</p>
		</section>
		<section id="cookie">
			<h1 class="h2">Cookie</h1>
			<p>Il sito web <em><?php echo $site_url; ?></em> utilizza i cookie, anche di terze parti.</p>
			<p>Per tutte le informazioni sui cookie installati attraverso questo sito e le indicazioni su come disabilitarli o gestirli, consulta la <?php echo $cookies_page_link; ?>.</p>
		</section>
		<section id="strumenti-contatto">
			<h1 class="h2">Strumenti di contatto</h1>
			<p>Sul sito web possono essere pubblicati diversi strumenti di contatto, come, ad esempio:</p>
			<ul>
				<li><strong>Moduli di registrazione</strong> (ad es. “Registrati”, “Registrazione”) presenti sul sito web permettono all’utente di salvare i propri dati e preferenze, per praticità, e di non doverli reimmettere ogni volta che vengono richiesti.</li>
				<li><strong>Indirizzi di posta elettronica (email)</strong> e <strong>i moduli da compilare</strong> (ad es. “Contatti”, “Richiedi un preventivo”, “Lascia un commento”, “Scrivi una recensione”) pubblicati sul sito web permettono all’utente di inviare richieste, quesiti, recensioni e commenti e di ricevere le relative risposte.</li>
				<li><strong>Indirizzi e identificativi (id)</strong>: indirizzi postali, numeri di telefono, id voip ecc.</li>
			</ul>
			<p>I dati personali richiesti (ad es. Email, Nome e cognome, Numero di telefono, Indirizzo postale, Organizzazione, Professione, Interessi) tramite i suddetti strumenti di contatto possono variare in base alla tipologia di richiesta.</p>
			<p>L’utilizzo in modo facoltativo, esplicito e volontario, dei suddetti strumenti di contatto da parte dell’utente comporta la successiva acquisizione dell'indirizzo del mittente, necessario per rispondere alle richieste, nonché degli eventuali altri dati personali inseriti.</p>
			<p>L’invio di dati tramite i suddetti strumenti di contatto non prevede l'iscrizione automatica alla newsletter.</p>
			<p>I dati personali acquisiti tramite i suddetti strumenti di contatto sono gestiti da questo sito web (luogo del trattamento: Italia) e sono utilizzati esclusivamente per le seguenti finalità:</p>
			<ol>
				<li>per la raccolta di informazioni precontrattuali o contrattuali, ai fini del servizio fornito;</li>
				<li>per l’esecuzione degli obblighi derivanti dai rapporti contrattuali instaurati con <?php echo $privacy_responsible_name; ?> e la corretta gestione del rapporto contrattuale, nonché per l’adempimento di ogni obbligo di legge, di quanto disposto da Autorità e Organi di Vigilanza o da prassi amministrative.</li>
			</ol>
		</section>
<?php
if(in_array('WordPress Comments', $privacy_settings)){
?>
		<section id="commenti">
			<h1 class="h2">Commenti</h1>
			<p><strong>Quando lasci un commento sul sito</strong>, raccogliamo i dati inseriti nel modulo dei commenti oltre all'indirizzo IP del visitatore e la stringa dello user agent del browser per facilitare il rilevamento dello spam.</p>
			<p><strong>Se hai un account Gravatar</strong>, dopo l'approvazione del tuo commento, la tua immagine del profilo sarà visibile al pubblico nel contesto del tuo commento.</p>
			<p>I commenti dei visitatori possono essere controllati attraverso un servizio di rilevamento automatico dello spam.</p>
			<p><strong>Per quanto tempo conserviamo i tuoi dati:</strong> se lasci un commento, il commento e i relativi metadati vengono conservati a tempo indeterminato. È così che possiamo riconoscere e approvare automaticamente eventuali commenti successivi invece di tenerli in una coda di moderazione.</p>
		</section>
<?php
}
if(in_array('WordPress Comments', $privacy_settings) or in_array('Gravatar', $privacy_settings)){
?>
		<section id="gravatar">
			<h1 class="h2">Gravatar</h1>
			<p>
				Questo sito web utilizza <a href="https://it.gravatar.com/">Gravatar</a> per mostrare la tua immagine del profilo. Una stringa anonimizzata creata a partire dal tuo indirizzo email (altrimenti detta hash) può essere fornita al servizio per vedere se hai un account attivo su di esso. <br />
				Luogo del trattamento: Usa, <a href="https://automattic.com/privacy/">Privacy Policy</a>.
			</p>
		</section>
<?php
}
?>
		<section id="media">
			<h1 class="h2">Media</h1>
			<p>Se carichi immagini su questo sito web, dovresti evitare di caricare immagini che includono i dati di posizione incorporati (EXIF GPS). I visitatori del sito web possono scaricare ed estrarre qualsiasi dato sulla posizione dalle immagini sul sito web.</p>
		</section>
		<section id="embedded">
			<h1>Contenuti incorporati da altri siti web</h1>
			<p>Le pagine di questo sito possono includere contenuti incorporati (ad esempio video, immagini, articoli ecc.). I contenuti incorporati da altri siti web si comportano esattamente allo stesso modo come se il visitatore avesse visitato l'altro sito web.</p>
			<p>Questi siti web possono raccogliere dati su di te, usare cookie, integrare ulteriori tracciamenti di terze parti e monitorare l'interazione con quel contenuto incorporato, incluso il tracciamento della tua interazione con il contenuto incorporato se hai un account e hai effettuato l'accesso a quel sito web.</p>
		</section>
<?php
if(in_array('Newsletter', $privacy_settings) or in_array('MailChimp', $privacy_settings)){
?>
		<section id="newsletter">
			<h1 class="h2">Newsletter</h1>
			<p><strong>L’iscrizione alla newsletter</strong> avviene solo in seguito al consenso da parte dell’utente, espresso tramite spunta dell’apposito campo (checkbox).</p>
			<p>Il conferimento dell’indirizzo di posta elettronica (email) e il consenso al trattamento legato all’inoltro di newsletter sono necessari per poter usufruire del servizio “Newsletter”: il conferimento di altri dati è libero e facoltativo.</p>
			<p><strong>La cancellazione dalla newsletter</strong> è possibile senza costi e in modo semplice, come riportato nell’informativa e nelle successive comunicazioni, seguendo le istruzioni per la cancellazione.</p>
			<p>I dati personali saranno oggetto di trattamento, fino a sua opposizione, per la finalità di iscrizione a newsletter tramite e-mailing list per l’invio/ricezione di informazioni, notizie e aggiornamenti relative agli ambiti di competenza del sito web e dei servizi in esso offerti e ad attività correlate.</p>
			<p>La newsletter sarà inviata con cadenza non periodica e potrà contenere, a titolo di esempio:</p>
			<ul>
				<li>promozioni e/o offerte vendita di prodotti e servizi (anche di terzi);</li>
				<li>informazioni, notizie e aggiornamenti relativi ai servizi, ai prodotti offerti, al settore/mercato, agli argomenti trattati dal sito web;</li>
				<li>richieste di rilevazione del grado di soddisfazione della clientela sulla qualità dei servizi resi;</li>
				<li>questionari finalizzati all’elaborazione di studi e ricerche di mercato.</li>
			</ul>
<?php
	if(in_array('MailChimp', $privacy_settings)){
?>
		<section>
			<h1 class="h2">Mailchimp</h1>
			<p>Questo sito web utilizza <strong>MailChimp</strong> per l’impaginazione e l’invio delle newsletter, la gestione delle mailing list e per raccogliere informazioni circa l'utilizzo delle newsletter web da parte degli utenti.</p>
			<p>Le informazioni generate sono utilizzate per fare dei report sull’utilizzo delle newsletter.</p>
			<p>Luogo del trattamento: Usa. <a href="https://mailchimp.com/legal/privacy/">Privacy Policy</a>.</p>
		</section>
<?php
	} else {
?>
		<section>
			<h1 class="h3">WordPress.org</h1>
			<p>L'iscrizione alla newsletter genera automaticamente un utente WordPress.org con il ruolo di Sottoscrittore, per cui viene creato un profilo in cui vengono salvati i dati: email, nome utente (identico all’email) e password sicura (generata e inviata automaticamente all'indirizzo email dell’utente).</p>
			<p><strong>Per quanto tempo conserviamo i tuoi dati:</strong> per gli utenti che si registrano sul nostro sito web, memorizziamo anche le informazioni personali che forniscono nel loro profilo utente. Tutti gli utenti possono vedere, modificare o cancellare le loro informazioni personali in qualsiasi momento (eccetto il loro nome utente che non possono cambiare). Gli amministratori del sito web possono anche vedere e modificare queste informazioni.</p>
			<p><strong>La cancellazione dalla newsletter</strong> è possibile senza costi e in modo semplice <a href="<?php $site_url.'/login/'; ?>">accedendo dalla pagina di login</a> e eliminando il proprio utente.</p>
		</section>
<?php
	}
?>
		</section>
<?php
}
if(in_array('Tawk.to', $privacy_settings)){
?>
		<section id="tawk">
			<h1 class="h2">Live chat “Powered by tawk.to”</h1>
			<p>Dati personali (Indirizzo IP, <?php echo $cookieLink; ?> e Dati di utilizzo) condivisi con Tawk.to (luogo del trattamento: Usa, <a href="https://www.tawk.to/privacy-policy/">Privacy Policy</a>).</p>
		</section>
<?php
}
?>
<?php 
if(in_array('Google Analytics (Anonymized IP)', $privacy_settings) or in_array('Google Analytics', $privacy_settings)){
?>
		<section id="google-analytics">
			<h1 class="h2">Google Analytics <?php if(in_array('Google Analytics (Anonymized IP)', $privacy_settings)){ ?> con indirizzo IP anonimizzato<?php } ?></h1>
			<p>Questo sito web utilizza <a href="analytics.google.com">Google Analytics</a><?php if(in_array('Google Analytics (Anonymized IP)', $privacy_settings)){ ?> con indirizzo IP anonimizzato<?php } ?> per raccogliere informazioni circa l'utilizzo del sito web da parte degli utenti. Google Analytics genera informazioni statistiche e di altro genere attraverso cookie (cookie di statistica), memorizzati sui computer degli utenti.</p>
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
		</section>
<?php
}
?>
<?php 
if(in_array('Google Fonts', $privacy_settings)){
?>
		<section>
			<h1 class="h2">Google Fonts</h1>
			<p>Questo sito web utilizza <a href="https://fonts.google.com/">Google Fonts</a> e le relative API per la visualizzazione di caratteri tipografici (contenuti esterni).</p>
			<p>Luogo del trattamento: Usa. <a href="https://www.google.com/intl/it/policies/privacy/">Privacy Policy di Google</a></p>
		</section>
<?php
}
?>
<?php 
if(in_array('Google Maps', $privacy_settings)){
?>
		<section>
			<h1 class="h2">Google Maps</h1>
			<p>Questo sito web utilizza <a href="https://www.google.it/maps">Google Maps</a> e le relative API per la visualizzazione di mappe interattive (contenuti esterni) e per semplificare l'immissione di indirizzi postali e informazioni sulle attività locali.</p>
			<p>Utilizzando questo sito web, l’utente consente la raccolta, il trattamento e l’utilizzo dei dati raccolti automatiamente da Google Inc., i suoi rappresentanti e terze parti.</p>
			<p>Luogo del trattamento: Usa. <a href="https://www.google.com/intl/it/policies/privacy/">Privacy Policy di Google</a>, <a href="https://www.google.com/intl/it_it/help/terms_maps.html">Termini di servizio aggiuntivi di Google Maps/Google Earth</a></p>
		</section>
<?php
}
?>
<?php 
if(in_array('YouTube', $privacy_settings)){
?>
		<section>
			<h1 class="h2">YouTube</h1>
			<p>Questo sito web utilizza YouTube per la visualizzazione di video (contenuti esterni).</p>
			<p>Luogo del trattamento: Usa. <a href="https://www.google.com/intl/it/policies/privacy/">Privacy Policy di Google</a></p>
		</section>
<?php
}
?>
		<section id="diritti" class="section-padding-top section-padding-bottom">
			<h1>Diritti degli utenti</h1>
			<p>In qualsiasi momento l’utente potrà rivolgersi al <?php echo $responsibleLink; ?> per far valere i propri diritti su dati trattati e, in particolare: </p>
			<ul>
				<li><strong>revocare il consenso</strong> precedentemente espresso, in ogni momento;</li>
				<li><strong>richiederne la cancellazione</strong>, la trasformazione in forma anonima o il blocco dei dati trattati in violazione di legge, compresi quelli di cui non è necessaria la conservazione in relazione agli scopi per i quali i dati sono stati raccolti o successivamente trattati;</li>
				<li><strong>ottenere l'indicazione delle finalità e modalità del trattamento</strong>;</li>
				<li><strong>opporsi, in tutto o in parte, al trattamento</strong> dei dati personali (limitazione del trattamento), ovvero, in determinate condizioni, il <?php echo $responsibleLink; ?> non potrà trattare i dati per alcun altro scopo se non la loro conservazione, ad esempio a fini di invio di materiale pubblicitario o di vendita diretta o per il compimento di ricerche di mercato o di comunicazione commerciale;</li>
				<li><strong>accedere ai propri dati</strong>, ovvero a ricevere una copia;</li>
				<li><strong>verificarne l’esattezza e richiederne l'aggiornamento</strong>, la rettificazione o l'integrazione;</li>
				<li><strong>far trasferire i propri dati</strong> a un altro titolare, senza alcun ostacolo, se tecnicamente fattibile. L’Utente ha diritto di ricevere i propri dati in un formato strutturato di uso comune e leggibile da un elaboratore. Questa disposizione è applicabile quando i dati sono trattati con strumenti automatizzati e con il consenso dell’utente, su un contratto di cui l’utente è parte o su misure contrattuali ad esso connesse;</li>
				<li>ottenere l'indicazione della logica applicata in caso di trattamento effettuato con l'ausilio di strumenti elettronici;</li>
				<li>ottenere l'indicazione dell'origine dei dati personali;</li>
				<li>ottenere l'indicazione degli estremi identificativi del <?php echo $responsibleLink; ?>, dei responsabili, dei soggetti o delle categorie di soggetti ai quali i dati personali possono essere comunicati o che possono venirne a conoscenza in qualità di responsabili o incaricati;</li>
				<li><strong>proporre reclamo</strong> all’autorità di controllo della protezione dei dati personali competente o agire in sede di giudizio.</li>
			</ul>
<!--
			<p>I diritti di cui all’art. 7 del Codice sono esercitati secondo le modalità previste nell’art. 9 – Modalità di esercizio del Codice. Il <?php echo $responsibleLink; ?> provvede a dare seguito alle richieste giunte secondo le modalità indicate nell’art. 10 – Riscontro all’interessato.</p>
-->
		</section>
		<section id="modifiche" class="section-padding-bottom">
			<h1>Modifiche all'informativa sulla privacy</h1>
			<p>Il <?php echo $responsibleLink; ?> si riserva il diritto di modificare, aggiornare, aggiungere o rimuovere parti della presente informativa sulla privacy a propria discrezione e in qualsiasi momento. La persona interessata è tenuta a verificare periodicamente le eventuali modifiche. Al fine di facilitare tale verifica l'informativa conterrà l'indicazione della <a href="data-aggiornamento">data di aggiornamento dell’informativa</a>. L'utilizzo del sito, dopo la pubblicazione delle modifiche, costituirà accettazione delle stesse.</p>
			<p>Ultima modifica: <?php echo $privacy_dateModified; ?></p>
		</section>
	</div>