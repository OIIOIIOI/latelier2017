<?php

$post_class = '';

$shortcode = get_post_meta(get_the_ID(), 'shortcode', true);
if ($shortcode != '')
    $post_class = 'slider-post';

get_header();
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php while (have_posts()) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class($post_class); ?>>

                    <?php
                    if ($shortcode != '')
                        echo do_shortcode($shortcode);
                    ?>

                    <header class="entry-header">
                        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                    </header>

                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>

                    <nav class="pages-navigation grid-4-medium-3-small-2 has-gutter-l" role="navigation">
                        <?php
                        $children = get_pages(array(
                            'parent' => get_the_ID(),
                            'sort_column' => 'menu_order',
                        ));

                        foreach ($children as $child)
                        {
                            $disabled = get_post_meta($child->ID, 'disabled', true);

                            $url = get_the_permalink($child->ID);
                            if ($disabled == 'true')
                                $url = '#';

                            $img_url = '';
                            if (has_post_thumbnail($child->ID))
                                $img_url = get_the_post_thumbnail_url($child->ID, 'medium');
                            ?>

                            <div>
                                <a href="<?php echo $url; ?>" class="<?php echo ($disabled == 'true') ? 'disabled' : ''; ?>">
                                    <div class="image-wrapper ratio-3-2">
                                        <div class="image-bg" style="background-image: url('<?php echo $img_url; ?>');"></div>
                                    </div>
                                    <h4 class="service-title"><?php echo $child->post_title; ?></h4>
                                </a>
                            </div>

                            <?php
                        }
                        ?>
                    </nav>

                </article>

            <?php endwhile; ?>

        </main>
    </div>

<?php
get_footer();
