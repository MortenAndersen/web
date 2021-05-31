<main class="page-content page-blog">
	<div class="wrap">
<?php if (have_posts()): while (have_posts()): the_post();?>
			<article id="post-<?php the_ID();?>" <?php post_class();?>>

				<?php
        echo '<h2><a href="' . get_permalink() . '">' . get_the_title() . '</a></h2>';
        if (has_post_thumbnail()) {
            echo '<a href="' . get_the_permalink() . '" alt="' . get_the_title() . '">';
            the_post_thumbnail('thumbnail' , array( 'class' => 'alignleft' ));
            echo '</a>';
        }

        the_excerpt(); ?>

			</article>

		<?php endwhile;?>
	<?php endif;?>
</div>
</main>