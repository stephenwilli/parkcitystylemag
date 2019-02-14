<?php

// TEAM CUSTOM POST TYPE GRID

?>


<section class="nopad team-grid wow fadeInUp">
    <div class="container-fluid nopad">
        <div class="row">
            <?php
                $args = array(
                    'post_type' => 'team',
                    'order' => 'ASC',
                    'posts_per_page' => -1
                );
                $teams = get_posts( $args );
                global $post;
                foreach( $teams as $team ) {
                    $post = $team;
                    setup_postdata( $post );
                    get_template_part( 'partials/loops/team-loop' );
                }
                wp_reset_postdata();
            ?>

        </div>
    </div>
</section>
