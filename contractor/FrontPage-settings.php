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
		'class'			=> 'row_1 width_960 color_mood_dark',
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
				'lable'	=> 'People Grid',
				'class'	=> '',
				'type'	=> 'people_grid',
			),
		)
	);
	$array[] = array(
		'class'			=> 'row_2 width_960 color_mood_light',
		'div_id'		=> 'tallykit_FrontPage_row_people_grid',
		'lable'			=> 'People Grid',
		'max_columns'	=> '2',
		'columns'		=> $columns,
	);
	
	/*	Row 3
	----------------------------------*/
	$columns = '';
	$columns[] = array(
		'col' => '7',
		'class' => '',
		'blocks' => array(
			array(
				'lable'	=> 'Portfolio Slideshow',
				'class'	=> '',
				'type'	=> 'portfolio_slideshow',
			),
		)
	);
	$columns[] = array(
		'col' => '5',
		'class' => '',
		'blocks' => array(
			array(
				'lable'	=> 'Portfolio Grid',
				'class'	=> '',
				'type'	=> 'portfolio_grid',
			),
		)
	);
	$array[] = array(
		'class'			=> 'row_3 width_960 color_mood_dark',
		'div_id'		=> 'tallykit_FrontPage_row_portfolio_slideshow_portfolio_grid',
		'lable'			=> 'Portfolio Slideshow and Portfolio Grid',
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
				'lable'	=> 'Testimonial Slideshow',
				'class'	=> '',
				'type'	=> 'testimonial_slideshow',
			),
		)
	);
	$array[] = array(
		'class'			=> 'row_4 width_960 color_mood_dark',
		'div_id'		=> 'tallykit_FrontPage_row_testimonial_slideshow',
		'lable'			=> 'Testimonial',
		'max_columns'	=> '2',
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
				'lable'	=> 'Blog Grid',
				'class'	=> '',
				'type'	=> 'blog_grid',
			),
		)
	);
	$array[] = array(
		'class'			=> 'row_5 width_960 color_mood_light',
		'div_id'		=> 'tallykit_FrontPage_row_blog_grid',
		'lable'			=> 'Blog Grid',
		'max_columns'	=> '1',
		'columns'		=> $columns,
	);		
	return $array;
	
	
	/*	Row 6
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
		'class'			=> 'row_6 width_960 color_mood_light',
		'div_id'		=> 'tallykit_FrontPage_row_callout',
		'lable'			=> 'Callour',
		'max_columns'	=> '1',
		'columns'		=> $columns,
	);