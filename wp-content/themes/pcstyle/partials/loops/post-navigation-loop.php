<div class="post-card nav-card">
    <div class="col-sm-6">

        <?php $prevPost = get_previous_post(true);
            if($prevPost) {
                $args = array(
                    'posts_per_page' => 1,
                    'include' => $prevPost->ID
                );
                $prevPost = get_posts($args);
                foreach ($prevPost as $post) {
                    setup_postdata($post);
                    $image_id = get_post_thumbnail_id();
                    list( $url, $width, $height ) = wp_get_attachment_image_src( $image_id, 'large' );
                    ?>

                      <div class="post-image">
                        <a class="block-link" href="<?php echo get_permalink(); ?>">
                                <div class="overlay">
                                    <a href="<?php echo get_permalink(); ?>" class="overlay-btn btn -ghost">Read More</a>
                                </div>
                                <img src="<?php echo $url; ?>" />
                        </a>
                      </div>
                      <a href="<?php echo get_permalink(); ?>">
                          <h3 class="center"><i class="fa fa-fw fa-angle-double-left"></i> Previous Story: <?php the_title();?></h3>
                      </a>

                      <?php
                wp_reset_postdata();
            } //end foreach
        } // end if ?>
    </div>
</div>

<div class="post-card nav-card">
    <div class="col-sm-6">
        <?php
            $nextPost = get_next_post(true);
            
            if($nextPost) {
                $args = array(
                    'posts_per_page' => 1,
                    'include' => $nextPost->ID
                );
                $nextPost = get_posts($args);
                foreach ($nextPost as $post) {
                    setup_postdata($post);
                    $image_id = get_post_thumbnail_id();
                    list( $url, $width, $height ) = wp_get_attachment_image_src( $image_id, 'large' );
                    ?>

                    <div class="post-image">
                      <a class="block-link" href="<?php echo get_permalink(); ?>">
                              <div class="overlay">
                                  <a href="<?php echo get_permalink(); ?>" class="overlay-btn btn -ghost">Read More</a>
                              </div>
                              <img src="<?php echo $url; ?>" />
                      </a>
                    </div>

                    <a href="<?php echo get_permalink(); ?>">
                        <h3 class="center">Next Story: <?php the_title();?> <i class="fa fa-fw fa-angle-double-right"></i></h3>
                    </a>

                    <?php
                    wp_reset_postdata();
                    } //end foreach
            } // end if
        ?>
    </div>
</div>
