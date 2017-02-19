<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package micky
 */
$theme_sidebar_position = $thumb = $attachment_url = $thumb_w = $thumb_h = $image =  $sidebar_layout = '';
$sidebar_layout = get_theme_mod('sidebar_layout');
if(isset($sidebar_layout) && !empty($sidebar_layout)){
	$theme_sidebar_position = get_theme_mod('sidebar_layout');
}
if(empty($sidebar_layout)){
$theme_sidebar_position = 'right';
}

$thumb = get_post_thumbnail_id($post->ID);
$attachment_url = wp_get_attachment_url($thumb, 'full');
if(is_single()){ 
	$image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'micky-blog-single' )[0];
}else{
	if($theme_sidebar_position == 'full'){
		$image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' )[0];
	}else{
		$image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'micky-blog-small' )[0];
	}
}
?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="blog_post_wrapper_main">
      <div class="blog_thumbnail"> 
	  <?php if (has_post_thumbnail($post->ID)){ ?>
		<img src="<?php echo esc_url($image); ?>" class="img-responsive" alt="bubble img">
	  <?php } ?>
	  </div>
</div>
<div class="blog_desc blog_details_desc mar_b_30">
	<h3><a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title(); ?></a></h3>
	<div class="bottom">
	<?php micky_posted_on(); ?>  
		<span class="link_icon">
		<a href="<?php echo esc_url(get_permalink()); ?>"><i class="fa fa-chevron-right"></i></a>
		</span>
	</div>
	<div class="blog_content">
		<p><?php the_excerpt(); ?></p>
	</div>
</div>
</div><!-- #post-## -->