<?php

if (is_active_sidebar('post-content')) {
    dynamic_sidebar('post-content');
} 

if (is_active_sidebar('post-content-frontpage') && is_front_page() ) {
    dynamic_sidebar('post-content-frontpage');
} 

if (is_active_sidebar('footer')) {
	echo '<div class="page-footer">';
		echo '<div class="wrap grid g-d-4 gap-2">';
			dynamic_sidebar('footer');
		echo '</div>';
	echo '</div>';
}

if (is_active_sidebar('post-footer')) {
	echo '<div class="post-footer">';
		echo '<div class="wrap">';
		web_social_menu();
			dynamic_sidebar('post-footer');
		echo '</div>';
	echo '</div>';
}
web_reference();
wp_footer();

?>
</body>
</html>