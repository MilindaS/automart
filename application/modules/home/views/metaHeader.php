<head>
	<meta charset="utf-8">
	<title>Auto Mart</title>

	<meta name="description" content="The Mission for College Drifters is to provide college students with a direct platform to buy and sell items to each other. By utilizing this marketplace students can inform others of events, notes, books, and tickets." />
	<meta name="keywords" content="college, drifters, marketplace, collegedrifters, collegedrifters marketplace,online marketplace,buy,sell,events, items, notes, books, tickets" />
	<meta name="viewport" content="width=device-width">
	<?php
		if(isset($meta_array) && !empty($meta_array)){
			foreach($meta_array AS $item){
				echo '<meta name="'.$item['name'].'" content="'.$item['content'].'" />';
				}
		}
	?>
	<?php
		if(isset($meta_og_array) && !empty($meta_og_array)){
			foreach($meta_og_array AS $item){
				echo '<meta property="'.$item['property'].'" content="'.$item['content'].'" />';
				}
		}
	?>

	<link rel="stylesheet" href="<?php	echo BASEURL;?>public/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php	echo BASEURL;?>public/css/style.css">
	<link rel="stylesheet" href="<?php	echo BASEURL;?>public/css/pill.css">
	<link rel="stylesheet" href="<?php	echo BASEURL;?>public/vendor/slick/slick.css">
	<link rel="stylesheet" href="<?php	echo BASEURL;?>public/vendor/slick/slick-theme.css">

	<?php

		if(isset($css_array) && !empty($css_array)){

			foreach($css_array AS $item){
					echo '<link rel="stylesheet" href="'.BASEURL.'public/css/'.$item.'" type="text/css" />'."\n";
				}

		}

	?>

	<script src="<?php	echo BASEURL;?>public/js/jquery-1.11.0.min.js"></script>
	<script src="<?php	echo BASEURL;?>public/js/bootstrap.js"></script>
	<script src="<?php	echo BASEURL;?>public/js/jquery.scrollUp.min.js"></script>
	<script src="<?php	echo BASEURL;?>public/vendor/ckeditor/ckeditor.js"></script>
	<script src="<?php	echo BASEURL;?>public/vendor/ckeditor/adapters/jquery.js"></script>
	<script src="<?php	echo BASEURL;?>public/vendor/slick/slick.min.js"></script>
	<?php

	if(isset($js_array) && !empty($js_array))
	{
		foreach($js_array AS $item){
				echo  '<script type="text/javascript"  src="'.BASEURL.'public/js/'.$item.'"  ></script>'."\n";

		}

	}

	?>
</head>
