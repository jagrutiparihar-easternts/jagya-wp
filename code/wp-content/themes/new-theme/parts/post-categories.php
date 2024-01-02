<?php
$categories = get_the_category();
$separator = ', ';
$output = '';
if($categories) {
	foreach($categories as $category) {
		$output .= '<a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
	}
echo "<p class='icon-category'>";
echo "<b>Categories:</b> " . trim($output, $separator);
echo "</p>";
} ?>
