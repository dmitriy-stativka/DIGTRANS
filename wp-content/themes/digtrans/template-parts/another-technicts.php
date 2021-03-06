<div class="another-posts">
    <div class="flex_container">
        <b class="single-services-title"><?php pll_e('social16'); ?></b>
        <div class="main_gallery_another">
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
                            $firm_technology = get_field('firm_technology');
                            $price_technik = get_field('price_technik');
                            $smena_technik = get_field('smena_technik'); 
                        ?>
                        <div class="main_gallery_slide">
                            <a class="technik_link" href="<?=the_permalink( $post->ID )?>">
                                <div class="technik_link_image">
                                    <img src="<?php echo $image_technik['sizes']['gallery-size'];?>" alt="">
                                    <!-- $image_technik['url'] -->
                                </div>
                                <b class="title-techniks"><?php echo $name_technik;?><br><?php echo $firm_technology;?></b>
                                <ul class="characteristics_technik">
                                    <li><?php pll_e('social6'); ?> <i><?php echo $price_technik;?></i></li>
                                    <li><?php pll_e('social7'); ?> <?php echo $smena_technik;?></li>
                                </ul>
                                <span class="org-button"><?php pll_e('social10'); ?></span>
                            </a>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
        </div>
    </div>
</div>
