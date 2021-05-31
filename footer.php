<?php if (is_active_sidebar('footer')): ?>
	<div class="page-footer">
		<div class="wrap grid g-d-4 gap-2">
			<?php dynamic_sidebar('footer');?>
		</div>
  </div>
<?php endif;?>


<?php if (is_active_sidebar('post-footer')): ?>
	<div class="post-footer">
		<div class="wrap">
			<?php dynamic_sidebar('post-footer');?>
		</div>
  </div>
<?php endif;?>

<?php wp_footer();?>
</body>
</html>