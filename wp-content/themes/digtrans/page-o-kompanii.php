<?php
/*
*
*
* Template name: page-o-kompanii
*
*/
?>
<?php get_header();?>



<div class="o-kompanii">
    <div class="flex_container">
        <?php
            while ( have_posts() ) :
                the_post();
                get_template_part( 'template-parts/content', 'page' );
            endwhile; // End of the loop.
        ?>	
    </div>

    <?php include('/template-parts/call-back.php');?>
    <?php include('/template-parts/utp.php');?>
</div>



            


<style>
    .entry-title{
        display: none;
    }
</style>

<?php get_footer();?>