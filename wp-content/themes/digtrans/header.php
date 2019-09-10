<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package digtrans
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800&display=swap&subset=cyrillic" rel="stylesheet">
    <title><?php the_title(); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="preloader">
    <div class="loader">
        <div class="item-1"></div>
        <div class="item-2"></div>
        <div class="item-3"></div>
        <div class="item-4"></div>
        <div class="item-5"></div>
    </div>
</div>

<script>
    $(window).on('load', function () {
        $preloader = $('.preloader'),
        $loader = $preloader.find('.loader');
        $loader.fadeOut();
        $preloader.delay(350).fadeOut('slow');
    });
</script>


<?php $home_page = get_site_url();?>
<header class="header">
    <div class="language">
        <div class="flex_container">
            <ul class="header_lang">
                <?php pll_the_languages();?>
            </ul>
        </div>
    </div>
    <div class="flex_container">
        <div class="logo">
            <a href="<?php echo $home_page;?>">
                <img src="/wp-content/themes/digtrans/images/logo.svg" alt="">
                <div class="logo--text">
                    <span><?php pll_e('social2'); ?></span>
                    <b><?php pll_e('social3'); ?></b>
                </div>
            </a>
        </div>
        <div class="header_button">
            <span></span>
        </div>
        <div class="header_worktime">
            <span><?php pll_e('social4'); ?></span>
            <b><?php the_field( "time_about", 29 ); ?></b>
        </div>

        <div class="header_tell">
            <span><?php pll_e('social5'); ?></span>
            <b><a href="tel:<?php the_field( "tel_about", 29); ?>"><?php the_field( "tel_about", 29); ?></a></b>
        </div>
        <div class="header_call-back">
            <a class="org-button call-back-button popup__toggle">Заказать звонок</a>        
        </div>
    </div>
    <div class="header_nav">
        <div class="flex_container">
            <ul class="header_nav-list">
                <?php wp_list_pages('title_li='); ?>
            </ul>


            <?php wp_nav_menu();?>

            <ul class="header-sub-menu">
                <?php
                    $params = array(
                        'post_type' => 'services',
                        'posts_per_page' => -1,
                    );
                    $query = new WP_Query( $params );
                    ?>
                    <?php if($query->have_posts()): ?>

                    
                        <?php while ($query->have_posts()): $query->the_post() ?>
                            <?php $title_service = get_field('title_service'); ?>
                            <li>
                                <a href="<?=the_permalink( $post->ID )?>"><?php echo $title_service;?></a>
                            </li>
                        <?php endwhile; ?>


                    <?php endif; 

                    wp_reset_query();
                ?>
            </ul>
        </div>
    </div>
</header>

<div class="breadcrumbs-top">
	<div class="flex_container">
		<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
	</div>
</div>