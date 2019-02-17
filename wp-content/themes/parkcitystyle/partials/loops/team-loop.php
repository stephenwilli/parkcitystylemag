<?php if( have_rows('team_member') ): ?>

	<h2 class="center">Our Team</h2>
	<?php while ( have_rows('team_member') ) : the_row(); 

	$teamPhoto = get_sub_field('team_photo');
	$teamName = get_sub_field('team_name');
	$teamPosition = get_sub_field('team_position');
	$teamEmail = get_sub_field('team_email');
	$teamDescription = get_sub_field('team_description');

	?>

     <div class="col-sm-4">
     	<div class="team-wrap">
     		<div class="team-image">
	     		<div class="overlay">
	     			<p><?php echo $teamDescription; ?></p>
	     		</div>
			    <img src="<?php echo $teamPhoto['sizes']['cover'];?>" alt="<?php echo $teamName;?>"/>
		    </div>
		    <h3><?php echo $teamName;?></h3>
		    <h5><?php echo $teamPosition;?></h5>
		    <a href="mailto:<?php echo $teamEmail;?>"><h5><span><i class="fa fa-fw fa-envelope"></i> Contact</span></h5></a>
		    
	    </div>
     </div>


<?php endwhile; endif; ?>