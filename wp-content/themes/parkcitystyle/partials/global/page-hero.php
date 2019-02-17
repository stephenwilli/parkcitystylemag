<?php
	$heroImage = get_field('page_hero_image');
?>


<div class="container-fluid nopad">
	
	<?php if($heroImage) { ?>
	    
	    <div class="category-hero" style="background-image:url('<?php echo $heroImage['sizes']['full_screen'];?>');">
	        <h1 class="category-title"><?php the_title(); ?></h1>
	    </div>

    <?php } else { ?>
	    
		<div class="category-hero" style="background-image:url('<?php echo DEFAULTHERO;?>');">
	        <h1 class="category-title"><?php the_title(); ?></h1>
	    </div>

    <?php } ?>

</div>



