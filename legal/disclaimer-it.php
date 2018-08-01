<?php
global $site_url, $page_url, $template_directory_url, $sitename, $tagline,
	$content_responsible;
if(get_field('headline')){
	$headline = get_field('headline');
} else {
	$headline = get_the_title();
}
if(get_field('copyrightHolder', 'option')){
	$copyright_holder = get_field('copyrightHolder', 'option');
} else {
	$copyright_holder = $sitename;
}
$copyright_holder_html = $copyright_holder;
$copyright_startdate = get_field('dateCreated', 'option');
$copyright_enddate = date_i18n('Y', time());

if($copyright_startdate and $copyright_startdate !== $copyright_enddate){
	$copyright = sprintf(__('<abbr title="Copyright">&copy;</abbr>%1$s-%2$s di %3$s','isotype'), '<span itemprop="copyrightYear">'.$copyright_startdate.'</span>', $copyright_enddate, $copyright_holder_html);
} else if($copyright_enddate) {
	$copyright = sprintf(__('&copy;%1$s di %2$s','isotype'), '<span itemprop="copyrightYear">'.$copyright_enddate.'</span>', $copyright_holder_html);
}

if(empty($content_responsible)){
	$content_responsible = $copyright_holder;	
}
?>
<section>
	<h1><?php _e('Diritti d’autore','isotype'); ?></h1>
	<p id="copyright"><?php echo $copyright; ?>.</p>	
</section>
<section>
	<p>I contenuti di questo sito web non hanno carattere di periodicità e non rappresentano ‘prodotto editoriale’ ex L.62/2001.</p>
	<p>L’autore, o chi altri compia attività di pubblicazione di opere coperte da diritto d’autore, dichiara nel momento stesso della pubblicazione e sotto sua totale responsabilità di aver assolto agli obblighi derivanti dalla normativa sul diritto d’autore e sui diritti connessi, come modificata da ultimo dalla legge 128/2004; in particolare, nel caso in cui non fosse il titolare dei diritti di sfruttamento economico o connessi sull’opera che intende pubblicare, dichiara di aver ottenuto tutte le autorizzazioni del caso dai legittimi titolari, consapevole delle conseguenze sia civili che penali della violazione di tale obbligo.</p>
	<p>Ai sensi dell’art. 1, comma 1 del decreto-legge 22 marzo 2004, n. 72, come modificato dalla legge di conversione 21 maggio 2004 n. 128, le opere presenti su questo sito hanno assolto gli obblighi derivanti dalla normativa sul diritto d’autore e sui diritti connessi. La violazione dei diritti dei titolari del diritto d’autore e dei diritti connessi comporta l’applicazione delle sanzioni previste dal capo III del titolo III della legge 22 aprile 1941, n. 633, e successive modificazioni ed integrazioni, in particolare dagli artt. 171, 171-bis, 171-ter, 174-bis, 174-ter.</p>
</section>
<section id="limitazioni_responsabilita">
	<h1>Limitazioni di responsabilità</h1>
	<p>I contenuti pubblicati sul sito sono stati attentamente vagliati e analizzati, e sono stati elaborati con la massima cura. In ogni caso errori, inesattezze e omissioni sono possibili. Fabio Fasoli declina qualsiasi responsabilità per errori e omissioni eventualmente presenti nel sito.</p>
	<p>Si ricorda inoltre che le informazioni sono fornite a titolo puramente indicativo.</p>
	<p><?php echo $content_responsible; ?> declina ogni responsabilità per qualunque tipo di utilizzo fatto da terzi del presente lavoro. L’elaborazione del testo non comporta responsabilità per specifici errori e/o inesattezze.</p>
</section>
<?php
the_content();
?>