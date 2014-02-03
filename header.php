<!DOCTYPE html>
<html lang="sv">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|PT+Serif|Josefin+Slab:400italic|Calligraffitti' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
	
	<?php wp_head(); ?>
	
</head>
<body>
	<div class="wrapper grid pad">
	 	<header class="header clearfix">
	 		<a class="logo" href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a>
	 		
	 		<div class="langpick clearfix">
	 			<a class="lang lang-se" href="<?php echo home_url('/sv'); ?>"></a>
	 			<a class="lang lang-en" href="<?php echo home_url('/en'); ?>"></a>
	 		</div>

	 		<nav class="nav main-nav clearfix">
	 			<ul>
	 				<?php wp_list_pages('title_li=&depth=1&exclude=75'); ?>
	 			</ul>

	 			<a class="dropdown-menu" href="#">Menu</a>
	 		</nav>
	 	</header>