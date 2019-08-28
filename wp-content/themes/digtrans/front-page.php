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
                                            <a onclick="$('html, body').animate({scrollTop:$('.call-back').offset().top}, '500', 'swing');" class="org-button">Заказать звонок</a>
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
    <?php include('/template-parts/call-back.php');?>
    <div class="utp">
        <div class="flex_container">
            <b class="title-name">Почему стоит с нами работать</b>
            <?php include('/template-parts/utp.php');?>
        </div>
    </div>
    <div class="services">
        <div class="flex_container">
            <b class="title-name">Наши строительные услуги</b>
            <?php include('/template-parts/services.php');?>
        </div>
    </div>
    <div class="about">
        <div class="flex_container">
            <?php
                $params = array(
                    'post_type' => 'about',
                    'posts_per_page' => 1,
                );
                $query = new WP_Query( $params );
                ?>
                <?php if($query->have_posts()): ?>
                        <?php while ($query->have_posts()): $query->the_post() ?>
                            <?php $text_about = get_field('text_about');  
                             if(get_user_locale() == 'ru_RU'){ 
                                $id = 29;              
                                $page_about = get_permalink(pll_get_post($id));   
                            }elseif(get_user_locale() == 'uk'){ 
                                $id = 31;
                                $page_about = get_permalink(pll_get_post($id));   
                            } 
                                echo $text_about;
                            ?>
                        <?php endwhile; ?>
                <?php endif; 
            ?>
            <a href="<?php echo $page_about; ?>" class="org-button">Подробнее</a>
        </div>
    </div>
    <?php include('/template-parts/contacts.php');?>
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
