<main class="page-content">
	<div class="wrap aside-article-aside">
		<article>
		<?php the_title('<h1 class="entry-title">', '</h1>');?>
		<?php the_content();?>
	</article>
	<?php get_template_part('template-parts/aside/aside', 'left'); ?>
	<?php get_template_part('template-parts/aside/aside', 'right'); ?>
	</div>
</main>