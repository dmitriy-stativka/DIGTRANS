<div class="flex_row">
    <?php
        $params = array(
            'post_type' => 'technics',
            'posts_per_page' => 4,
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



                    <div class="flex_col--1-4">
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
        <?php endif; 
    ?>
</div>