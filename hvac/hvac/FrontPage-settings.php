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
		'class'			=> 'row_2 width_1170',
		'div_id'		=> 'tallykit_FrontPage_row_textblock',
		'lable'	        => 'Text Block',
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
		'class'			=> 'row_1 width_960 color_mood_dark',
		'div_id'		=> 'tallykit_FrontPage_row_callout',
		'lable'			=> 'Callour',
		'max_columns'	=> '1',
		'columns'		=> $columns,
	);
	
	/*	Row 4
	----------------------------------*/
	$columns = '';
	$columns[] = array(
		'col' => '9',
		'class' => '',
		'blocks' => array(
			array(
				'lable'	=> 'Tabs',
				'class'	=> '',
				'type'	=> 'tab',
			),
		)
	);
	$columns[] = array(
		'col' => '3',
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
		'class'			=> 'row_4 width_1170 color_mood_dark',
		'div_id'		=> 'tallykit_FrontPage_row_tab_text',
		'lable'			=> 'Tabs And Text',
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
				'lable'	=> 'Gallery Single',
				'class'	=> '',
				'type'	=> 'gallery_single',
			),
		)
	);
	$array[] = array(
		'class'			=> 'row_4 color_mood_dark',
		'div_id'		=> 'tallykit_FrontPage_row_gallery_single',
		'lable'			=> 'Gallery Single',
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
				'lable'	=> 'Blog Grid',
				'class'	=> '',
				'type'	=> 'blog_grid',
			),
		)
	);
	$array[] = array(
		'class'			=> 'row_7 width_1170 color_mood_dark',
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
				'lable'	=> 'Testimonial Slideshow',
				'class'	=> '',
				'type'	=> 'testimonial_slideshow',
			),
		)
	);
	$array[] = array(
		'class'			=> 'row_5 width_960 color_mood_dark',
		'div_id'		=> 'tallykit_FrontPage_row_testimonial_slideshow',
		'lable'			=> 'Testimonial Slideshow',
		'max_columns'	=> '1',
		'columns'		=> $columns,
	);
	
	return $array;