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
	<header>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4">
					<h1><a href=""></a></h1>
				</div>
				<div class="col-md-8">
					
				</div>
			</div>
		</div>
		<section id="menu">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-4">
						<p>search</p>
					</div>
					<div class="col-md-8">
						<?php wp_nav_menu( 
							array( 
								'theme_locale' => 'my_menu_main',
								'menu_class'=>'list-inline'
								) 
							);?>
					</div>
				</div>
			</div>
		</section>
	</header>
	<section id="main">
		<div style="" class="">
		</div>
	</section>