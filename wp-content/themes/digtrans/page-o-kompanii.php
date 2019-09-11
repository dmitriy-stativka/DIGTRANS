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
    <?php include('wp-content/themes/digtrans/template-parts/call-back-another.php');?>
    <?php include('wp-content/themes/digtrans/template-parts/utp.php');?>
</div>
<style>
    .entry-title{
        display: none;
    }
</style>

<?php get_footer();?>