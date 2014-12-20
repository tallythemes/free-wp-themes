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
		'class'			=> 'row_2 width_1104',
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
				'lable'	=> 'Text',
				'class'	=> '',
				'type'	=> 'text',
			),
		)
	);
	$array[] = array(
		'class'			=> 'row_3 width_1104 color_mood_dark',
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
				'lable'	=> 'People Grid',
				'class'	=> '',
				'type'	=> 'people_grid',
			),
		)
	);
	$array[] = array(
		'class'			=> 'row_4 width_1104 color_mood_dark',
		'div_id'		=> 'tallykit_FrontPage_row_people_grid',
		'lable'			=> 'People Grid (Our Team)',
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
				'lable'	=> 'Gallery Archive',
				'class'	=> '',
				'type'	=> 'gallery_archive',
			),
		)
	);
	$array[] = array(
		'class'			=> 'row_4 width_1104 color_mood_dark',
		'div_id'		=> 'tallykit_FrontPage_row_gallery_archive',
		'lable'			=> 'Gallery Archive',
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
		
	/*	Row 6
	----------------------------------*/
	$columns = '';
	$columns[] = array(
		'col' => '8',
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
		'col' => '4',
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
		'class'			=> 'row_6 width_1104 color_mood_dark',
		'div_id'		=> 'tallykit_FrontPage_row_text_video',
		'lable'			=> 'Tabs And Video',
		'max_columns'	=> '2',
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
		'class'			=> 'row_7 width_1104 color_mood_dark',
		'div_id'		=> 'tallykit_FrontPage_row_blog_grid',
		'lable'			=> 'Blog Grid',
		'max_columns'	=> '1',
		'columns'		=> $columns,
	);
	
	return $array;