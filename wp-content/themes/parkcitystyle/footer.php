	<footer class="bg-primary">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="footer-widget">
						<?php
			                $phone = get_field('phone_number', 'option');
			                $email = get_field('contact_email', 'option');
			                $address = get_field('address', 'option');
			            ?>

							<img class="logo" src="<?php get_bloginfo('template_url') ?>/wp-content/uploads/2017/07/jhstyle-logo-01.png" />


						<p>
							<?php if ($phone) { ?>
								<i class="fa fa-fw fa-phone"></i> <a href="tel:1-<?php echo $phone; ?>"><?php echo $phone; ?><br>
							<?php } ?>

							<?php if ($email) { ?>
								<a href="mailto:<?php echo $email; ?>"><i class="fa fa-fw fa-envelope"></i> <?php echo $email; ?></a><br>
							<?php } ?>

							<?php if ($address) { ?>
								<i class="fa fa-fw fa-map-marker"></i> <?php echo $address; ?>
							<?php } ?>
						</p>

					</div>
				</div>
				<div class="col-md-4">
					<div class="footer-widget text-center">
						<ul class="social-icons">

				            <?php
				              $facebookLink = get_field('facebook_link', 'option');
				              $twitterLink = get_field('twitter_link', 'option');
				              $instagramLink = get_field('instagram_link', 'option');
				            ?>

				            <?php if ($facebookLink) { ?>
				              <li><a href="<?php echo $facebookLink; ?>" target="_blank"><i class="fa-fw fa fa-facebook"></i></a></li>
				            <?php } ?>

				            <?php if ($instagramLink) { ?>
				              <li><a href="<?php echo $instagramLink; ?>" target="_blank"><i class="fa-fw fa fa-instagram"></i></a></li>
				            <?php } ?>

				            <?php if ($twitterLink) { ?>
				              <li><a href="<?php echo $twitterLink; ?>" target="_blank"><i class="fa-fw fa fa-twitter"></i></a></li>
				            <?php } ?>

          				</ul>
          				<a href="/media-kit/" class="btn -ghost">Download Our Media Kit</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="footer-widget">
						<?php
							if(is_active_sidebar('footer-column-1')){
							dynamic_sidebar('footer-column-1');
							}
						?>
					</div>
				</div>

			</div>

			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 text-center">
				<p>Copyright &copy; <?php echo date("Y"); ?> - <?php $sitename = get_bloginfo('name'); echo $sitename; ?></p>
				</div>
			</div>
		</div>

	</footer>
    <?php wp_footer() ?>
  </body>
</html>
