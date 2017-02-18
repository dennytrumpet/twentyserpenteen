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
                <?php $query = new WP_Query(array(
                    'post_type'=> 'post'
                )); ?>
                <?php if($query->have_posts()): ?>
                    <p>Check out <i>these</i> fuckin posts:</p>
                    <?php while ($query->have_posts() ): ?>
                        <?php $query->the_post(); ?>
                        <article>
                        <h2><a href="<?php the_permalink(); ?>"> <?php the_title ();?></a></h2>
                        <?php the_content(); ?>
                        </article>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
                <hr />
                <?php if(have_posts()): ?>
                    <?php while (have_posts() ): ?>
                        <?php the_post(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                <?php endif; ?>


            </main><!-- #main -->
        </div><!-- #primary -->
    </div><!-- .wrap -->

<?php get_footer();