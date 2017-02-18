<?php // Template Name: Welcome to Our Blog

get_header(); ?>

    <div class="wrap">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
                <h2><?php the_title();?></h2>
                <p>Check out these fuckin posts:</p>
                <hr />
                <?php wp_nav_menu( array(
                    'theme_location' => 'evergreen-content',
                    'menu_class' => 'evergreen-content',
                )); ?>
                <hr />
            </main><!-- #main -->
        </div><!-- #primary -->
    </div><!-- .wrap -->

<?php get_footer();