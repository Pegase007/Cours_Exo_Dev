<!DOCTYPE html> 
<html>   
<head <?php language_attributes(); ?>>     
	<meta charset="<?php bloginfo('charset'); ?>">     
	<title><?php the_title(); ?></title>     
	<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">     
	<?php wp_head(); ?>   
</head>   
<body>     
	<div class="wrap">       
		<header>         
			<h1><a href='<?php echo home_url(); ?>'><?php bloginfo('name'); ?></a></h1>         
			<h2><?php bloginfo('description'); ?></h2>       
		</header>