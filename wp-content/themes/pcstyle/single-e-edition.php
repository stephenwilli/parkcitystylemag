<?php

get_header();

?>

<?php get_template_part('partials/global/page-hero');?>

<div class="page-content wow fadeInUp">
    <div class="container">
        <div class="row">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post();

		$issueEmbed = get_field('issue_embed_code');

		?>

			<article class="edition-wrap wow fadeInUp">
				<div class="container">
					<div class="row">

						<div class="col-sm-12">

						<?php echo $issueEmbed?>

						</div>

					</div>

				</div>

			</article>

		<?php endwhile; ?> <?php endif;// end of the loop. ?>

		<?php get_template_part('partials/content/issue-featured'); ?>

		<?php get_template_part('partials/loops/post-navigation-loop') ;?>

		</div>
	</div>
</div>




<?php get_footer();?>
