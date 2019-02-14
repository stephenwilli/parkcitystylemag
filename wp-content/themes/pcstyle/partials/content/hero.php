<?php 

  // HERO SLIDER OR SINGLE INTERNAL PAGE HEADER IMAGE
  
  $option = get_field('hero_option'); 
  if ($option == 'slider') { ?>

  <div id="hero-slider" class="flexslider">
    <?php if ( get_field( 'hero_slideshow' ) ) { ;?>
    
      <ul class="slides">

        <?php while(has_sub_field('hero_slideshow')) {
          
          $image = get_sub_field('hero_image');
          $title = get_sub_field('hero_title');
          $subTitle = get_sub_field('hero_subtitle');
          $buttonText = get_sub_field('hero_button_text');
          $slideLink = get_sub_field('hero_link');
          $slideAlign = get_sub_field('hero_alignment');
          ?>

        <li>

          <div class="hero-bg parallax wow fadeIn" style="background-image : url('<?php echo $image['sizes']['full_screen'];?>');"></div>

          <?php if ( $title ) { ?>
            <div class="hero-caption caption-<?php echo $slideAlign; ?>">
              
                <h1><?php echo $title; ?></h1>
              
                <?php if ( $subTitle ) { ?>
                  <p><?php echo $subTitle; ?></p>
                <?php } ?>

                <?php if ( $buttonText ) { ?>
                  <a href="<?php echo $slideLink; ?>" class="btn -ghost"><?php echo $buttonText; ?></a>
                <?php } ?>

            </div><!-- /caption -->
          <?php } ?>
      
        </li>

      <?php } ?>

      </ul>

    <?php } ?>

  </div><!-- #hero-slider -->

<?php } else { 
  $singleHero = get_field('hero_single');
  ?>

<div id="single-hero" class="flexslider">
  <div class="hero-bg parallax" style="background-image : url('<?php echo $singleHero['sizes']['full_screen'];?>');"></div>
</div>

<?php } ?>
