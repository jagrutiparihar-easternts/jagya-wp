<?php 
/*
Template Name: Gulham
*/
?>
<?php get_header(); ?>
<section class="section-two-art gulham-section">
	<div class="container-fluid">
		<div class="row">																		
			<?php if( have_rows('repeater') ):
				while( have_rows('repeater') ) : the_row(); ?>									
					<div class="col-lg-3">
						<div class="gulham-img">
							<?php $image = get_sub_field('repeater_image');
							if( !empty( $image ) ): ?>
								<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"  class="img-fluid" title="<?php echo esc_attr($image['title']); ?>"/>
							<?php endif;?>
						</div>						
					</div>
				<?php endwhile;
			endif; ?>			
		</div>
	</div>
</section>
<?php get_footer(); ?>