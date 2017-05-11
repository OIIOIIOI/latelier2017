<?php

class Walker_Atelier_Services_Menu extends Walker_Nav_Menu
{

    function start_el (&$output, $item, $depth = 0, $args = array(), $id = 0)
    {
        $url = $item->url;
        if (in_array('disabled', $item->classes))
            $url = '#';

        $img_url = '';
        if (has_post_thumbnail($item->object_id))
            $img_url = get_the_post_thumbnail_url($item->object_id, 'medium');

        ob_start();
        ?>

        <div>
            <a href="<?php echo $url; ?>" target="<?php echo $item->target; ?>" class="<?php echo ($url == '#') ? 'disabled' : ''; ?>">
                <div class="image-wrapper ratio-3-2">
                    <div class="image-bg" style="background-image: url('<?php echo $img_url; ?>');"></div>
                </div>
                <h4 class="service-title"><?php echo $item->title; ?></h4>
            </a>
        </div>

        <?php
        $output .= ob_get_clean();
    }

}
