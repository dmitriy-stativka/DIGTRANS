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

	<footer>

    </footer>

    
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="wp-content/themes/digtrans/js/slick.js"></script>
    
    <script>
        
		$('.main_gallery').slick({
            arrows: true,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
            dotsClass: 'slick-dots',
		});
		
		
</script>


<?php wp_footer(); ?>

</body>
</html>
