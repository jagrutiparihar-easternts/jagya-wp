<?php get_header(); ?>

<div class="main">
	<?php //get_template_part('parts/page-title'); ?>
	<div class="section-404">
		<h1 class="error">404</h1>
		<div class="page">
			<p>Ooops!!! The page you are looking for is not found.</p>
		</div>
		<div class="btn-part">
			<a class="readon" href="<?php echo esc_url(home_url('/')); ?>">Back to home</a>
		</div>
	</div>
</div><!--main-->

<?php get_footer(); ?>
