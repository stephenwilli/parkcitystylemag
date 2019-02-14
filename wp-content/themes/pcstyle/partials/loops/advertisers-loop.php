<h2 class="center" style="margin-bottom: 3rem;">Partner Directory</h2>
<?php
	$args = array(
		'post_type' => 'advertisers',
		'orderby' => 'title',
		'order'   => 'ASC',
		'posts_per_page' => -1
	);
	$advertisers = get_posts( $args );
	global $post;
	foreach( $advertisers as $advertiser ) {
		$post = $advertiser;
		setup_postdata( $post );
        $image_id = get_post_thumbnail_id();
        list( $url, $width, $height ) = wp_get_attachment_image_src( $image_id, 'medium' );
        $advertiserLink = get_field('advertiser_link');
    ?>

		<div class="col-sm-6 col-md-3 wow fadeInUp">
			<div class="advertiser-card">
				<a href="<?php echo $advertiserLink;?>" target="_blank">
					<div class="advertiser-logo">
						<img src="<?php echo $url;?>" alt="<?php the_title();?>"/>
					</div>
					<!-- <h3 class="center"><?php the_title();?></h3> -->
				</a>
			</div>
		</div>

<?php }
wp_reset_postdata();
?>
