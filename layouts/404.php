<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package micky
 */
get_header(); 
if ( function_exists( 'fw_get_db_settings_option' )){	
$micky_data = fw_get_db_settings_option(); 
}
$error_page_name = $error_page_title = $error_page_subtitle = $error_title = $error_subtitle = '';
if(isset($micky_data['error_page_name']) && !empty($micky_data['error_page_name'])){
	$error_page_name = $micky_data['error_page_name'];
}else{
	$error_page_name = '404 ERROR';
}
if(isset($micky_data['error_page_title']) && !empty($micky_data['error_page_title'])){
	$error_page_title = $micky_data['error_page_title'];
}else{
	$error_page_title = 'Sorry, This Page Is Not Available';
}
if(isset($micky_data['error_page_subtitle']) && !empty($micky_data['error_page_subtitle'])){
	$error_page_subtitle = $micky_data['error_page_subtitle'];
}else{
	$error_page_subtitle = 'Something is not quite right here';
}
if(isset($micky_data['error_title']) && !empty($micky_data['error_title'])){
	$error_title = $micky_data['error_title'];
}else{
	$error_title = '404';
}
if(isset($micky_data['error_subtitle']) && !empty($micky_data['error_subtitle'])){
	$error_subtitle = $micky_data['error_subtitle'];
}else{
	$error_subtitle = 'Page Not Found';
}
?>
<div class="wrapper_main breadcum_part">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcum_inner main">
				<h3 class=""><?php echo esc_html($error_page_name); ?></h3> 
				</div>
			</div>
		</div>
	</div>
</div>

<div class="wrapper_main error_page_bg">
	<div class="container">
		<div class="row">
			<div class="main_center_wrap">
				<h3><?php echo esc_html($error_page_title); ?></h3>
				<p><?php echo esc_html($error_page_subtitle); ?></p>
				<div class="full_width micky_error_text">
					<h1><?php echo esc_html($error_title); ?></h1>
					<p><?php echo esc_html($error_subtitle); ?></p>
				</div>
				<div class="full_width next_prev_links">
					<h3><?php echo esc_html__('Go to','micky'); ?></h3>
					<a href="<?php echo esc_url( home_url( '/' )); ?>" class="home_page"><?php echo esc_html__('home','micky'); ?></a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>