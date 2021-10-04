<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
<meta charset="<?php bloginfo('charset');?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head();?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>

<body <?php body_class();?>>
  <?php wp_body_open();?>

<header class="page-header <?php web_header_sticky();?>">
	<div class="flex <?php web_header_style(); ?>">
		<?php web_logo();?>
		<?php // web_site_info();?>
		<div class="menu-icon">
			<?php get_template_part('img/menu', 'icon');?>
		</div>
			<?php get_template_part('template-parts/nav/main', 'menu');?>
	</div>
</header>

<?php if (is_active_sidebar('pre-content')) {
    dynamic_sidebar('pre-content');
} ?>