<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package digtrans
 */

?>
<?php $home_page = get_home_url();?>
<footer class="footer">
    <div class="flex_container">
        <div class="footer_flex">
            <div class="footer_flex_col">
                <div class="logo">
                    <a href="<?php echo $home_page;?>">
                        <img src="/wp-content/themes/digtrans/images/logo.svg" alt="">
                        <div class="logo--text">
                            <span><?php pll_e('social2'); ?></span>
                            <b><?php pll_e('social3'); ?></b>
                        </div>
                    </a>
                </div>
                
            </div>
            <div class="footer_flex_col">
                <div class="info_about">
                    <span><?php pll_e('social4'); ?></span>
                    <b><?php the_field( "time_about", 29 ); ?></b>
                </div>
               
            </div>
            <div class="footer_flex_col footer_flex_col-tell">
                <span><?php pll_e('social5'); ?></span>
                <a class="footer_tell" href="tel:<?php the_field( "tel_about", 29); ?>"><?php the_field( "tel_about", 29); ?></a>
                
            </div>
            <div class="footer_flex_col">
                <a class="org-button popup__toggle call-back-button"><?php pll_e('social24'); ?></a>
            </div>
        </div>
        <div class="footer_flex footer_flex_lists">
            <div class="footer_flex_col footer_flex_techniks">
                <ul class="footer_list">
                    <b class="footer-title"><?php pll_e('social11'); ?></b>
                    <?php
                        $params = array(
                            'post_type' => 'technics',
                            'posts_per_page' => -1,
                        );
                        $query = new WP_Query( $params );
                        ?>
                        <?php if($query->have_posts()): ?>
                            <?php while ($query->have_posts()): $query->the_post() ?>
                                <?php $name_technik = get_field('name_technik'); ?>
                                <?php $firm_technology = get_field('firm_technology');?>
                                
                                <li>
                                    <a href="<?=the_permalink( $post->ID )?>"><?php echo $name_technik;?> <?php echo $firm_technology;?> </a>
                                </li>
                            <?php endwhile; ?>
                        <?php endif; 
                    ?>
                </ul>
            </div>
            <div class="footer_flex_col footer_flex_services">
                <ul class="footer_list">
                    <b class="footer-title"><?php pll_e('social12'); ?></b>
                    <?php
                        $params = array(
                            'post_type' => 'services',
                            'posts_per_page' => -1,
                        );
                        $query = new WP_Query( $params );
                        ?>
                        <?php if($query->have_posts()): ?>
                                <?php while ($query->have_posts()): $query->the_post() ?>
                                    <?php $title_service = get_field('title_service');?>
                                    <li>
                                        <a class="technik_link" href="<?=the_permalink( $post->ID )?>"><?php echo $title_service;?></a>
                                    </li>
                                <?php endwhile; ?>
                        <?php endif; 
                    ?>
                </ul>
            </div>
            <div class="footer_flex_col footer_flex_links">
                <?php 
                    if(get_user_locale() == 'ru_RU'){ 
                        $about_link = 29;              
                        $page_about = get_permalink(pll_get_post($about_link));   
                        $contacts_link = 33;
                        $page_contacts = get_permalink(pll_get_post($contacts_link));
                    }elseif(get_user_locale() == 'uk'){ 
                        $about_link = 31;
                        $page_about = get_permalink(pll_get_post($about_link));   
                        $contacts_link = 35;
                        $page_contacts = get_permalink(pll_get_post($contacts_link));
                    } 
                ?>
                <b class="footer-title">
                    <a href="<?php echo $page_about;?>"><?php pll_e('social13'); ?></a> 
                </b>
                <b class="footer-title">
                    <a href="<?php echo $page_contacts;?>"><?php pll_e('social14'); ?></a> 
                </b>
            </div>
        
        </div>
    </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.js"></script>

<div class="call-back-fixed popup__toggle"></div>

<div class="popup__overlay">
    <div class="popup">
        <a href="#" class="popup__close"></a>
        <div class="text-center">
            <b class="popup-title"><?php pll_e('social28'); ?></b>
            <p class="popup-desc"><?php pll_e('social29'); ?></p>
        </div>
        <?php echo do_shortcode('[contact-form-7 id="72" title="Send for Email"]'); ?>
    </div>
</div>


<script>
    $('input[type="tel"]').mask('+38 (000) 000-00-00');
</script>
<script>
    var p = $('.popup__overlay')
    $('.popup__toggle').click(function() {
        p.addClass('popup_open')
    })
    p.click(function(event) {
        e = event || window.event
        if (e.target == this) {
            $(p).removeClass('popup_open');
        }
    })
    $('.popup__close').click(function() {
        p.removeClass('popup_open')
    })
    $(function() {
        $('.popup__toggle').bind('click', function(e) {
            e.preventDefault();
        });
    });
</script>
<?php wp_footer(); ?>
<script>
    <?php 
        if(get_user_locale() == 'ru_RU'){  ?>
            var data = '25';
        <?php }elseif(get_user_locale() == 'uk'){ ?>
            var data = '27';
        <?php } 
    ?>
    $(function() {
        $('.page-item-' + data).addClass('current_menu_items');
        $('.page-item-' + data + ' a').attr('href', 'javascript:;');
    });
    

    $('.page-item-' + data + ' a').on('click', function(){
        $('.header-sub-menu').toggleClass('show');
        $('.header-sub-menu').slideToggle();
        $('.page-item-' + data).toggleClass('show_submenu');
    });












    var widthWindow = $(window).width();

    function appendDiv(){
        $('.current_menu_items').append($('.header-sub-menu') );
    }

    $(function checkMenu(){
        if(widthWindow < 700){
            appendDiv();
        };
    })

    








    $('.header_button').on('click', function(){
        $(this).toggleClass('open');
        $('.header_nav').slideToggle();
    })

    $('.main_gallery_another').slick({
        arrows: true,
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        dots: false,
        fade: false,
        dotsClass: 'slick-dots',
        responsive: [{
            breakpoint: 700,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        }]
    });

  
    $('.main_gallery_services').slick({
        arrows: true,
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        dots: false,
        dotsClass: 'slick-dots',
        fade: false,
        responsive: [{
            breakpoint: 700,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        }]
    });    


</script>
</body>
</html>
