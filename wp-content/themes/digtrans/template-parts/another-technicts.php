<div class="another-posts">
    <div class="flex_container">
        <b class="single-services-title">Рекомендуемая техника</b>
        <div class="main_gallery">
            <?php
                $params = array(
                    'post_type' => 'technics',
                    'posts_per_page' => -1,
                );
                $query = new WP_Query( $params );
                ?>
                <?php if($query->have_posts()): ?>
                    <?php while ($query->have_posts()): $query->the_post() ?>
                        <?php $image_technik = get_field('image_technik'); 
                            $name_technik = get_field('name_technik');
                            $price_technik = get_field('price_technik');
                            $smena_technik = get_field('smena_technik'); 
                        ?>
                        <div class="main_gallery_slide">
                            <a class="technik_link" href="<?=the_permalink( $post->ID )?>">
                                <img src="<?php echo $image_technik['url'] ?>" alt="">
                                <b class="title-techniks"><?php echo $name_technik;?></b>
                                <ul class="characteristics_technik">
                                    <li>Цена: <i><?php echo $price_technik;?></i></li>
                                    <li>Смена: <?php echo $smena_technik;?></li>
                                </ul>
                                <span class="org-button">Подробнее</span>
                            </a>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
        </div>
    </div>
</div>


<script>
    $('.main_gallery').slick({
        arrows: true,
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        fade: false,
        dots: false,
        dotsClass: 'slick-dots'
    });
</script>