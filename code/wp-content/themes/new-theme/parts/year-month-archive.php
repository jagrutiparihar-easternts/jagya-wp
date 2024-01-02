<div class="sub-menu year-month-archive">
    <h4 class="sidebar_title">Archives</h4>
	  <div class="accordion"><?php
        $sideargs = array(
            'posts_per_page' => 500,
            'offset' => 0,
            'category' => '',
            'orderby' => 'post_date',
            'order' => 'DESC',
            'include' => '',
            'exclude' => '',
            'meta_key' => '',
            'meta_value' => '',
            'post_type' => 'post',
            'post_mime_type' => '',
            'post_parent' => '',
            'post_status' => 'publish',
            'suppress_filters' => true
	      );
        $side_posts = get_posts($sideargs);
        $postlist = array();
       foreach ($side_posts as $p) {
          //$postlist[get_post_time('Y', 'false', $p)][get_post_time('F', 'false', $p)]['count'] ++;
          //$postlist[get_post_time( 'Y','false',  $p )]['count']++;
          $postlist[get_post_time('Y', 'false', $p)]['label'] = get_post_time('Y', 'false', $p);
          $postlist[get_post_time('Y', 'false', $p)][get_post_time('F', 'false', $p)]['label'] = get_post_time('F', 'false', $p);
          $postlist[get_post_time('Y', 'false', $p)][get_post_time('F', 'false', $p)]['label_numeric'] = get_post_time('m', 'false', $p);
        }

        foreach ($postlist as $pl) { ?>
            <h5><?php echo $pl['label']; ?></h5>
            <ul><?php
                foreach ($pl as $m) {
                    if(isset($m['label'])) {
                        if (substr($m['label'], 0, 1) != '2') {
                            $month_current_path = "/" . $pl['label'] . "/" . $m['label_numeric'] . "/"; ?>				
                            <li class='arch-month <?php echo $pl['label']; ?><?php if($_SERVER["REQUEST_URI"] == $month_current_path): ?> current-menu-item<?php endif; ?>'>
                                <a href="<?php echo site_url('/') . $pl['label']; ?>/<?php echo $m['label_numeric']; ?>">
                                    <?php echo $m['label']; ?>
                                </a>
                            </li><?php
                        }
                    }
                } ?>
            </ul><?php
        } ?>

    </div><!--accordion-->
</div><!--year-month-archive-->
