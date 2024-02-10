<?php 
/*
Template Name: Contact Us
*/
?>
<?php get_header();
?>
<section class="contact-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-3"></div>
            <div class="col-xl-3">
                <div class="contact-details">
					<!--<div class="">
						<div class="screen-logo">
							<h1>JAGYA</h1>
							<h2>DESIGNS</h2>
						</div>
					</div>-->
					<a href="mailto:<?php echo get_field('email', 'option'); ?>"><?php echo get_field('email', 'option'); ?></a><br>
					<a href="tel:<?php echo get_field('phone_number', 'option'); ?>"><?php echo get_field('phone_number', 'option'); ?></a><br>
					<?php echo get_field('address', 'option'); ?>         
                </div>
                <div class="">
					<?php echo get_field('location', 'option'); ?>
                </div>
            </div>
            <div class="col-xl-2"></div>
            <div class="col-xl-4 contact-form">
				<?php echo do_shortcode('[contact-form-7 id="d31a754" title="Contact Us"]'); ?>				
			</div>
        </div>
    </div>
</section>

<?php get_footer(); ?>