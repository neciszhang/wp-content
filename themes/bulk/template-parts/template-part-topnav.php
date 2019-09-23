<div class="main-menu">
    <nav id="site-navigation">     
        <div class="container">   
            <div class="navbar-header">
                <?php if (has_nav_menu('main_menu')) : ?>
                    <div id="main-menu-panel" class="open-panel" data-panel="main-menu-panel">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                <?php endif; ?>
                <div class="site-header" >
                    <div class="site-branding-logo">
                        <?php the_custom_logo(); ?>
                    </div>
                    <div class="site-branding-text navbar-brand">
                        <?php if (is_front_page()) : ?>
                            <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
                        <?php else : ?>
                            <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
                        <?php endif; ?>

                        <?php
                        $description = get_bloginfo('description', 'display');
                        if ($description || is_customize_preview()) :
                            ?>
                            <p class="site-description">
                                <?php echo esc_html($description); ?>
                            </p>
                        <?php endif; ?>
                    </div><!-- .site-branding-text -->
                </div>
            </div>  
            <?php
            wp_nav_menu(array(
                'theme_location' => 'main_menu',
                'depth' => 5,
                'container' => 'div',
                'container_class' => 'menu-container',
                'menu_class' => 'nav navbar-nav navbar-right',
                'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                'walker' => new wp_bootstrap_navwalker(),
            ));
            ?>
        </div>    
    </nav> 
</div>
<?php if (has_header_image() && is_home()) { ?>
    <div class="custom-header">
        <!-- <div class="custom-header-media">
            <img src="https://piratescollective.oss-cn-shanghai.aliyuncs.com/wp-content/uploads/2019/09/wp-bg.jpg" alt="">
        </div> -->

        <!-- <div class="custom-header-media"> -->
            
            <?php
             # the_custom_header_markup(); 
            ?>
            
        <!-- </div> -->

        <div class="site-branding-text-header header-image-text">

            <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>

            <?php
            $description = get_bloginfo('description', 'display');
            if ($description || is_customize_preview()) :
                ?>
                <p class="site-description">
                    <?php echo $description; ?>
                </p>
            <?php endif; ?>
            <?php do_action('bulk_after_header_image_title'); ?>
        </div><!-- .site-branding-text -->

    </div><!-- .custom-header -->
<?php } ?>