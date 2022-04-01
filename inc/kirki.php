<?php

Kirki::add_config( 'theme_config_id', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );



// Main Theme Option

Kirki::add_panel( 'panel_id', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Theme Option', 'templatemo_535_softy_pinko' ),
) );


// Switch off on

Kirki::add_field( 'theme_config_id', [
	'type'        => 'switch',
	'settings'    => 'switch_setting',
	'label'       => esc_html__( 'Show or Hide', 'templatemo_535_softy_pinko' ),
	'section'     => 'section_id1',
	'default'     => 'on',
	'priority'    => 10,
	'choices'     => [
		'on'  => esc_html__( 'Show', 'templatemo_535_softy_pinko' ),
		'off' => esc_html__( 'Hide', 'templatemo_535_softy_pinko' ),
	],
] );

// Hero Section
Kirki::add_section( 'section_id1', array(
    'title'          => esc_html__( 'Hero Section', 'templatemo_535_softy_pinko' ),
    'panel'          => 'panel_id',
    'priority'       => 160,
) );

// Hero text
Kirki::add_field( 'theme_config_id', [
	'type'     => 'editor',
	'settings' => 'text_setting',
	'label'    => esc_html__( 'Title', 'templatemo_535_softy_pinko' ),
	'section'  => 'section_id1',
	'default'  => esc_html__( 'We provide the best strategy
    to grow up your business', 'templatemo_535_softy_pinko' ),
	'priority' => 10,
] );

// Hero description
Kirki::add_field( 'theme_config_id', [
	'type'     => 'textarea',
	'settings' => 'textarea_setting',
	'label'    => esc_html__( 'Description', 'templatemo_535_softy_pinko' ),
	'section'  => 'section_id1',
	'default'  => esc_html__( 'Softy Pinko is a professional Bootstrap 4.0 theme designed by Template Mo for your company at absolutely free of charge', 'templatemo_535_softy_pinko' ),
	'priority' => 10,
] );

// Btn text
Kirki::add_field( 'theme_config_id', [
	'type'     => 'text',
	'settings' => 'text_setting1',
	'label'    => esc_html__( 'Button text', 'templatemo_535_softy_pinko' ),
	'section'  => 'section_id1',
	'default'  => esc_html__( 'DISCOVER ME', 'templatemo_535_softy_pinko' ),
	'priority' => 10,
] );

// Hero-Background
Kirki::add_field( 'theme_config_id', [
	'type'        => 'background',
	'settings'    => 'background_setting',
	'label'       => esc_html__( 'Background Control', 'templatemo_535_softy_pinko' ),
	'description' => esc_html__( 'Background conrols are pretty complex - but extremely useful if properly used.', 'templatemo_535_softy_pinko' ),
	'section'     => 'section_id1',
	'default'     => [
		'background-color'      => 'rgba(20,20,20,.8)',
		'background-image'      => '',
		'background-repeat'     => 'no-repeat',
		'background-position'   => 'center center',
		'background-size'       => 'cover',
		'background-attachment' => 'scroll',
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '#welcome',
		],
	],
] );



// Hero add reapeater

Kirki::add_field( 'theme_config_id', [
	'type'        => 'repeater',
	'label'       => esc_html__( 'Repeater Control', 'templatemo_535_softy_pinko' ),
	'section'     => 'section_id1',
	'priority'    => 10,
	'row_label' => [
		'type'  => 'field',
		'value' => esc_html__( 'Feature Section', 'templatemo_535_softy_pinko' ),
		'field' => 'link_text',
	],
	'button_label' => esc_html__('Add Feature Section', 'templatemo_535_softy_pinko' ),
	'settings'     => 'my_repeater_setting',

	'fields' => [
		'Hero-Image' => [
			'type'        => 'image',
			'label'       => esc_html__( 'Image', 'templatemo_535_softy_pinko' ),
			'default'     => '',
		],
		'Hero-Title' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Title', 'templatemo_535_softy_pinko' ),
			'default'     => '',
		],
		'Hero-description' => [
			'type'        => 'textarea',
			'label'       => esc_html__( 'Description', 'templatemo_535_softy_pinko' ),
			'default'     => '',
		],

        
	],

    'choices' => [
		'limit' => 3
	],




] );



// Feature 2nd OPtion

// Switch off on

Kirki::add_field( 'theme_config_id', [
	'type'        => 'switch',
	'settings'    => 'switch_set33ting',
	'label'       => esc_html__( 'Show or Hide', 'templatemo_535_softy_pinko' ),
	'section'     => 'section_id2',
	'default'     => 'on',
	'priority'    => 10,
	'choices'     => [
		'on'  => esc_html__( 'Show', 'templatemo_535_softy_pinko' ),
		'off' => esc_html__( 'Hide', 'templatemo_535_softy_pinko' ),
	],
] );

// Feature Section
Kirki::add_section( 'section_id2', array(
    'title'          => esc_html__( 'Feature Section', 'templatemo_535_softy_pinkotemplatemo_535_softy_pinkotemplatemo_535_softy_pinko' ),
    'panel'          => 'panel_id',
    'priority'       => 160,
) );

// feature1 image
Kirki::add_field( 'theme_config_id', [
	'type'        => 'image',
	'settings'    => 'image_sett78ing_url',
	'label'       => esc_html__( 'Feature1 Image', 'templatemo_535_softy_pinko' ),
	'section'     => 'section_id2',
	'default'     => '',
] );

// feature1 title
Kirki::add_field( 'theme_config_id', [
	'type'     => 'text',
	'settings' => 'text_setting12',
	'label'    => esc_html__( 'Feature1 Title', 'templatemo_535_softy_pinko' ),
	'section'  => 'section_id2',
	'default'  => esc_html__( '
    Let’s discuss about you project', 'templatemo_535_softy_pinkotemplatemo_535_softy_pinko' ),
	'priority' => 10,
] );

// feature1 description
Kirki::add_field( 'theme_config_id', [
	'type'     => 'textarea',
	'settings' => 'textarea_setting234',
	'label'    => esc_html__( 'Feature1 Description', 'templatemo_535_softy_pinkotemplatemo_535_softy_pinko' ),
	'section'  => 'section_id2',
	'default'  => esc_html__( 'Nullam sit amet purus libero. Etiam ullamcorper nisl ut augue blandit, at finibus leo efficitur. Nam gravida purus non sapien auctor, ut aliquam magna ullamcorper.', 'templatemo_535_softy_pinko' ),
	'priority' => 10,
] );




// feature2 title
Kirki::add_field( 'theme_config_id', [
	'type'     => 'text',
	'settings' => 'text_setti2ng322',
	'label'    => esc_html__( 'Feature2 Title', 'templatemo_535_softy_pinko' ),
	'section'  => 'section_id2',
	'default'  => esc_html__( 'We can help you to grow your business', 'templatemo_535_softy_pinko' ),
	'priority' => 10,
] );

// feature2 description
Kirki::add_field( 'theme_config_id', [
	'type'     => 'textarea',
	'settings' => 'textarea_set4ting',
	'label'    => esc_html__( 'Feature2 Description', 'templatemo_535_softy_pinko' ),
	'section'  => 'section_id2',
    'default'  => esc_html__( 'Aenean pretium, ipsum et porttitor auctor, metus ipsum iaculis nisi, a bibendum lectus libero vitae urna. Sed id leo eu dolor luctus congue sed eget ipsum. Nunc nec luctus libero. Etiam quis dolor elit.', 'templatemo_535_softy_pinko' ),
	'priority' => 10,
] );

// feature2 image
Kirki::add_field( 'theme_config_id', [
	'type'        => 'image',
	'settings'    => 'image_set22ting_url',
	'label'       => esc_html__( 'Feature2 Image', 'templatemo_535_softy_pinko' ),
	'section'     => 'section_id2',
	'default'     => '',
] );



// Work 3nd OPtion

// Switch off on

Kirki::add_field( 'theme_config_id', [
	'type'        => 'switch',
	'settings'    => 'switch_se3t433ting',
	'label'       => esc_html__( 'Show or Hide', 'templatemo_535_softy_pinko' ),
	'section'     => 'section_id3',
	'default'     => 'on',
	'priority'    => 10,
	'choices'     => [
		'on'  => esc_html__( 'Show', 'templatemo_535_softy_pinko' ),
		'off' => esc_html__( 'Hide', 'templatemo_535_softy_pinko' ),
	],
] );

// Work Section
Kirki::add_section( 'section_id3', array(
    'title'          => esc_html__( 'Work Section', 'templatemo_535_softy_pinko' ),
    'panel'          => 'panel_id',
    'priority'       => 160,
) );

// work title
Kirki::add_field( 'theme_config_id', [
	'type'     => 'text',
	'settings' => 'te45xt_setting',
	'label'    => esc_html__( 'Title', 'templatemo_535_softy_pinko' ),
	'section'  => 'section_id3',
	'default'  => esc_html__( 'Work Process', 'templatemo_535_softy_pinko' ),
	'priority' => 10,
] );

// work description
Kirki::add_field( 'theme_config_id', [
	'type'     => 'textarea',
	'settings' => 'textar234ea_setting',
	'label'    => esc_html__( 'Description', 'templatemo_535_softy_pinko' ),
	'section'  => 'section_id3',
	'default'  => esc_html__( 'Aenean nec tempor metus. Maecenas ligula dolor, commodo in imperdiet interdum, vehicula ut ex. Donec ante diam.', 'templatemo_535_softy_pinko' ),
	'priority' => 10,
] );

// work reapeater

Kirki::add_field( 'theme_config_id', [
	'type'        => 'repeater',
	'label'       => esc_html__( 'Add Work Box', 'templatemo_535_softy_pinko' ),
	'section'     => 'section_id3',
	'priority'    => 10,
	'row_label' => [
		'type'  => 'field',
		'value' => esc_html__( 'Your Custom Value', 'templatemo_535_softy_pinko' ),
		'field' => 'link_text',
	],
	'button_label' => esc_html__('Add Work Box', 'templatemo_535_softy_pinko' ),
	'settings'     => 'my_red3peater_setting',
	'fields' => [
		'linsdh4k_img' => [
			'type'        => 'image',
			'label'       => esc_html__( 'Link URL', 'templatemo_535_softy_pinko' ),
			'description' => esc_html__( 'This will be the link URL', 'templatemo_535_softy_pinko' ),
			'default'     => '',
		],
		'gsgr33heading' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Heading', 'templatemo_535_softy_pinko' ),
			'default'     => '',
		],
		'dfhudf55subheading' => [
			'type'        => 'textarea',
			'label'       => esc_html__( 'Subheading', 'templatemo_535_softy_pinko' ),
			'default'     => '',
		],

	],
	'choices' => [
		'limit' => 6
	],
] );


// Testimonial 4rd OPtion

// Switch off on

Kirki::add_field( 'theme_config_id', [
	'type'        => 'switch',
	'settings'    => 'switc6h_se3t433ting',
	'label'       => esc_html__( 'Show or Hide', 'templatemo_535_softy_pinko' ),
	'section'     => 'section_id4',
	'default'     => 'on',
	'priority'    => 10,
	'choices'     => [
		'on'  => esc_html__( 'Show', 'templatemo_535_softy_pinko' ),
		'off' => esc_html__( 'Hide', 'templatemo_535_softy_pinko' ),
	],
] );

// Testimonial Section
Kirki::add_section( 'section_id4', array(
    'title'          => esc_html__( 'Testimonial Section', 'templatemo_535_softy_pinko' ),
    'panel'          => 'panel_id',
    'priority'       => 160,
) );

// Testimonial title

Kirki::add_field( 'theme_config_id', [
	'type'     => 'text',
	'settings' => 'texjjft_setting',
	'label'    => esc_html__( 'Title', 'templatemo_535_softy_pinko' ),
	'section'  => 'section_id4',
	'default'  => esc_html__( 'What do they say?', 'templatemo_535_softy_pinko' ),
	'priority' => 10,
] );

// Testimonial content

Kirki::add_field( 'theme_config_id', [
	'type'     => 'textarea',
	'settings' => 'text43t3garea_setting',
	'label'    => esc_html__( 'Description', 'templatemo_535_softy_pinko' ),
	'section'  => 'section_id4',
	'default'  => esc_html__( 'Donec tempus, sem non rutrum imperdiet, lectus orci fringilla nulla, at accumsan elit eros a turpis. Ut sagittis lectus libero.', 'templatemo_535_softy_pinko' ),
	'priority' => 10,
] );

// Testimonial reapeater

Kirki::add_field( 'theme_config_id', [
	'type'        => 'repeater',
	'label'       => esc_html__( 'Add Testimonial', 'templatemo_535_softy_pinko' ),
	'section'     => 'section_id4',
	'priority'    => 10,
	'row_label' => [
		'type'  => 'field',
		'value' => esc_html__( 'Your Custom Value', 'templatemo_535_softy_pinko' ),
		'field' => 'link_text',
	],
	'button_label' => esc_html__('Add Testimonial ', 'templatemo_535_softy_pinko' ),
	'settings'     => 'my_reqwrgspeater_setting',

	'fields' => [
		'testiimg' => [
			'type'        => 'image',
			'label'       => esc_html__( 'Testimonial Image', 'templatemo_535_softy_pinko' ),
			'default'     => '',
		],
		'tescontent' => [
			'type'        => 'textarea',
			'label'       => esc_html__( 'Testimonial Content', 'templatemo_535_softy_pinko' ),
			'default'     => '',
		],
		'tejgdas' => [
			'type'        => 'image',
			'label'       => esc_html__( 'Testimonial Person image', 'templatemo_535_softy_pinko' ),
			'default'     => '',
		],
		'testipio' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Testimonial Person Name', 'templatemo_535_softy_pinko' ),
			'default'     => '',
		],
		'testuimfd' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Testimonial Person Designation', 'templatemo_535_softy_pinko' ),
			'default'     => '',
		],
	],
	'choices' => [
		'limit' => 3
	],
] );


// Price 5th OPtion

// Switch off on

Kirki::add_field( 'theme_config_id', [
	'type'        => 'switch',
	'settings'    => 'swdfdgitc6h_se3t433ting',
	'label'       => esc_html__( 'Show or Hide', 'templatemo_535_softy_pinko' ),
	'section'     => 'section_id5',
	'default'     => 'on',
	'priority'    => 10,
	'choices'     => [
		'on'  => esc_html__( 'Show', 'templatemo_535_softy_pinko' ),
		'off' => esc_html__( 'Hide', 'templatemo_535_softy_pinko' ),
	],
] );

// Price Section
Kirki::add_section( 'section_id5', array(
    'title'          => esc_html__( 'Price Section', 'templatemo_535_softy_pinko' ),
    'panel'          => 'panel_id',
    'priority'       => 160,
) );

// price title
Kirki::add_field( 'theme_config_id', [
	'type'     => 'text',
	'settings' => 'tewwhxt_setting',
	'label'    => esc_html__( 'Price Title', 'templatemo_535_softy_pinko' ),
	'section'  => 'section_id5',
	'default'  => esc_html__( 'Pricing Plans', 'templatemo_535_softy_pinko' ),
	'priority' => 10,
] );

// price content
Kirki::add_field( 'theme_config_id', [
	'type'     => 'textarea',
	'settings' => 'texethfrjsarea_setting',
	'label'    => esc_html__( 'Price Content', 'templatemo_535_softy_pinko' ),
	'section'  => 'section_id5',
	'default'  => esc_html__( 'Donec vulputate urna sed rutrum venenatis. Cras consequat magna quis arcu elementum, quis congue risus volutpat.', 'templatemo_535_softy_pinko' ),
	'priority' => 10,
] );



// price plane1 name
Kirki::add_field( 'theme_config_id', [
	'type'     => 'text',
	'settings' => 'gtext_sagetting',
	'label'    => esc_html__( 'price plane1 name', 'templatemo_535_softy_pinko' ),
	'section'  => 'section_id5',
	'default'  => esc_html__( 'Starter', 'templatemo_535_softy_pinko' ),
	'priority' => 10,
] );

// price plane1 dollar
Kirki::add_field( 'theme_config_id', [
	'type'     => 'text',
	'settings' => 'tggsext_setting',
	'label'    => esc_html__( 'price plane1 dollar', 'templatemo_535_softy_pinko' ),
	'section'  => 'section_id5',
	'default'  => esc_html__( '$ 14.50', 'templatemo_535_softy_pinko' ),
	'priority' => 10,
] );
// price plane1 yearly or monthly
Kirki::add_field( 'theme_config_id', [
	'type'     => 'text',
	'settings' => 'text_setaaating',
	'label'    => esc_html__( 'price plane1 yearly or monthly?', 'templatemo_535_softy_pinko' ),
	'section'  => 'section_id5',
	'default'  => esc_html__( 'monthly', 'templatemo_535_softy_pinko' ),
	'priority' => 10,
] );

// price plane1 specification
Kirki::add_field( 'theme_config_id', [
	'type'        => 'editor',
	'settings'    => 'ediffghtor_setting',
	'label'       => esc_html__( 'price plane1 specification', 'templatemo_535_softy_pinko' ),
	'section'     => 'section_id5',
	'default'     => '',
] );

// price plane1 btn text
Kirki::add_field( 'theme_config_id', [
	'type'     => 'text',
	'settings' => 'texauht_setting',
	'label'    => esc_html__( 'price plane1 btn text', 'templatemo_535_softy_pinko' ),
	'section'  => 'section_id5',
	'default'  => esc_html__( 'PURCHASE NOW', 'templatemo_535_softy_pinko' ),
	'priority' => 10,
] );
// price plane2 name
Kirki::add_field( 'theme_config_id', [
	'type'     => 'text',
	'settings' => 'tesxt_sethting',
	'label'    => esc_html__( 'price plane2 name', 'templatemo_535_softy_pinko' ),
	'section'  => 'section_id5',
	'default'  => esc_html__( 'Premium', 'templatemo_535_softy_pinko' ),
	'priority' => 10,
] );

// price plane2 dollar
Kirki::add_field( 'theme_config_id', [
	'type'     => 'text',
	'settings' => 'tsgsssext_setting',
	'label'    => esc_html__( 'price plane2 dollar', 'templatemo_535_softy_pinko' ),
	'section'  => 'section_id5',
	'default'  => esc_html__( '$ 21.50', 'templatemo_535_softy_pinko' ),
	'priority' => 10,
] );
// price plane2 yearly or monthly
Kirki::add_field( 'theme_config_id', [
	'type'     => 'text',
	'settings' => 'text_setffsting',
	'label'    => esc_html__( 'price plane2 yearly or monthly?', 'templatemo_535_softy_pinko' ),
	'section'  => 'section_id5',
	'default'  => esc_html__( 'monthly', 'templatemo_535_softy_pinko' ),
	'priority' => 10,
] );

// price plane2 specification
Kirki::add_field( 'theme_config_id', [
	'type'        => 'editor',
	'settings'    => 'edsitor_setting',
	'label'       => esc_html__( 'price plane2 specification', 'templatemo_535_softy_pinko' ),
	'description' => esc_html__( 'This is an editor control.', 'templatemo_535_softy_pinko' ),
	'section'     => 'section_id5',
	'default'     => '',
] );

// price plane2 btn text
Kirki::add_field( 'theme_config_id', [
	'type'     => 'text',
	'settings' => 'tgssssext_setting',
	'label'    => esc_html__( 'price plane2 btn text', 'templatemo_535_softy_pinko' ),
	'section'  => 'section_id5',
	'default'  => esc_html__( 'PURCHASE NOW', 'templatemo_535_softy_pinko' ),
	'priority' => 10,
] );
// price plane3 name
Kirki::add_field( 'theme_config_id', [
	'type'     => 'text',
	'settings' => 'tejjjjsxt_setting',
	'label'    => esc_html__( 'price plane3 name', 'templatemo_535_softy_pinko' ),
	'section'  => 'section_id5',
	'default'  => esc_html__( 'Advanced', 'templatemo_535_softy_pinko' ),
	'priority' => 10,
] );

// price plane3 dollar
Kirki::add_field( 'theme_config_id', [
	'type'     => 'text',
	'settings' => 'texghhyteet_setting',
	'label'    => esc_html__( 'price plane3 dollar', 'templatemo_535_softy_pinko' ),
	'section'  => 'section_id5',
	'default'  => esc_html__( '$ 42.00', 'templatemo_535_softy_pinko' ),
	'priority' => 10,
] );
// price plane3 yearly or monthly
Kirki::add_field( 'theme_config_id', [
	'type'     => 'text',
	'settings' => 'te43txt_setting',
	'label'    => esc_html__( 'price plane3 yearly or monthly?', 'templatemo_535_softy_pinko' ),
	'section'  => 'section_id5',
	'default'  => esc_html__( 'monthly', 'templatemo_535_softy_pinko' ),
	'priority' => 10,
] );

// price plane3 specification
Kirki::add_field( 'theme_config_id', [
	'type'        => 'editor',
	'settings'    => 'edifsfdtor_setting',
	'label'       => esc_html__( 'price plane3 specification', 'templatemo_535_softy_pinko' ),
	'description' => esc_html__( 'This is an editor control.', 'templatemo_535_softy_pinko' ),
	'section'     => 'section_id5',
	'default'     => '',
] );

// price plane3 btn text
Kirki::add_field( 'theme_config_id', [
	'type'     => 'text',
	'settings' => 'tefshhhhxt_setting',
	'label'    => esc_html__( 'price plane3 btn text', 'templatemo_535_softy_pinko' ),
	'section'  => 'section_id5',
	'default'  => esc_html__( 'PURCHASE NOW', 'templatemo_535_softy_pinko' ),
	'priority' => 10,
] );


// counter 6th OPtion

// Switch off on

Kirki::add_field( 'theme_config_id', [
	'type'        => 'switch',
	'settings'    => 'swdfdgsfsdfitc6h_se3t433ting',
	'label'       => esc_html__( 'Show or Hide', 'templatemo_535_softy_pinko' ),
	'section'     => 'section_id6',
	'default'     => 'on',
	'priority'    => 10,
	'choices'     => [
		'on'  => esc_html__( 'Show', 'templatemo_535_softy_pinko' ),
		'off' => esc_html__( 'Hide', 'templatemo_535_softy_pinko' ),
	],
] );

// Price Section
Kirki::add_section( 'section_id6', array(
    'title'          => esc_html__( 'Counter Section', 'templatemo_535_softy_pinko' ),
    'panel'          => 'panel_id',
    'priority'       => 160,
) );

Kirki::add_field( 'theme_config_id', [
	'type'        => 'background',
	'settings'    => 'background_sfsfgetting',
	'label'       => esc_html__( 'Background Control', 'templatemo_535_softy_pinko' ),
	'section'     => 'section_id6',
	'default'     => [
		'background-color'      => 'rgba(20,20,20,.8)',
		'background-image'      => '',
		'background-repeat'     => 'no-repeat',
		'background-position'   => 'center center',
		'background-size'       => 'cover',
		'background-attachment' => 'scroll',
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '.counter',
		],
	],
] );

// Counter1 Number
Kirki::add_field( 'theme_config_id', [
	'type'        => 'number',
	'settings'    => 'numggber_sedtting',
	'label'       => esc_html__( 'Counter1 Number', 'templatemo_535_softy_pinko' ),
	'section'     => 'section_id6',
	'default'     => 126,
	'choices'     => [
		'min'  => 0,
		'max'  => 807,
		'step' => 1,
	],
] );
// Counter1 Title
Kirki::add_field( 'theme_config_id', [
	'type'     => 'text',
	'settings' => 't35tfegxt_sedtting',
	'label'    => esc_html__( 'Counter1 Title', 'templatemo_535_softy_pinko' ),
	'section'  => 'section_id6',
	'default'  => esc_html__( 'Projects', 'templatemo_535_softy_pinko' ),
	'priority' => 10,
] );
// Counter2 Number
Kirki::add_field( 'theme_config_id', [
	'type'        => 'number',
	'settings'    => 'numbegr_segdddtting',
	'label'       => esc_html__( 'Counter2 Number', 'templatemo_535_softy_pinko' ),
	'section'     => 'section_id6',
	'default'     => 63,
	'choices'     => [
		'min'  => 0,
		'max'  => 807,
		'step' => 1,
	],
] );
// Counter2 Title
Kirki::add_field( 'theme_config_id', [
	'type'     => 'text',
	'settings' => 't34g5tfexft_sedgtting',
	'label'    => esc_html__( 'Counter2 Title', 'templatemo_535_softy_pinko' ),
	'section'  => 'section_id6',
	'default'  => esc_html__( 'Happy Clients', 'templatemo_535_softy_pinko' ),
	'priority' => 10,
] );
// Counter3 Number
Kirki::add_field( 'theme_config_id', [
	'type'        => 'number',
	'settings'    => 'numbeer_seg4gdddtting',
	'label'       => esc_html__( 'Counter3 Number', 'templatemo_535_softy_pinko' ),
	'section'     => 'section_id6',
	'default'     => 18,
	'choices'     => [
		'min'  => 0,
		'max'  => 807,
		'step' => 1,
	],
] );
// Counter3 Title
Kirki::add_field( 'theme_config_id', [
	'type'     => 'text',
	'settings' => 't35tfeeg4exft_sedgtting',
	'label'    => esc_html__( 'Counter3 Title', 'templatemo_535_softy_pinko' ),
	'section'  => 'section_id6',
	'default'  => esc_html__( 'Awards Wins', 'templatemo_535_softy_pinko' ),
	'priority' => 10,
] );
// Counter4 Number
Kirki::add_field( 'theme_config_id', [
	'type'        => 'number',
	'settings'    => 'numbdeer_seg4gdddtting',
	'label'       => esc_html__( 'Counter4 Number', 'templatemo_535_softy_pinko' ),
	'section'     => 'section_id6',
	'default'     => 27,
	'choices'     => [
		'min'  => 0,
		'max'  => 807,
		'step' => 1,
	],
] );
// Counter4 Title
Kirki::add_field( 'theme_config_id', [
	'type'     => 'text',
	'settings' => 't35tdfeeg4exft_sedgtting',
	'label'    => esc_html__( 'Counter4 Title', 'templatemo_535_softy_pinko' ),
	'section'  => 'section_id6',
	'default'  => esc_html__( 'Countries', 'templatemo_535_softy_pinko' ),
	'priority' => 10,
] );

// Blog section

// Switch off on

Kirki::add_field( 'theme_config_id', [
	'type'        => 'switch',
	'settings'    => 'swifsdgstch_setting',
	'label'       => esc_html__( 'Show or Hide', 'templatemo_535_softy_pinko' ),
	'section'     => 'section_id7',
	'default'     => 'on',
	'priority'    => 10,
	'choices'     => [
		'on'  => esc_html__( 'Show', 'templatemo_535_softy_pinko' ),
		'off' => esc_html__( 'Hide', 'templatemo_535_softy_pinko' ),
	],
] );

// blog Section
Kirki::add_section( 'section_id7', array(
    'title'          => esc_html__( 'Blog Section', 'templatemo_535_softy_pinko' ),
    'panel'          => 'panel_id',
    'priority'       => 160,
) );

// blog title
Kirki::add_field( 'theme_config_id', [
	'type'     => 'text',
	'settings' => 'tehashbasdxt_setting',
	'label'    => esc_html__( 'Title', 'templatemo_535_softy_pinko' ),
	'section'  => 'section_id7',
	'default'  => esc_html__( 'Blog Entries', 'templatemo_535_softy_pinko' ),
	'priority' => 10,
] );
// blog content
Kirki::add_field( 'theme_config_id', [
	'type'     => 'textarea',
	'settings' => 'textard44ea_setting',
	'label'    => esc_html__( 'Content', 'templatemo_535_softy_pinko' ),
	'section'  => 'section_id7',
	'default'  => esc_html__( 'Integer molestie aliquam gravida. Nullam nec arcu finibus, imperdiet nulla vitae, placerat nibh. Cras maximus venenatis molestie.', 'templatemo_535_softy_pinko' ),
	'priority' => 10,
] );

// Contact
// Switch off on

Kirki::add_field( 'theme_config_id', [
	'type'        => 'switch',
	'settings'    => 'swiddfsdddgstch_setting',
	'label'       => esc_html__( 'Show or Hide', 'templatemo_535_softy_pinko' ),
	'section'     => 'section_id8',
	'default'     => 'on',
	'priority'    => 10,
	'choices'     => [
		'on'  => esc_html__( 'Show', 'templatemo_535_softy_pinko' ),
		'off' => esc_html__( 'Hide', 'templatemo_535_softy_pinko' ),
	],
] );

// contact Section
Kirki::add_section( 'section_id8', array(
    'title'          => esc_html__( 'Contact Section', 'templatemo_535_softy_pinko' ),
    'panel'          => 'panel_id',
    'priority'       => 160,
) );

// contact title
Kirki::add_field( 'theme_config_id', [
	'type'     => 'text',
	'settings' => 'tedgshhbasdxt_setting',
	'label'    => esc_html__( 'Title', 'templatemo_535_softy_pinko' ),
	'section'  => 'section_id8',
	'default'  => esc_html__( 'Talk To Us', 'templatemo_535_softy_pinko' ),
	'priority' => 10,
] );
// contact content
Kirki::add_field( 'theme_config_id', [
	'type'     => 'textarea',
	'settings' => 'tddard44ea_setting',
	'label'    => esc_html__( 'Content', 'templatemo_535_softy_pinko' ),
	'section'  => 'section_id8',
	'default'  => esc_html__( 'Maecenas pellentesque ante faucibus lectus vulputate sollicitudin. Cras feugiat hendrerit semper.', 'templatemo_535_softy_pinko' ),
	'priority' => 10,
] );
//left contact title
Kirki::add_field( 'theme_config_id', [
	'type'     => 'text',
	'settings' => 'tedgssdghhbasdxt_setting',
	'label'    => esc_html__( 'Section Title', 'templatemo_535_softy_pinko' ),
	'section'  => 'section_id8',
	'default'  => esc_html__( 'Keep in touch', 'templatemo_535_softy_pinko' ),
	'priority' => 10,
] );
//left contact content
Kirki::add_field( 'theme_config_id', [
	'type'     => 'editor',
	'settings' => 'tddahdsrd44ea_setting',
	'label'    => esc_html__( 'Section Content', 'templatemo_535_softy_pinko' ),
	'section'  => 'section_id8',
	'default'  => esc_html__( '110-220 Quisque diam odio, maximus ac consectetur eu, 10260
	auctor non lorem
	<br/>
	You are NOT allowed to re-distribute Softy Pinko template on any template collection websites. Thank you.', 'templatemo_535_softy_pinko' ),
	'priority' => 10,
] );

// footer




// footer Section
Kirki::add_section( 'section_id9', array(
    'title'          => esc_html__( 'Footer Section', 'templatemo_535_softy_pinko' ),
    'panel'          => 'panel_id',
    'priority'       => 160,
) );
// Switch off on
Kirki::add_field( 'theme_config_id', [
	'type'        => 'switch',
	'settings'    => 'swiddfsdddgstch_setting',
	'label'       => esc_html__( 'Show or Hide', 'templatemo_535_softy_pinko' ),
	'section'     => 'section_id9',
	'default'     => 'on',
	'priority'    => 10,
	'choices'     => [
		'on'  => esc_html__( 'Show', 'templatemo_535_softy_pinko' ),
		'off' => esc_html__( 'Hide', 'templatemo_535_softy_pinko' ),
	],
] );
// Add social profile
Kirki::add_field( 'theme_config_id', [
	'type'        => 'repeater',
	'label'       => esc_html__( 'Add social profile', 'templatemo_535_softy_pinko' ),
	'section'     => 'section_id9',
	'priority'    => 10,
	'row_label' => [
		'type'  => 'field',
		'value' => esc_html__( 'Your Custom Value', 'templatemo_535_softy_pinko' ),
		'field' => 'link_text',
	],
	'button_label' => esc_html__('Add social profile', 'templatemo_535_softy_pinko' ),
	'settings'     => 'my_repeasgddfgter_setting',

	'fields' => [
		'about_item_igcon' => [
			'type'        => 'select',
			'label'       => esc_html__( 'About Item Icon', 'stack' ),
			'default'     => '',
            'choices'     => array(
                'fa fa-facebook' => __('facebook', 'stack'),
                'fa fa-twitter' => __('twitter', 'stack'),
                'fa fa-linkedin' => __('linkedin', 'stack'),
                'fa fa-rss' => __('rss', 'stack'),
                'fa fa-dribbble' => __('dribbble', 'stack'),
             
            )
		],
		'link_urdasgsagl' => [
			'type'        => 'link',
			'label'       => esc_html__( 'Link URL', 'templatemo_535_softy_pinko' ),
			'default'     => '',
		],
	]
] );

Kirki::add_field( 'theme_config_id', [
	'type'     => 'text',
	'settings' => 'text_s44555etting',
	'label'    => esc_html__( 'Copy Right Text', 'templatemo_535_softy_pinko' ),
	'section'  => 'section_id9',
	'default'  => esc_html__( 'COPYRIGHT © 2020 SOFTY PINKO COMPANY - DESIGN: TEMPLATEMO', 'templatemo_535_softy_pinko' ),
	'priority' => 10,
] );







