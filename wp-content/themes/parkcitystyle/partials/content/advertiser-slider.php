<div class="container normal-pad wow fadeInUp">
    <div class="row">
    	<h2 class="center">Partners</h2>
        <?php
    		$advertiser_loop = new WP_Query( array(
        		'post_type' => 'advertisers',
				'orderby'   => 'rand',
        		'posts_per_page' => 16
    		) );
		?>

    	<div id="advertiser-slider" class="flexslider advertiser-slider">
	        <ul class="slides">
	        <?php
	        while ( $advertiser_loop->have_posts() ) {
	            $advertiser_loop->the_post();
	            $image_id = get_post_thumbnail_id();
	            list( $url, $width, $height ) = wp_get_attachment_image_src( $image_id, 'medium' );
	            $advertiserLink = get_field('advertiser_link');

	            ?>
	                <li>
	                    <a href="<?php echo $advertiserLink ?>" target="_blank">
	                    	<div class="advertiser-logo">
	                        	<img src="<?php echo $url; ?>" alt="<?php the_title();?>">
	                    	</div>
	                    </a>
	                </li>
	            <?php
	        }
	        wp_reset_postdata();
	        ?>
	        </ul>
	    </div>
    </div>
    <div class="row">
    	<div class="col-sm-12 center">
    		<a class="btn ads-btn" href="/partners/">View all Partners</a>
    	</div>
    </div>
</div>
