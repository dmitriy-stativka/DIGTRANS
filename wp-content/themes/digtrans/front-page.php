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
            <?php include('/template-parts/techniks.php');?>
        </div>
    </div>
    <div class="call-back">
        <div class="flex_container">
            <b class="title-name">Особые условия крупным клиентам </b>
            <p>У вас крупная компания?  Мы предлагаем выгодные условия </p>
            <p><span>Наш специалист свяжется с вами в течение 5 минут!</span></p>
            <?php echo do_shortcode('[contact-form-7 id="72" title="Без названия"]');?>
        </div>
    </div>
    <div class="utp">
        <div class="flex_container">
            <b class="title-name">Почему стоит с нами работать</b>
            <?php include('/template-parts/utp.php');?>
        </div>
    </div>
</div>

<script>
    $('.main_gallery').slick({
        arrows: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        dotsClass: 'slick-dots'
    });
</script>

<?php get_footer();?>
