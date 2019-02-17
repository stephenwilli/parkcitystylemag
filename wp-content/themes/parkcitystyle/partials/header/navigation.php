<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="/">
            </a>
        </div>

        <?php
              wp_nav_menu( array(
                  'menu'              => 'mainmenu',
                  'theme_location'    => 'mainmenu',
                  'depth'             => 2,
                  'container'         => 'div',
                  'container_class'   => 'collapse navbar-collapse navbar-ex1-collapse',
                  'container_id'      => 'bs-example-navbar-collapse-1',  
                  'menu_class'        => 'nav navbar-nav navbar-right',
                  'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                  'walker'            => new wp_bootstrap_navwalker())
              );
          ?>
        
        <div class="navbar-social">
          <ul>
            
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
        </div>
    </div>
    <!-- /.container-fluid -->
</nav>