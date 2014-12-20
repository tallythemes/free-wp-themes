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
		'class'			=> 'row_0 color_mood_dark',
		'div_id'		=> 'tallykit_FrontPage_row_slideshow',
		'lable'			=> 'Slideshow',
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
				'lable'	=> 'Text Block',
				'class'	=> '',
				'type'	=> 'textblock',
			),
		)
	);
	$array[] = array(
		'class'			=> 'row_1 width_1170 color_mood_dark',
		'div_id'		=> 'tallykit_FrontPage_row_textblock',
		'lable'			=> 'Text Block',
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
				'lable'	=> 'People Carousel',
				'class'	=> '',
				'type'	=> 'people_carousel',
			),
		)
	);
	$array[] = array(
		'class'			=> 'row_2 width_1170 color_mood_dark',
		'div_id'		=> 'tallykit_FrontPage_row_people_carousel',
		'lable'			=> 'People Carousel',
		'max_columns'	=> '1',
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
				'lable'	=> 'Text',
				'class'	=> '',
				'type'	=> 'text',
			),
		)
	);
	$array[] = array(
		'class'			=> 'row_3 width_1170 color_mood_light',
		'div_id'		=> 'tallykit_FrontPage_row_text',
		'lable'			=> 'Text',
		'max_columns'	=> '1',
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
				'lable'	=> 'Blog Grid',
				'class'	=> '',
				'type'	=> 'blog_grid',
			),
		)
	);
	$array[] = array(
		'class'			=> 'row_4 width_1170 color_mood_dark',
		'div_id'		=> 'tallykit_FrontPage_row_blog_grid',
		'lable'			=> 'Blog Grid',
		'max_columns'	=> '1',
		'columns'		=> $columns,
	);	

	/*	Row 5
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
		'class'			=> 'row_5 width_1170 color_mood_dark',
		'div_id'		=> 'tallykit_FrontPage_row_logo_carousel',
		'lable'			=> 'Logo Carousel',
		'max_columns'	=> '1',
		'columns'		=> $columns,
	);
	return $array;