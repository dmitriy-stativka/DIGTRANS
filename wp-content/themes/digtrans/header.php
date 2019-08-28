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
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="wp-content/themes/digtrans/js/slick.js"></script>
    <title><?php the_title(); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php $home_page = get_home_url();?>
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
                    <span>Оказание строительных услуг</span>
                    <b>Аренда спецтехники</b>
                </div>
            </a>
        </div>
        <div class="header_worktime">
            <span>Мы работаем:</span>
            <b>С 8:00 - 19:00</b>
        </div>
        <div class="header_tell">
            <span>Номер телефона:</span>
            <b><a href="tel:+38(066)666-66-66">+38(066)666-66-66</a></b>
        </div>
        <div class="header_call-back">
            <a onclick="$('html, body').animate({scrollTop:$('.call-back').offset().top}, '500', 'swing');" class="org-button call-back-button">Заказать звонок</a>
        </div>
    </div>
    <div class="header_nav">
        <div class="flex_container">
            <ul class="header_nav-list">
                <?php wp_list_pages('title_li='); ?>
            </ul>
        </div>
    </div>
</header>