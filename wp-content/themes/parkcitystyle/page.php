<?php

?>
<?php get_header(); ?>

	<!-- PAGE HERO -->

	<?php get_template_part('partials/global/page-hero'); ?>

	<!-- WYSIWYG CONTENT -->

<div class="page-content">

	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part('partials/global/page-content'); ?>
	<?php endwhile; // end of the loop. ?>
	
</div>

<?php get_footer();?>
