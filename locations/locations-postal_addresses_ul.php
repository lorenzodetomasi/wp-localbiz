<?php
global $locations;
if(!$locations){
	$locations = new WP_Query( array( 'post_type' => 'sedi', 'posts_per_page' => 0 ) );
}
if($locations->have_posts()){
?>
<ul class="small no-margin">
<?php
	while ( $locations->have_posts() ) : $locations->the_post();
?>
	<li><?php echo get_postal_address(get_field('address')['address']); ?></li>
<?php
	endwhile;
?>
</ul>
<?php
}
?>
