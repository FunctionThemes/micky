<?php
/*********=============== Sidebar ============*****************/
if(!function_exists('micky_sidebar')){
	function micky_sidebar(){
		get_sidebar();
	}
}
/*********=============== add a menu start ============*****************/
if(!function_exists('micky_menu_editor')){
 function micky_menu_editor($args){
	    if ( ! current_user_can( 'manage_options' ) ){
		    return;
	   	}
        // see wp-includes/nav-menu-template.php for available arguments
        extract( $args );
        $link = $link_before
              . '<a href="' .admin_url( 'nav-menus.php' ) . '">' . $before . esc_html__('Add a menu','micky') . $after . '</a>'
             . $link_after;
        // We have a list
       if ( FALSE !== stripos( $items_wrap, '<ul' )
        
	       or FALSE !== stripos( $items_wrap, '<ol' )
		)
		{
			$link = "<li>$link</li>";
		}
		$output = sprintf( $items_wrap, $menu_id, $menu_class, $link );
		if ( ! empty ( $container ) ){
			$output  = "<$container class='$container_class' id='$container_id'>$output</$container>";
		}
		if ( $echo ){
			echo "$output";
		}
		return $output;
	}
}
/*********=============== custom comment ============*****************/
function micky_custom_comments($comment, $args, $depth){
	$GLOBALS['comment'] = $comment;
	extract($args, EXTR_SKIP);
	if ( 'div' == $args['style'] ) {
		$tag = 'div';
		$add_below = 'comment';
	}else{
		$tag = 'li';
		$add_below = 'div-comment';
	}
?>
	<<?php echo esc_attr($tag); ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ) ?> id="comment-<?php comment_ID() ?>">
	<?php if ( 'div' != $args['style'] ) : ?>
	<div id="div-comment-<?php comment_ID() ?>" class="">
	<?php endif; ?>
		
		<div class="micky_comment_main">
			<div class="blog_avtar"> 
				<?php echo get_avatar($comment,$size='70') ?>
			</div>
			<div class="micky_comment_data">
				<div class="author_title">
				  <h5><?php echo esc_html($comment->comment_author); ?></h5> 
				  <span class="comment_date"><a><?php echo  esc_html( get_comment_date() ); ?></a></span>
				  <span class="comment_time"><?php comment_time('H:i:a')  ?></span>
				  <?php comment_reply_link( array_merge( $args, array(  'add_below' => $add_below,'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
				 </div>
				 <?php if ( $comment->comment_approved == '0' ) { ?>
				<?php echo esc_html__( 'Your comment is awaiting moderation.','micky' ); ?>
				<?php }else{ ?>		
				<?php echo esc_html( comment_text()); } ?>
			</div>
		</div>
		
	<?php if ( 'div' != $args['style'] ) : ?>
	</div>
	<?php endif; ?>
	<?php
}

/********************* start global variables function ****************************/
function micky_post_variables(){
	global $post;
	return $post;
}  
/******************** end global variables function *******************************/
/*********************** Require File Start **********************************/
require_once get_template_directory() . '/vendor/include/micky-enqueue.php';
/************************* Require File End ************************************/
?>