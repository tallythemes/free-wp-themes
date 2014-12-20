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
		'class'			=> 'row_0 color_mood_light front_page_slider',
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
				'lable'	=> 'Text',
				'class'	=> '',
				'type'	=> 'text',
			),
		)
	);
	$array[] = array(
		'class'			=> 'row_1 width_1170 color_mood_dark wellcome_message',
		'div_id'		=> 'tallykit_FrontPage_row_text',
		'lable'			=> 'Text',
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
		'class'			=> 'row_2 width_1170 color_mood_dark what_we_do',
		'div_id'		=> 'tallykit_FrontPage_row_textblock',
		'lable'	        => 'Text Block',
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
				'lable'	=> 'Portfolio Grid',
				'class'	=> '',
				'type'	=> 'portfolio_grid',
			),
		)
	);
	$array[] = array(
		'class'			=> 'row_3 width_1170 color_mood_dark view_featured_work',
		'div_id'		=> 'tallykit_FrontPage_row_portfolio_grid',
		'lable'	        => 'Portfolio Grid',
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
				'lable'	=> 'Testimonial Slideshow',
				'class'	=> '',
				'type'	=> 'testimonial_slideshow',
			),
		)
	);
	$array[] = array(
		'class'			=> 'row_4 width_1170 color_mood_dark what_people_are_saying',
		'div_id'		=> 'tallykit_FrontPage_row_testimonial_slideshow',
		'lable'			=> 'Testimonial Slideshow',
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
				'lable'	=> 'Blog Grid',
				'class'	=> '',
				'type'	=> 'blog_grid',
			),
		)
	);
	$array[] = array(
		'class'			=> 'row_5 width_1170 color_mood_dark read_our_blog',
		'div_id'		=> 'tallykit_FrontPage_row_blog_grid',
		'lable'			=> 'Blog Grid',
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
				'lable'	=> 'People Grid',
				'class'	=> '',
				'type'	=> 'people_grid',
			),
		)
	);
	$array[] = array(
		'class'			=> 'row_11 width_1170 color_mood_dark row_our_team',
		'div_id'		=> 'tallykit_FrontPage_row_people_grid',
		'lable'			=> 'People Grid',
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
				'lable'	=> 'Logo Carousel',
				'class'	=> '',
				'type'	=> 'logo_carousel',
			),
		)
	);
	$array[] = array(
		'class'			=> 'row_7 width_1170 color_mood_dark row_patner_logo',
		'div_id'		=> 'tallykit_FrontPage_row_logo_carousel',
		'lable'			=> 'Logo Carousel',
		'max_columns'	=> '1',
		'columns'		=> $columns,
	);
	
	return $array;