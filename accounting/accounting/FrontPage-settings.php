<?php
$array = array();
	/*	Row 0
	----------------------------------*/
	$columns = '';
	$columns[] = array(
		'col' => '12',
		'class' => '',
		'blocks' => array(
			array(
				'lable'	=> 'Slideshow',
				'class'	=> '',
				'type'	=> 'slideshow',
			),
		)
	);
	$array[] = array(
		'class'			=> 'row_0 color_mood_dark row_slider_text',
		'div_id'		=> '',
		'max_columns'	=> '1',
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
				'lable'	=> 'Callour',
				'class'	=> '',
				'type'	=> 'callout',
			),
		)
	);
	$array[] = array(
		'class'			=> 'row_1 width_1000 color_mood_light row_callout',
		'div_id'		=> '',
		'max_columns'	=> '1',
		'columns'		=> $columns,
	);
	
	/*	Row 2
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
		'class'			=> 'row_2 width_1000 color_mood_dark row_textblock',
		'div_id'		=> '',
		'max_columns'	=> '1',
		'columns'		=> $columns,
	);
	
	/*	Row 3
	----------------------------------*/
	$columns = '';
	$columns[] = array(
		'col' => '6',
		'class' => '',
		'blocks' => array(
			array(
				'lable'	=> 'Text',
				'class'	=> '',
				'type'	=> 'text',
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
		'class'			=> 'row_3 width_1000 color_mood_dark row_video_text',
		'div_id'		=> '',
		'max_columns'	=> '2',
		'columns'		=> $columns,
	);
	
	/*	Row 4
	----------------------------------*/
	$columns = '';
	$columns[] = array(
		'col' => '12',
		'class' => '',
		'blocks' => array(
			array(
				'lable'	=> 'People Grid',
				'class'	=> '',
				'type'	=> 'people_grid',
			),
		)
	);
	$array[] = array(
		'class'			=> 'row_4 width_1000 color_mood_dark row_people_grid',
		'div_id'		=> '',
		'max_columns'	=> '1',
		'columns'		=> $columns,
	);
	
	/*	Row 6
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
		'class'			=> 'row_6 width_1000 color_mood_dark row_blog_grid',
		'div_id'		=> '',
		'max_columns'	=> '1',
		'columns'		=> $columns,
	);
	
	/*	Row 7
	----------------------------------*/
	$columns = '';
	$columns[] = array(
		'col' => '12',
		'class' => '',
		'blocks' => array(
			array(
				'lable'	=> 'Testimonial Carousel',
				'class'	=> '',
				'type'	=> 'testimonial_carousel',
			),
		)
	);
	$array[] = array(
		'class'			=> 'row_7 width_1000 color_mood_dark row_testimonial_carousel',
		'div_id'		=> '',
		'max_columns'	=> '1',
		'columns'		=> $columns,
	);
	
	/*	Row 8
	----------------------------------*/
	$columns = '';
	$columns[] = array(
		'col' => '12',
		'class' => '',
		'blocks' => array(
			array(
				'lable'	=> 'Logo Carousel',
				'class'	=> '',
				'type'	=> 'logo_carousel',
			),
		)
	);
	$array[] = array(
		'class'			=> 'row_8 width_1000 color_mood_light row_logo_carousel',
		'div_id'		=> '',
		'max_columns'	=> '1',
		'columns'		=> $columns,
	);
	
	
	return $array;