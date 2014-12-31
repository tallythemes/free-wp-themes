<?php
$array = array();
	/*	Row 0
	----------------------------------*/
	$columns = '';
	$columns[] = array(
		'col' => '8',
		'class' => '',
		'blocks' => array(
			array(
				'lable'	=> 'Slideshow',
				'class'	=> '',
				'type'	=> 'slideshow',
			),
		)
	);
	$columns[] = array(
		'col' => '4',
		'class' => '',
		'blocks' => array(
			array(
				'lable'	=> 'Text',
				'class'	=> '',
				'type'	=> 'text',
			),
		)
	);
	$array[] = array(
		'class'			=> 'row_0 width_1170 color_mood_light row_slider_text',
		'div_id'		=> '',
		'max_columns'	=> '2',
		'columns'		=> $columns,
	);
	
	
	/*	Row 1
	----------------------------------*/
	$columns = '';
	$columns[] = array(
		'col' => '12',
		'class' => '',
		'blocks' => array(
			array(
				'lable'	=> 'Text Block',
				'class'	=> '',
				'type'	=> 'textblock',
			),
		)
	);
	$array[] = array(
		'class'			=> 'row_1 width_1170 color_mood_dark row_textblock',
		'div_id'		=> '',
		'max_columns'	=> '1',
		'columns'		=> $columns,
	);
	
	/*	Row 2
	----------------------------------*/
	$columns = '';
	$columns[] = array(
		'col' => '6',
		'class' => '',
		'blocks' => array(
			array(
				'lable'	=> 'Accordion',
				'class'	=> '',
				'type'	=> 'accordion',
			),
		)
	);
	$columns[] = array(
		'col' => '6',
		'class' => '',
		'blocks' => array(
			array(
				'lable'	=> 'Video',
				'class'	=> '',
				'type'	=> 'video',
			),
		)
	);
	$array[] = array(
		'class'			=> 'row_2 width_1170 color_mood_dark row_acvi',
		'div_id'		=> '',
		'max_columns'	=> '2',
		'columns'		=> $columns,
	);
	
	
	
	
	/*	Row 3
	----------------------------------*/
	$columns = '';
	$columns[] = array(
		'col' => '12',
		'class' => '',
		'blocks' => array(
			array(
				'lable'	=> 'Blog Grid',
				'class'	=> '',
				'type'	=> 'blog_grid',
			),
		)
	);
	$array[] = array(
		'class'			=> 'row_3 width_1170 color_mood_dark row_blog_grid',
		'div_id'		=> '',
		'max_columns'	=> '1',
		'columns'		=> $columns,
	);
	
	
	/*	Row 4
	----------------------------------*/
	$columns = '';
	$columns[] = array(
		'col' => '6',
		'class' => '',
		'blocks' => array(
			array(
				'lable'	=> 'Testimonial Slideshow',
				'class'	=> '',
				'type'	=> 'testimonial_slideshow',
			),
		)
	);
	$columns[] = array(
		'col' => '6',
		'class' => '',
		'blocks' => array(
			array(
				'lable'	=> 'Map',
				'class'	=> '',
				'type'	=> 'map',
			),
		)
	);
	$array[] = array(
		'class'			=> 'row_4 width_1170 color_mood_dark row_testimonial_map',
		'div_id'		=> '',
		'max_columns'	=> '4',
		'columns'		=> $columns,
	);	
	/*	Row 5
	----------------------------------*/
	$columns = '';
	$columns[] = array(
		'col' => '3',
		'class' => '',
		'blocks' => array(
			array(
				'lable'	=> 'Callour',
				'class'	=> '',
				'type'	=> 'callout',
			),
		)
	);
	$array[] = array(
		'class'			=> 'row_3 width_1170 color_mood_dark row_callout',
		'div_id'		=> '',
		'max_columns'	=> '3',
		'columns'		=> $columns,
	);
	return $array;