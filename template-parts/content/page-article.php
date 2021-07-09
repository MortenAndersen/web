<main class="page-content">
	<div class="wrap">
		<article>
			<?php 
			while (have_posts()) : the_post();
				the_title('<h1 class="entry-title">', '</h1>');
				web_thumbnail();
				the_content();
			endwhile; 
			?>
		</article>
	</div>
</main>