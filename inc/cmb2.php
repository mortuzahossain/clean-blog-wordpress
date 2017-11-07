<?php


if (!function_exists('clean_blog_custom_meta_box')) {
	add_action( 'cmb2_admin_init', 'clean_blog_custom_meta_box' );

	function clean_blog_custom_meta_box() {

		$prefix = '_clean_blog';

		$cmb = new_cmb2_box( array(
			'id'            => 'test_metabox',
			'title'         => __( 'Add Sub Title'),
			'object_types'  => array( 'page','post' ), // Post type
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
		) );

		$cmb->add_field( array(
			'id'         => $prefix . 'subtitle',
			'type'       => 'text',
			'name'       => __( 'Sub Title'),
			'desc'       => __( 'It Will be shown bellow the title (optional).'),
		) );

	}

}

