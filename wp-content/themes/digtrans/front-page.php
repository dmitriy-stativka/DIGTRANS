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
                                <div class="flex_row">
                                    <div class="flex_col--1-2">
                                        <div class="main_gallery_text">
                                            <a href="<?php echo $link_slider; ?>">
                                                <b><?php echo $title_slider; ?></b>
                                            </a>
                                            <div class="price_slider">
                                                <p>Цена: <span><?php echo $price_slider; ?></span></p>
                                            </div>
                                            <p class="smena_slider">Смена: <?php echo $smena_slider; ?> </p>
                                            <a href="#" class="org-button">Заказать звонок</a>
                                        </div>
                                    </div>
                                    <div class="flex_col--2-4">
                                        <div class="main_gallery_image">
                                            <a href="<?php echo $link_slider; ?>">
                                                <img src="<?php echo $image_slider['url'] ?>" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <div class="technics">
            <b class="title-name">Аренда спецтехники в Одессе</b>
            <div class="flex_row">
                <div class="flex_col--1-4">
                    lorem
                </div>
                <div class="flex_col--1-4">
                    lorem
                </div>
                <div class="flex_col--1-4">
                    lorem
                </div>
                <div class="flex_col--1-4">
                    lorem
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer();?>
