<main class="page-content">
	<div class="wrap">
		<article>
			<?php 
			the_title('<h1>', '</h1>'); 
			the_content(); 
			?>
		</article>
		<div class="oversigt grid g-d-2 gap-2">
<?php
$args = array(
    'post_parent' => $post->ID,
    'post_type' => 'page',
    'orderby' => 'menu_order'
);

$child_query = new WP_Query( $args );

while ( $child_query->have_posts() ) : 
	$child_query->the_post();
	$classes = get_post_class( '', $post->ID );

    echo '<div class="' . esc_attr( implode( ' ', $classes ) ) . '">';  
        echo '<h3><a href="' . get_the_permalink() . '" rel="bookmark" title="' .get_the_title() . '">' .get_the_title() . '</a></h3>';
        web_thumbnail();
        the_excerpt();
        web_read_more();
    echo '</div>';
endwhile;

wp_reset_postdata();
?>

		</div>
	</div>
</main>