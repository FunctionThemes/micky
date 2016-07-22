<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package micky
 */
if ( function_exists( 'fw_get_db_settings_option' )){	
$micky_data = fw_get_db_settings_option(); 
}
$theme_sidebar_position = $thumb = $attachment_url = $thumb_w = $thumb_h = $image = '';
if(isset($micky_data['theme_sidebar']) && !empty($micky_data['theme_sidebar'])){
	$theme_sidebar_position = $micky_data['theme_sidebar'];
}
$thumb = get_post_thumbnail_id($post->ID);
$attachment_url = wp_get_attachment_url($thumb, 'full');
if(is_single()){ 
	$thumb_w ='750';
	$thumb_h ='575';
	$image = micky_resize($attachment_url, $thumb_w, $thumb_h, true);
}else{
	if($theme_sidebar_position == 'full'){
		$thumb_w ='1140';
		$thumb_h ='350';
		$image = micky_resize($attachment_url, $thumb_w, $thumb_h, true);
	}else{
		$thumb_w ='750';
		$thumb_h ='350';
		$image = micky_resize($attachment_url, $thumb_w, $thumb_h, true);
	}
}
?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php if(is_single()){ ?>
<div class="blog_post_wrapper_main">
      <div class="blog_thumbnail"> 
	  <?php if (has_post_thumbnail($post->ID) || the_post_thumbnail()){ ?>
		<img src="<?php echo esc_url($image); ?>" class="img-responsive" alt="bubble img">
	  <?php } ?>
	  </div>
     </div>
     <div class="blog_desc blog_details_desc">
      <h3><?php the_title(); ?></h3>
		<div class="bottom">
		  <?php micky_posted_on(); ?>
		</div>
      <div class="blog_content">
       <?php the_content(); ?>
      </div>
      </div>
<?php }else{ ?>
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
		<p><?php echo micky_get_excerpt(200); ?></p>
	</div>
</div>
<?php } ?>
</div><!-- #post-## -->