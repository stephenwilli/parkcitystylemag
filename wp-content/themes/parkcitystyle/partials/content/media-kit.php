<?php

	// MEDIA KIT

	$MKimage = get_field('mk_image', 'option');
	$MKtitle = get_field('mk_title', 'option');
	$MKtext = get_field('mk_text', 'option');
	$MKbutton = get_field('MK_button_text', 'option');
	$MKlink = get_field('MK_button_link', 'option');


	if ($MKimage) { ?>
<div class="container-fluid nopad wow fadeInUp">

		<section class="media-kit" style="background-image: url('<?php echo $MKimage['sizes']['full_screen']; ?>');">
		<div class="overlay"></div>

		            <div class="caption">

		            	<?php if ($MKtitle) { ?>
		               		<h2><?php echo $MKtitle; ?></h2>
		               		<p><?php echo $MKtext; ?></p>
		                <?php } ?>

		                <?php if ($MKbutton) { ?>
		                	<a href="<?php echo $MKlink; ?>" class="btn -ghost"><?php echo $MKbutton; ?></a>
		                <?php } ?>
		            </div>


		    </div>
		</section>
</div>

<?php } ?>
