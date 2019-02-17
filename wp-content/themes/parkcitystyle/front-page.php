<?php get_header();

// HOME PAGE TEMPLATE

?>

<?php get_template_part('partials/content/hero'); ?>

<!-- FLEXIBLE CONTENT TEMPLATES -->
<section class="normal-pad wow fadeIn">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-12">
				<?php get_template_part('partials/home/issues-slider'); ?>
			</div>
			<div class="col-md-6 col-sm-12">
				<?php get_template_part('partials/home/subscribe'); ?>
			</div>
		</div>
	</div>
</section>

<div class="page-content">
    <div class="container">
        <div class="row">
			<?php get_template_part('partials/home/featured'); ?>
		</div>
	</div>
</div>

<div class="page-content">
  <div class="container">
    <div class="row">
				<?php get_template_part('partials/home/social-grid'); ?>
		</div>
	</div>
</div>



<?php get_template_part('partials/content/media-kit'); ?>

<div class="page-content">
    <div class="container">
        <div class="row">

			<?php get_template_part('partials/content/story-grid'); ?>

			<?php get_template_part('partials/content/advertiser-slider'); ?>
		</div>
	</div>
</div>

<?php get_footer();?>
