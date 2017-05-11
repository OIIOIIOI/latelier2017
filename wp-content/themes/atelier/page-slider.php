<?php
/*
Template Name: Slider Page
*/


get_header();
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php while (have_posts()) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class('slider-post'); ?>>

                    <?php
                    $shortcode = get_post_meta(get_the_ID(), 'shortcode', true);
                    if ($shortcode != '')
                        echo do_shortcode($shortcode);
                    ?>

                    <header class="entry-header">
                        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                    </header>

                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>

                </article>

            <?php endwhile; ?>

        </main>
    </div>

<?php
get_footer();