<?php 

// FULL BLOG ARCHIVE

get_header(); 

$heroImage = get_field('blog_hero_image', 'option');

?>

<div class="container-fluid nopad">
    <div class="category-hero" style="background-image: url('<?php echo $heroImage['sizes']['full_screen'];?>');"">
        <h1 class="category-title">Stories</h1>
    </div>
</div>

<div class="page-content"> 
    <div class="container">
        <div class="row">
        
            <?php if ( function_exists('yoast_breadcrumb') ) 
            {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
                
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

                    <div class="post-card archive-card <?php echo $categorySlug;?>">
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
