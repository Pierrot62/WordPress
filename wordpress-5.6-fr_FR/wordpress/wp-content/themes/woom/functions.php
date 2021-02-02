<?php 


register_nav_menus( array('menu-principal' => 'Menu principal') );


function wpc_customize_register($wp_customize) {
	$wp_customize->add_section('wpc_logo_section', array(
			'title'          => __('Logo', 'woom'),
			'priority'       => 30,
			'description'    => __('Téléchargez un logo pour remplacer le nom et la description par défaut du site dans l\'en-tête', 'woom')
		)
	);
	$wp_customize->add_setting('wpc_logo');
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'wpc_logo', array(
			'label'      => __('Logo', 'woom'),
			'section'    => 'wpc_logo_section',
			'settings'   => 'wpc_logo')
		)
	);
}
add_action('customize_register', 'wpc_customize_register');