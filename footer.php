<?php

if (is_active_sidebar('post-content')) {
    dynamic_sidebar('post-content');
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
			dynamic_sidebar('post-footer');
		echo '</div>';
	echo '</div>';
}
web_reference();
wp_footer();

?>
</body>
</html>