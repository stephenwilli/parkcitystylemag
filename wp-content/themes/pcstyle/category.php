<?php

// Category Archive

get_header();

$obj = get_queried_object();
$categoryName = $obj->name;
$categorySlug = $obj->slug;
$categoryDescription = $obj->description;
$categoryImage = get_field('category_featured_image', $obj);

?>

<div class="container-fluid nopad">
    <div class="category-hero <?php echo $categorySlug; ?>" style="background-image: url('<?php echo $categoryImage['sizes']['full_screen'];?>');">
        <h1 class="category-title"><?php echo $categoryName; ?></h1>
    </div>
</div>

<div class="page-content">
    <div class="container">
        <div class="row">

            <div class="breadcrumb"><?php get_breadcrumb(); ?></div>

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <?php
                        $image_id = get_post_thumbnail_id();
                        list( $url, $width, $height ) = wp_get_attachment_image_src( $image_id, 'lg_thumb' );
                        $categories = get_the_category();

                        foreach ($categories as $category) {

                            $categorySlug = $category->slug;
                            $categoryName = $category->name;

                        }
                    ?>

                    <div class="post-card archive-card wow fadeInUp <?php echo $categorySlug;?>">
                        <div class="post-image">
                            <a href="<?php echo get_permalink(); ?>">
                                    <div class="overlay">
                                        <a href="<?php echo get_permalink(); ?>" class="overlay-btn btn -ghost">Read More</a>
                                    </div>
                                    <img src="<?php echo $url; ?>" />
                            </a>
                        </div>


                        <a class="category-bar" href="/stories/<?php echo $categorySlug;?>"><?php echo $categoryName;?></a>
                        <a href="<?php echo get_permalink(); ?>">
                            <h3 class="<?php echo $categorySlug;?>"><?php the_title();?></h3>
                        </a>
                        <p><?php the_excerpt(); ?></p>
                    </div>

                <?php endwhile; endif; ?>

                <?php // get_template_part('partials/loop-nav'); ?>


        </div><!-- /row -->
    </div><!-- /container -->
</div><!-- #page-content -->

<?php get_footer(); ?>
