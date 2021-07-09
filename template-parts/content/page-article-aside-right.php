<main class="page-content">
	<div class="wrap article-aside">
		<article>
		<?php 
			while (have_posts()) : the_post();
				the_title('<h1 class="entry-title">', '</h1>');
				web_thumbnail();
				the_content();
			endwhile; 
			?>
		</article>
		<?php get_template_part('template-parts/aside/aside', 'right'); ?>
	</div>
</main>