<?php
if ( have_rows('testimonial', 'option') ):
?>
	<div class="col-md-6 col-md-offset-3 wow fadeInUp">
		<div class="testimonial-wrap">
			<h3>What Our Readers Are Saying</h3>
			<div id="testimonial-slider" class="flexslider">
				<ul class="slides">
					<?php while( have_rows('testimonial', 'option') ): the_row();
						$name = get_sub_field('testimonial_name', 'option');
						$text = get_sub_field('testimonial_text', 'option');
					?>
						<li class="testimonial-text">
							<span><?php echo $text;?></span>
							<p class="name">- <?php echo $name;?></p>
						</li>
					<?php endwhile; ?>
				</ul>
			</div>
		</div>
	</div>
<?php endif; ?>
