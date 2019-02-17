<?php
    $issues_loop = new WP_Query( array(
        'post_type' => 'e-edition',
        'order' => 'DESC',
        'posts_per_page' => -1
    ) );
?>

<div class="issue-wrapper wow fadeInUp">
    <h2 class="center">E-Editions</h2>
    <div id="issue-slider" class="flexslider">
        <ul class="slides">
        <?php
        while ( $issues_loop->have_posts() ) {
            $issues_loop->the_post();
            $image_id = get_post_thumbnail_id();
            list( $url, $width, $height ) = wp_get_attachment_image_src( $image_id, 'cover' );
            ?>
                <li>
                    <a href="<?php echo the_permalink(); ?>">

                      <div class="issue-cover" style="background-image : url('<?php echo $url;?>')"></div>
                        <div class="caption">
                            <h2><?php echo the_title(); ?></h2>
                            <a href="<?php the_permalink(); ?>" class="btn -ghost">View Now</a>
                        </div><!-- /caption -->

                    </a>
                </li>
            <?php
        }
        wp_reset_postdata();
        ?>
        </ul>
    </div>
</div>
<div class="center">
    <a href="/e-edition/" class="btn">View All E-Editions</a>
</div>
