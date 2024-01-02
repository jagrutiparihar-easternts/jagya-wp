<?php
/*
Don't let this file get too messy with if statements detecting templates
If it makes more sense to have code directly in a template file, do it but continue to use parts where possible
 */
?>

<?php get_header(); ?>

<!-- main Contents Area -->
<div class="main"><?php
    // if (is_404()) {
    //     get_template_part('parts/page-title');
    // } else {
        
    // }
    if ( is_page_template('templates/template-content-sidebar.php' ) ) { ?>
        <section class="about-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="post-listing-contents col-lg-9 col-md-12 col-sm-12">
                        <?php get_template_part('parts/loop'); ?>
                    </div>
                    <div class="default-sidebar right-sidebar col-lg-3 col-md-12 col-sm-12"><?php
                        if ( is_active_sidebar( 'page-sidebar' ) ) {
							dynamic_sidebar('page-sidebar');
						} else { ?>
							<h2 class="widget-title">Pages:</h2>
							<ul>
							    <?php wp_list_pages( array( 'title_li' => '' ) ); ?>
							</ul><?php
						} ?>
                    </div>
                </div><!-- row clearfix -->
            </div><!-- auto-container -->
        </section><!-- about-section --><?php
    } else if ( is_page_template('templates/template-sidebar-content.php' ) ) { ?>
        <section class="about-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="default-sidebar left-sidebar col-lg-3 col-md-12 col-sm-12"><?php
						if ( is_active_sidebar( 'page-sidebar' ) ) {
							dynamic_sidebar('page-sidebar');
						} else { ?>
							<h2 class="widget-title">Pages:</h2>
							<ul>
							    <?php wp_list_pages( array( 'title_li' => '' ) ); ?>
							</ul><?php
						} ?>
                    </div>
                    <div class="post-listing-contents col-lg-9 col-md-12 col-sm-12">
                        <?php get_template_part('parts/loop'); ?>
                    </div>
                </div><!-- row clearfix -->
            </div><!-- auto-container -->
        </section><!-- about-section --><?php
    } else {
        get_template_part('parts/loop');
    } ?>
</div><!--main-->

<?php get_footer(); ?>