<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package digtrans
 */

get_header(); ?>

<?php $image_service = get_field('image_service'); 
	$title_service = get_field('title_service');
	$text_service = get_field('text_service'); 
?>



<div class="single-services">
		<div class="flex_container">
		
            <div class="single-image">
                <img src="<?php echo $image_service['url'] ?>" alt="">
            </div>
            <b class="single-services-title"><?php echo $title_service;?></b>
            
            <?php echo $text_service;?>
                    
					
			
			
		</div>
	</div>
	<?php include('/template-parts/call-back.php');?>
    <?php include('/template-parts/contacts.php');?>
    
    <?php include('/template-parts/another-technicts.php');?>
    


    


<style>
    .call-back{
        margin-bottom: 0;
    }
</style>
<?php
get_footer();