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
		'class'			=> 'row_3 width_960 color_mood_dark',
		'div_id'		=> 'tallykit_FrontPage_row_text',
		'lable'			=> 'Text',
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
				'lable'	=> 'Portfolio Carousel',
				'class'	=> '',
				'type'	=> 'portfolio_carousel',
			),
		)
	);
	$array[] = array(
		'class'			=> 'row_3 width_1170 color_mood_dark',
		'div_id'		=> 'tallykit_FrontPage_row_portfolio_carousel',
		'lable'			=> 'Portfolio',
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
				'lable'	=> 'Gallery Single',
				'class'	=> '',
				'type'	=> 'gallery_single',
			),
		)
	);
	$array[] = array(
		'class'			=> 'row_4 width_1170 color_mood_dark',
		'div_id'		=> 'tallykit_FrontPage_row_gallery_single',
		'lable'			=> 'Gallery Single',
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
				'lable'	=> 'People Grid',
				'class'	=> '',
				'type'	=> 'people_grid',
			),
		)
	);
	$array[] = array(
		'class'			=> 'row_5 width_1170 color_mood_dark',
		'div_id'		=> 'tallykit_FrontPage_row_people_grid',
		'lable'			=> 'People Grid (Our Team)',
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
		'class'			=> 'row_2 width_960 color_mood_dark',
		'div_id'		=> 'tallykit_FrontPage_row_callout',
		'lable'			=> 'Callour',
		'max_columns'	=> '1',
		'columns'		=> $columns,
	);
	
	return $array;