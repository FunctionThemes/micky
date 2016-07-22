<?php
/**
 * template name: Blog Page
 */
get_header();
?>
<div class="wrapper_main breadcum_part">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcum_inner main">
				<h3 class=""><?php echo the_title(); ?></h3>  
				</div>
			</div>
		</div>
	</div>
</div>
<div class="wrapper_main Blog_section bg_gray_light">
	<div class="container">
		<div class="row">
		<?php
		$counter = 1;
		$blog_query = new WP_Query( array( 'post_type'=>'post','posts_per_page' => -1 ));
		if ($blog_query->have_posts()): while ($blog_query->have_posts()) : $blog_query->the_post();
		
		$post_thumb = get_post_thumbnail_id($post->ID);
		$post_attachment_url = wp_get_attachment_url($post_thumb, 'full');
		?>
		<?php if($counter == 1){ ?>
		<?php 
		if(empty($post_attachment_url)){ 
		   $post_image = get_template_directory_uri().'/assets/images/post_750_575.jpg'; 
		}else{
		$thumb_w ='750';
		$thumb_h ='575';
		$post_image = micky_resize($post_attachment_url, $thumb_w, $thumb_h, true);
		}
		?>
			<div class="col-lg-8 col-md-8 col-sm-12">
				<div class="blog_post_wrapper_main mar_b_30 ">
					<div class="blog_thumbnail"> <img src="<?php echo esc_url($post_image); ?>" class="img-responsive" alt="bubble img"> </div>
					<div class="blog_desc">
						<h3><a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title(); ?></a></h3>
						<div class="bottom">
						<span class="date"><?php echo esc_html(get_the_time('d.m.Y')); ?></span>
						<span class="link_icon">
							<a href="<?php echo esc_url(get_permalink()); ?>"><i class="fa fa-chevron-right"></i></a>
						</span>
						</div>
					</div>
				</div>
			</div>
		<?php }else{ ?>
		<?php 
		if(empty($post_attachment_url)){ 
		   $post_image = get_template_directory_uri().'/assets/images/post_360_195.jpg'; 
		}else{
		$thumb_w ='360';
		$thumb_h ='195';
		$post_image = micky_resize($post_attachment_url, $thumb_w, $thumb_h, true);
		}
		?>
			<div class="col-lg-4 col-md-4 col-sm-6">
				<div class="blog_post_wrapper">
					<div class="blog_thumbnail"> <img src="<?php echo esc_url($post_image); ?>" class="img-responsive" alt="bubble img"> </div>
					<div class="blog_desc">
						<div class="blog_title">
						<h5><a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title(); ?></a></h5>
						</div>
					<div class="bottom">
						<span class="date"><?php echo esc_html(get_the_time('d.m.Y')); ?></span>
						<span class="link_icon">
						<a href="<?php echo esc_url(get_permalink()); ?>"><i class="fa fa-chevron-right"></i></a>
					</span>
					</div>
					</div>
				</div>
			</div>
		<?php } ?>
	    <?php
		$counter++;
		endwhile; endif;  
		wp_reset_postdata();
		?>
		</div>
	</div>
</div>
<?php get_footer(); ?>