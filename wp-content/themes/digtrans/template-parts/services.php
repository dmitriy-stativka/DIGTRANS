<div class="flex_row">
    <?php
        $params = array(
            'post_type' => 'services',
            'posts_per_page' => 4,
        );
        $query = new WP_Query( $params );
        ?>
        <?php if($query->have_posts()): ?>
                <?php while ($query->have_posts()): $query->the_post() ?>
                    <?php $image_service = get_field('image_service'); 
                        $title_service = get_field('title_service');
                    ?>
                    <div class="flex_col--1-4">
                        <a class="services_link" href="<?=the_permalink( $post->ID )?>">
                            <b class="services_name"><?php echo $title_service;?></b>
                            <img src="<?php echo $image_service['url'] ?>" alt="">
                            <span class="org-button">Подробнее</span>
                        </a>
                    </div>
                <?php endwhile; ?>
        <?php endif; 
    ?>
</div>