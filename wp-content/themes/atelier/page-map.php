<?php
/*
Template Name: Map
*/


get_header();
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php while (have_posts()) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class('slider-post'); ?>>

                    <iframe width="100%" height="510px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps?sll=37.06250000000001,-95.677068&amp;sspn=57.94889164378686,96.35404905924051&amp;t=m&amp;q=5+Rue+Thomas+Edison,+72000+Le+Mans,+France&amp;dg=opt&amp;ie=UTF8&amp;hq=&amp;hnear=5+Rue+Thomas+Edison,+72000+Le+Mans,+France&amp;z=14&amp;ll=48.024766,0.178713&amp;output=embed"></iframe>

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
