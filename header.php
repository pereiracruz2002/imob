<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="widht=device-width, initial-scale=1">
	<title><?php bloginfo( 'name' );?><?php wp_title( '|' ); ?></title>
	<meta name="description" content="<?php bloginfo( 'descritpion' ); ?>" >
	<?php wp_head();?>
</head>
<body <?php body_class(); ?>>
