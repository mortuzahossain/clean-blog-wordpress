<?php
function page_meta_box(){
	add_meta_box(
		'page-meta-box',
		'Sub Title (If Needed)',
		'page_meta_box_callback',
		array('page','post')
	);
}
function page_meta_box_callback($post)
{
?>
	<input type="text" name="page_meta_box_subtitle" class="widefat" value="<?php echo get_post_meta($post->ID,'page_meta_box_subtitle',true); ?>">
<?php
	
}
add_action( 'add_meta_boxes' ,'page_meta_box' );


function page_meta_box_subtitle_save_in_database($post_id)
{
	update_post_meta(
		$post_id,
		'page_meta_box_subtitle',
		$_POST['page_meta_box_subtitle'],
		''
	);
}
add_action( 'save_post' , 'page_meta_box_subtitle_save_in_database' );