<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'icon'       => array(
		'type' => 'icon',
		'label' => __( 'Icon', 'fw' )
	),
	'title'    => array(
		'type'  => 'text',
		'label' => __( 'Title', 'fw' ),
		'desc'  => __( 'Icon title', 'fw' ),
	),

    //custom
    'custom_link'    => array(
        'type'  => 'text',
        'label' => __( 'Custom Link', 'clean' ),
        'desc'  => __( 'Link for the icon', 'clean' ),
    ),
);