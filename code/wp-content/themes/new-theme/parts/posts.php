<?php get_header(); ?>
<?php get_template_part('parts/page-title'); ?>
<section class="about-section">
	<div class="auto-container">
		<div class="row clearfix">
			<div class="post-listing-contents col-lg-9 col-md-12 col-sm-12">
				<?php get_template_part('parts/posts-loop'); ?>
			</div>
			<div class="archive-sidebar col-lg-3 col-md-12 col-sm-12">
				<?php get_template_part('parts/blog-categories')?>
				<?php get_template_part('parts/year-month-archive'); ?>
			</div>
		</div><!-- row clearfix -->
	</div><!-- auto-container -->
</section><!-- about-section -->
<?php get_footer(); ?>