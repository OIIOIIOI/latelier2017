<?php
/*
Template Name: Prestations
*/

get_header();
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php while (have_posts()) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <header class="entry-header">
                        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                    </header>

                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>

                    <nav id="services-navigation" class="grid-4 has-gutter-l" role="navigation">
                        <?php wp_nav_menu(array(
                            'theme_location' => 'menu-services',
                            'menu_id' => 'menu-services',
                            'container' => '',
                            'items_wrap' => '%3$s',
                            'walker' => new Walker_Atelier_Services_Menu(),
                        )); ?>
                    </nav>

                </article>

            <?php endwhile; ?>

        </main>
    </div>

<?php
get_footer();
