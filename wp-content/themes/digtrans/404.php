<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package digtrans
 */

get_header();
?>
<?php $home_page = get_home_url();?>

	<div class="flex_container">
        <div class="error-page">
            <b>404</b>
            <p>Страница временно не доступна, либо ее не существует. Убедитесь в правильности адреса и повторите попытку, либо вернитесь на главную.</p>
            <a class="org-button" href="<?php echo $home_page;?>">На главную</a>
        </div>
    </div>

<?php
get_footer();
