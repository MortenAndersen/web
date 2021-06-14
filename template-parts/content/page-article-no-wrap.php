<main class="page-content">
	<div class="no-wrap">
		<article>
			<?php 
			while (have_posts()) : the_post();
				the_content();
			endwhile; 
			?>
		</article>
	</div>
</main>