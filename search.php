<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package micky
 */
get_header();
$theme_sidebar_position = $sidebar_layout = '';
$sidebar_layout = get_theme_mod('sidebar_layout');

if(isset($sidebar_layout) && !empty($sidebar_layout)){
	$theme_sidebar_position = get_theme_mod('sidebar_layout');
}
if(empty($sidebar_layout)){
$theme_sidebar_position = 'right';
}
?>
<div class="wrapper_main breadcum_part">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcum_inner main">
				<h3 class=""><?php echo esc_html__('Search','micky'); ?></h3> 
				</div>
			</div>
		</div>
	</div>
</div>
<div class="wrapper_main Blog_details_section bg_gray_light">
	<div class="container">
		<div class="row">
		<?php if($theme_sidebar_position == 'left') { ?>
		<div class="col-lg-4 col-md-4 col-sm-12">
		<div class="micky_sidebar_area">
		<?php micky_sidebar(); ?>
		</div>
		</div>
		<?php } if($theme_sidebar_position != 'full') { ?>
		<div class="col-lg-8 col-md-8 col-sm-12">
		<?php } else { ?>
		<div class="col-lg-12 col-md-12 col-sm-12">
		<?php } ?>
		<?php
		if ( have_posts() ) : ?>
				<div class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'micky' ), '<span>' . get_search_query() . '</span>' ); ?></div>
			<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content', 'search' );
			endwhile;
			the_posts_navigation();
		else :
			get_template_part( 'template-parts/content', 'none' );
		endif; ?>
		<?php
		if($theme_sidebar_position != 'full') { ?>
		</div>
		<?php }else { ?>
		</div>
		<?php } if($theme_sidebar_position == 'right') { ?>
		<div class="col-lg-4 col-md-4 col-sm-12">
		<div class="micky_sidebar_area">
		<?php micky_sidebar(); ?>
		</div>
		</div>
		<?php } ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>