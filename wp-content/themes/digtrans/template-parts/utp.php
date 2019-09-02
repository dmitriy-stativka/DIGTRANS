<div class="utp">
    <div class="flex_container">
        <b class="title-name"><?php pll_e('social15'); ?></b>
        <div class="flex_row">
            <?php
                $params = array(
                    'post_type' => 'utp',
                    'posts_per_page' => -1,
                );
                $query = new WP_Query( $params );
                ?>
                <?php if($query->have_posts()): ?>
                    <?php while ($query->have_posts()): $query->the_post() ?>
                            <?php  $utp_image = get_field('utp_image'); 
                                    $utp_item_text = get_field('utp_item_text');

                                $utp_text = get_field('utp_text');
                                $smena_technik = get_field('smena_technik'); 
                            ?>
                            <div class="flex_col--1-2">
                                <?php echo $utp_text;?>
                                <div class="utp_list">
                                    <?php while ( have_rows('utp_list') ) : the_row(); ?>
                                    <?php $utp_item_image = get_sub_field('utp_item_image');?>

                                        <div class="utp_item">
                                            <img src="<?php echo $utp_item_image['url'];?>" alt="">
                                            <p><?php the_sub_field('utp_item_text') ;?></p>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            </div>
                            <div class="flex_col--1-2">
                                <img src="<?php echo $utp_image['url'];?>" alt="">
                            </div>
                        <?php endwhile; ?>
                <?php endif; 
            ?>
        </div>
    </div>
</div>