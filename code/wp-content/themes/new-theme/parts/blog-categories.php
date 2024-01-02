<div class="sub-menu">
	<h4 class="sidebar_title">Categories</h4>
	<ul><?php 
		$args = array(
			'title_li'           => ''
		);
		wp_list_categories( $args); ?> 
	</ul>
</div><!--sub-menu-->