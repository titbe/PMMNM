<section id="banner">
  <div class="banner ">
      <?php if ( is_front_page() || is_home() ) {?>
        <?php if ( get_header_image() ) : ?>
        <div class="homeslider">
          <img src="<?php header_image(); ?>" alt="<?php bloginfo('name'); ?>" >
          <?php
            $ctravel_adven_lite_banner_heading = get_theme_mod('banner_heading');
            $ctravel_adven_lite_banner_sub_heading = get_theme_mod('banner_sub_heading');
            if( !empty($ctravel_adven_lite_banner_heading) || !empty($ctravel_adven_lite_banner_sub_heading)){ ?>
              <div class="bannercontent">
                <div class="banner_heading"><h3><?php echo esc_html($ctravel_adven_lite_banner_heading); ?></h3></div><!--banner_heading-->
                <div class="banner_sub_heading"><?php echo esc_html($ctravel_adven_lite_banner_sub_heading); ?></div><!--banner_heading-->
              </div><!--bannercontent-->
          <?php } ?>
        </div>  <!--homeslider-->

        
              <?php endif; ?>
      <?php }elseif(is_page()){?>
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/skin/images/innerbanner.jpg" alt="<?php bloginfo('name'); ?>">          
    <?php }?>
  </div><!--banner-->
</section><!--banner-->

