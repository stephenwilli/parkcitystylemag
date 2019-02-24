<div class="story-grid wow fadeInUp">
	<div class="container normal-pad">
	    <div class="row">
	    	<h2 class="center">Story Categories</h2>

	    	<?php

	    	$featuresImage = get_field('features_home_image', 'option');
	    	$highstyleProfileImage = get_field('highstyle_profile_home_image', 'option');
	    	$inspireImage = get_field('inspire_home_image', 'option');
	    	$basecampImage = get_field('basecamp_home_image', 'option');
	    	$tetonVillageImage = get_field('teton_village_home_image', 'option');
	    	$healthyLivingImage = get_field('healthy_living_home_image', 'option');
	    	$diningImage = get_field('dining_home_image', 'option');
	    	$nightlifeImage = get_field('nightlife_home_image', 'option');
	    	$catalogueImage = get_field('catalogue_home_image', 'option');

	    	?>

	    	<div class="row">
	    		<div class="uneven">
		    		<div class="col-md-4 col-sm-12">
			    		<div class="features grid-card" style="background-image:url('<?php echo $featuresImage['sizes']['large'];?>');">
				    		<a class="block-link" href="/stories/features">
					    		<div class="overlay"></div>
					    			<h3 class="category-bar">Features</h3>
					    		</div>
					    	</a>
		    		</div>

		    		<div class="col-md-8 col-sm-12">
		    			<div class="row">
		    				<div class="col-sm-12 col-md-6">
		    					<div class="highstyle-profile grid-card">
		    						<a href="/stories/highstyle-profile/">
			    						<img src="<?php echo $highstyleProfileImage['sizes']['large'];?>" />
			    						<div class="overlay"></div>
				    					<h3 class="category-bar">Highstyle Profile</h3>
				    				</a>
		    					</div>
		    				</div>
		    				<div class="col-md-6 col-sm-12">
		    					<div class="inspire grid-card">
		    						<a href="/stories/inspire">
			    						<img src="<?php echo $inspireImage['sizes']['large'];?>" />
			    						<div class="overlay"></div>
				    					<h3 class="category-bar">Inspire</h3>
				    				</a>
		    					</div>
		    				</div>
		    			</div>
		    			<div class="row">
		    				<div class="col-sm-12">
		    					<div class="basecamp grid-card">
		    						<a href="/stories/basecamp"><img src="<?php echo $basecampImage['sizes']['large'];?>" />
		    						<div class="overlay"></div>
			    					<h3 class="category-bar">Basecamp Adventures</h3></a>
		    					</div>
		    				</div>
		    			</div>
		    		</div>
	    		</div>

	    	</div>

	    	<div class="row">
	    		<div class="col-md-4 col-sm-12">
	    			<div class="teton-village grid-card">
	    				<a href="/stories/teton-village">
		    				<img src="<?php echo $tetonVillageImage['sizes']['lg_thumb'];?>" />
		    				<div class="overlay"></div>
				    		<h3 class="category-bar">Teton Village</h3>
				    	</a>
	    			</div>
	    		</div>
	    		<div class="col-md-4 col-sm-12">
	    			<div class="healthy-living grid-card">
		    			<a href="/stories/healthy-living">
		    				<img src="<?php echo $healthyLivingImage['sizes']['lg_thumb'];?>" />
		    				<div class="overlay"></div>
				    		<h3 class="category-bar">Healthy Living</h3>
				    	</a>
	    			</div>
	    		</div>
	    		<div class="col-md-4 col-sm-12">
	    			<div class="dining grid-card">
		    			<a href="/stories/dining">
		    				<img src="<?php echo $diningImage['sizes']['lg_thumb'];?>" />
		    				<div class="overlay"></div>
				    		<h3 class="category-bar">Dine in Style</h3>
				    	</a>
	    			</div>
	    		</div>
	    	</div>

	    	<div class="row">
	    	    <div class="col-md-6 col-sm-12">
	    	    	<div class="nightlife grid-card">
		    	    	<a href="/stories/nightlife">
		    	    		<img src="<?php echo $nightlifeImage['sizes']['lg_thumb'];?>" />
		    	    		<div class="overlay"></div>
				    		<h3 class="category-bar">Nightlife</h3>
				    	</a>
	    	    	</div>
	    		</div>
	    		<div class="col-md-6 col-sm-12">
	    			<div class="teton-valley grid-card">
		    			<a href="/stories/park-city-style-catalogue">
		    				<img src="<?php echo $catalogueImage['sizes']['lg_thumb'];?>" />
		    				<div class="overlay"></div>
				    		<h3 class="category-bar">Park City Style Catalogue</h3>
				    	</a>
	    			</div>
	    		</div>
	    	</div>

	    </div>
	</div>
</div>
