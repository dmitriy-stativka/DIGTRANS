<?php get_header();?>
<div class="content">
    <div class="flex_container">
        <div class="main_gallery">
            <?php
            $params = array(
                'post_type' => 'slider',
                'posts_per_page' => -1,
            );
            $query = new WP_Query( $params );
            ?>
            <?php if($query->have_posts()): ?>
                    <?php while ($query->have_posts()): $query->the_post() ?>
                            <?php $image_slider = get_field('image_slider');
                            $title_slider = get_field('title_slider');
                            $price_slider = get_field('price_slider');
                            $smena_slider = get_field('smena_slider');
                            $link_slider = get_field('link_slider'); ?>

                            <div class="main_gallery_slide">
                                <img src="<?php echo $image_slider['url'] ?>" alt="">
                                <p><?php echo $title_slider; ?></p>
                                <p><?php echo $price_slider; ?></p>
                                <p><?php echo $smena_slider; ?></p>
                                <p><?php echo $link_slider; ?></p>



                            </div>

                    <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php get_footer();?>
