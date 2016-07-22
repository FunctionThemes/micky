<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package micky
 */
get_header(); 
$page_sidebar_position = $page_sidebar_layout = '';
$page_sidebar_layout = get_theme_mod('page_sidebar_layout');

if(isset($page_sidebar_layout) && !empty($page_sidebar_layout)){
	$page_sidebar_position = get_theme_mod('page_sidebar_layout');
}
if(empty($page_sidebar_layout)){
$page_sidebar_position = 'right';
}
?>
<div class="wrapper_main breadcum_part mar_b_100">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcum_inner main">
				<h3 class=""><?php the_title(); ?></h3>
				</div>
			</div> 
		</div>
	</div>
</div>
<div class="wrapper_main ">
	<?php if ( !function_exists( 'fw_get_db_settings_option' )){	?>
	<div class="container">
	<div class="row">
	<?php } ?>
		<?php if($page_sidebar_position == 'left') { ?>
		<div class="col-lg-4 col-md-4 col-sm-12">
		<div class="micky_sidebar_area">
		<?php micky_sidebar(); ?>
		</div>
		</div>
		<?php } if($page_sidebar_position != 'full') { ?>
		<div class="col-lg-8 col-md-8 col-sm-12">
		<?php } else { ?>
			<?php if ( !function_exists( 'fw_get_db_settings_option' )){	?>
			<div class="col-lg-12 col-md-12 col-sm-12">
			<?php } ?>
		<?php } ?>
		<?php
		while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/content', 'page' );
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
		endwhile; // End of the loop.
		?>
		<?php
		if($page_sidebar_position != 'full') { ?>
		</div>
		<?php }else { ?>
		</div>
		<?php } if($page_sidebar_position == 'right') { ?>
		<div class="col-lg-4 col-md-4 col-sm-12">
		<div class="micky_sidebar_area">
		<?php micky_sidebar(); ?>
		</div>
		</div>
		<?php } ?>
	<?php if ( !function_exists( 'fw_get_db_settings_option' )){	?>
	</div>
	</div>
	<?php } ?>
</div>
<?php get_footer(); ?>