<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package micky
 */
$footer_logo_image = $footer_logo_width = $footer_logo_height = $footer_copyrigth = $micky_footer_logo = $micky_footer_logo_width = $micky_footer_logo_height = $micky_footer_copyright = '';

$micky_footer_logo = get_theme_mod('site_footer_logo');
$micky_footer_logo_width = get_theme_mod('footer_logo_width');
$micky_footer_logo_height = get_theme_mod('footer_logo_height');
$micky_footer_copyright = get_theme_mod('footer_copyright');

if(isset($micky_footer_logo) && !empty($micky_footer_logo)){
	$footer_logo_image = get_theme_mod('site_footer_logo');
}else{
	$footer_logo_image = get_template_directory_uri().'/assets/images/Logo.svg';
}

if(isset($micky_footer_logo_width) && !empty($micky_footer_logo_width)){
	$footer_logo_width = get_theme_mod('footer_logo_width');
}else{
	$footer_logo_width = 98;
}

if(isset($micky_footer_logo_height) && !empty($micky_footer_logo_height)){
	$footer_logo_height = get_theme_mod('footer_logo_height');
}else{
	$footer_logo_height = 56;
}

if(isset($micky_footer_copyright) && !empty($micky_footer_copyright)){
	$footer_copyrigth = get_theme_mod('footer_copyright');
}else{
	$footer_copyrigth = 'Copyright &copy; 2016 by Micky';
}
?>
<footer>
  <div class="wrapper_main footer_section_main">
   <div class="container">
    <div class="row">
     <div class="col-lg-3 col-md-3 col-sm-3">
      <div class="footer_logo"> <a href="<?php echo esc_url( home_url( '/' )); ?>"> <img src="<?php echo esc_url($footer_logo_image); ?>" alt="mk_logo" style="width:<?php echo esc_attr($footer_logo_width); ?>px; height: <?php echo esc_attr($footer_logo_height); ?>px;"> </a> </div>
     </div>
     <div class="col-lg-6 col-md-6 col-sm-6">
      <p class="footer_copyright"><?php echo esc_html($footer_copyrigth); ?></p>
     </div>
     <div class="col-lg-3 col-md-3 col-sm-3">
      <div class="social_icons footer_social">
	  </div>
     </div>
    </div>
   </div>
  </div>
 </footer>
</div>
<?php wp_footer(); ?>
</body>
</html>