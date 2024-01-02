
<?php
	global $post;
	if (has_post_thumbnail( $post->ID ) ) {
		$feaured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
	} else {
		$feaured_image = get_stylesheet_directory_uri() . "/images/background/17.jpg";
	}
?>

<!-- Page Title -->
<section class="page-title" style='background-image:url("<?php //echo $feaured_image; ?>")'>
	<div class="auto-container">
		<div class="content"><?php
			if ( is_front_page() && is_home() ) {
				echo  "<h2>";
			} else {
				echo "<h1>";
			}
				if (is_blog()) :
					if (is_category()) :
						single_cat_title("Category: ");

					elseif (is_tag()) :
						single_tag_title("Tag: ");

					elseif (is_day()) : 
						echo "Day of : " . get_the_time('l, F j, Y');

					elseif (is_month()) :
						echo "Month of : " . get_the_time('F Y');

					elseif (is_year()) :
						echo "Year of : " . get_the_time('Y');

					elseif (is_single()) :
						echo get_the_title( get_option( 'page_for_posts' ) );

					else:
						echo get_the_title( get_option( 'page_for_posts' ) );
				endif;

				elseif (is_post_type_archive()) :
					post_type_archive_title();

				elseif (is_tax()) :
					global $wp_query;
					$term = $wp_query->get_queried_object();
					$title = $term->name; 
					echo $title;

				elseif (is_404()):
					echo "Page not found";

				elseif (is_search()):
					echo "Search results";

				elseif (is_author()) : 
					global $post;
					$author_id = $post->post_author; ?>
					Posts by <?php $field='display_name'; echo the_author_meta( $field, $author_id );

				// elseif (is_singular('publication')) :
				// 	$obj = get_post_type_object( 'publication' );
				// 	echo $obj->labels->name;

				else :
					the_title();
				endif;
			if ( is_front_page() && is_home() ) {
				echo  "</h2>";
			} else {
				echo "</h1>";
			} ?>
			<ul class="page-breadcrumb">
				<?php ah_breadcrumb(); ?>
			</ul>
		</div>
	</div>
</section>
<!-- End Page Title -->
