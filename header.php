<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
<meta charset="<?php bloginfo('charset');?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head();?>
<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet" />
</head>

<body <?php body_class();?>>
  <?php wp_body_open();?>

<header class="page-header <?php web_header_sticky();?>">
	<div class="flex <?php web_header_style(); ?>">
		<?php web_logo();?>
			<div class="menu-icon">
				<!-- <img class="js-menu-open" src="<?php echo get_template_directory_uri(); ?>/img/menu-icon.svg" alt="menu"> -->
				<?php get_template_part('img/menu', 'icon');?>
			</div>
			<?php get_template_part('template-parts/nav/main', 'menu');?>
	</div>
</header>