<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package foodlife.shop
 */


get_header();

while ( have_posts() ) :
	the_post();
    
	// получаем шаблон страницы из template-parts: content-page-main.php, content-page-....php ...
	get_template_part( 'template-parts/content-page', $post->post_name );
endwhile;

//get_sidebar();
get_footer();
