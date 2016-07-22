<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package micky
 */

$main_logo = $micky_main_logo = $micky_logo_width = $micky_logo_height = $logo_width = $logo_height = '';

$micky_main_logo = get_theme_mod('site_logo');
$micky_logo_width = get_theme_mod('logo_width');
$micky_logo_height = get_theme_mod('logo_height');

if(isset($micky_main_logo) && !empty($micky_main_logo)){
	$main_logo = get_theme_mod('site_logo');
}else{
	$main_logo = get_template_directory_uri().'/assets/images/Logo-black.svg';
}

if(isset($micky_logo_width) && !empty($micky_logo_width)){
	$logo_width = get_theme_mod('logo_width');
}else{
	$logo_width = 98;
}

if(isset($micky_logo_height) && !empty($micky_logo_height)){
	$logo_height = get_theme_mod('logo_height');
}else{
	$logo_height = 56;
}
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="main_wrapper_cover">
<header>
<div class="wrapper_main header_top_main">
   <div class="container">
    <div class="row">
     <div class="full_width header_navigation">
      <div class="col-sm-3">
	   <div class="mk_logo zoomIn wow">
		   <a href="<?php echo esc_url( home_url( '/' )); ?>"><img src="<?php echo esc_url($main_logo); ?>" alt="mk_logo" style="width:<?php echo esc_attr($logo_width); ?>px; height: <?php echo esc_attr($logo_height); ?>px;">
		   </a>
	   </div>
	  </div>
      <div class="col-sm-9">   
       <!-- navbar toggle start -->
		  <div class="navbar-header pull-right">
			  <button type="button" class="navbar-toggle navbar_toogle" data-toggle="collapse" data-target="#myNavbar"> 
				<i class="fa fa-list-ul"></i> 
			  </button>
		  </div>
       <!-- navbar toggle end--> 
       <!-- navigation start -->
       <div class="mk_top_navigations">
	   <?php wp_nav_menu( array( 'theme_location'  => 'micky','depth' => 4 ,'menu_class' => 'menu','container' => false,'fallback_cb'=>'micky_menu_editor')); ?>
		
        </div>
       <!-- navigation end --> 
      </div>
      <!-- header_navigation_cover --> 
     </div>
    </div>
   </div>
  </div>
  <!--  header navigation end --> 
</header>

<script>
jQuery(function() {
  var height = jQuery(".wrapper_main.header_top_main").outerHeight();  
  jQuery(".wrapper_main.breadcum_part").css('margin-top',height);  

});
</script>