<?php
global $site_url, $page_url, $template_directory_url, $sitename, $tagline;
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
?>
		<h2><?php _e('Diritti d’autore','isotype'); ?></h2>
		<p id="copyright"><?php echo $copyright; ?>.</p><br />
<?php
the_content();
?>
	</div>