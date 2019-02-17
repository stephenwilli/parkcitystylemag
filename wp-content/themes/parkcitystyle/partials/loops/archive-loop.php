<?php
    $image_id = get_post_thumbnail_id();
    list( $url, $width, $height ) = wp_get_attachment_image_src( $image_id, 'large' );
    $categories = get_the_category(); 

    foreach ($categories as $category) {

        $categorySlug = $category->slug;
        $categoryName = $category->name;

    }
?>

<div class="post-card archive-card">
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
        <a href="<?php echo get_permalink(); ?>">Read More</a>
</div>