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
		'class'			=> 'row_1 width_1060 color_mood_dark',
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
				'lable'	=> 'Callour',
				'class'	=> '',
				'type'	=> 'callout',
			),
		)
	);
	$array[] = array(
		'class'			=> 'row_2 width_1060 color_mood_light',
		'div_id'		=> 'tallykit_FrontPage_row_callout',
		'lable'			=> 'Callour',
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
				'lable'	=> 'Video',
				'class'	=> '',
				'type'	=> 'video',
			),
		)
	);
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
	$array[] = array(
		'class'			=> 'row_3 width_1060 color_mood_dark',
		'div_id'		=> 'tallykit_FrontPage_row_video_text',
		'lable'			=> 'Video and Text',
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
				'lable'	=> 'Blog Grid',
				'class'	=> '',
				'type'	=> 'blog_grid',
			),
		)
	);
	$array[] = array(
		'class'			=> 'row_4 width_1060 color_mood_light',
		'div_id'		=> 'tallykit_FrontPage_row_blog_grid',
		'lable'			=> 'Blog Grid',
		'max_columns'	=> '1',
		'columns'		=> $columns,
	);	
	
	/*	Row 5
	----------------------------------*/
	$columns = '';
	$columns[] = array(
		'col' => '7',
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
		'col' => '5',
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
		'class'			=> 'row_5 width_1060 color_mood_dark',
		'div_id'		=> 'tallykit_FrontPage_row_testimonial_map',
		'lable'			=> 'Testimonial and Map',
		'max_columns'	=> '2',
		'columns'		=> $columns,
	);
	
	/*	Row 9
	----------------------------------*/
	$columns = '';
	$columns[] = array(
		'col' => '12',
		'class' => '',
		'blocks' => array(
			array(
				'lable'	=> 'Portfolio Carousel',
				'class'	=> '',
				'type'	=> 'portfolio_carousel',
			),
		)
	);
	$array[] = array(
		'class'			=> 'row_9 width_1060 color_mood_dark',
		'div_id'		=> 'tallykit_FrontPage_row_portfolio_carousel',
		'lable'			=> 'Portfolio Carousel',
		'max_columns'	=> '1',
		'columns'		=> $columns,
	);
	
	/*	Row 13
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
		'class'			=> 'row_13 width_1060 color_mood_dark',
		'div_id'		=> 'tallykit_FrontPage_row_logo_carousel',
		'lable'			=> 'Logo Carousel',
		'max_columns'	=> '1',
		'columns'		=> $columns,
	);
	return $array;