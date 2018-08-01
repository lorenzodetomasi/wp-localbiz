<?php
global $legalName, $email, $post_type;
$locations = new WP_Query( array( 'post_type' => 'sedi', 'posts_per_page' => 0 ) );
?>
	<div class="map"><?php the_field('locationsMap', 'option'); ?></div>
<?php

?>
	<div class="padding-v-2x content-container flex row hgrid-cols2">
<?php
while ( $locations->have_posts() ) : $locations->the_post();
?>
		<section class="col vgrid-margin-bottom-2x">
			<h2><?php the_field('name'); ?></h2>
			<address>
				<p>
					<a class="link no-padding-h" itemprop="hasmap" href="<?php the_field('hasmap'); ?>" title="Visualizza la posizione su Google Maps">
						<span itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
							<i class="material-icons">place</i> <?php echo get_postal_address(get_field('address')['address']); ?>
						</span>
					</a>
				</p>
<?php
if( have_rows('contactPoints') ):
	while ( have_rows('contactPoints') ) : the_row();
	$telephone = get_sub_field('telephone');
	$telephone_iso = get_telephone_iso($telephone);
?>
				<p itemprop="contactPoint" itemscope itemtype="https://schema.org/ContactPoint">
					<a class="link no-padding-h" title="Chiama ora" href="tel:<?php echo $telephone_iso; ?>"><i class="material-icons">phone</i> <span class="button-text" itemprop="telephone"><?php echo $telephone; ?></span></a>
					<meta itemprop="contactType" content="<?php the_sub_field('contactType'); ?>" />
				</p>
<?php
	endwhile;
endif;
?>
			</address>
<?php
if(get_field('openingHours')){
?>
			<section class="openingHours">
				<h3>Orari</h3>
				<div class="body"><?php the_field('openingHours'); ?></div>				
			</section>
<?php
}
?>
		</section>
<?php
endwhile;
?>
	</div>