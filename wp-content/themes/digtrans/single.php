<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package digtrans
 */

get_header(); ?>

<?php $image_technik = get_field('image_technik'); 
	$name_technik = get_field('name_technik');
	$price_technik = get_field('price_technik');
	$smena_technik = get_field('smena_technik'); 
	$characteristics_technik = get_field('characteristics_technik'); 
	$description_technik = get_field('description_technik'); 

?>

	<div class="single-technik">
		<div class="flex_container">
			<div class="flex_row">
				<div class="flex_col--1-3">
					<b class="single-title"><?php echo $name_technik;?></b>
					<ul class="list_items_techniks">
						<?php while ( have_rows('characteristics_technik') ) : the_row(); ?>
							<li>
								<span><?php the_sub_field('title_technik') ;?>:</span>
								<span><?php the_sub_field('about_technik') ;?></span>
							</li>
						<?php endwhile; ?>
					</ul>
					<ul class="characteristics_technik">
						<li>Цена: <i><?php echo $price_technik;?></i></li>
						<li>Смена: <?php echo $smena_technik;?></li>
					</ul>
					<a class="org-button call-button">Заказать звонок</a>
				</div>
				<div class="flex_col--2-4">
					<div class="single-image">
						<img src="<?php echo $image_technik['url'] ?>" alt="">
					</div>
				</div>
			</div>
			<div class="description">
				<b class="title-name">Технические характеристики</b>
				<?php echo $description_technik;?>
			</div>
		</div>
	</div>

<?php
get_footer();