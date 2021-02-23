<?php 

add_action( 'wp_ajax_nopriv_filter', 'filter_ajax' );
add_action( 'wp_ajax_filter', 'filter_ajax' );

function filter_ajax() {

    $category = $_POST['category'];

    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 6
    );

    //initial try that did not work with All category (need to check for -1 value assigned to All option)
    // if(isset($category)) {
    //     $args['category__in'] = array($category);
    // }

    if(isset($category) && $category != -1) {
		//  Explode the string into an array
		$categories = array_map('intval', explode(',', $category));
		//  Then load the POST array into the cat args
		$args['category__in'] = $categories;
	}

    $query = new WP_Query($args);

    if($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post(); ?>
            <div class="dropdown-column col-6">
                <div class="dropdown-image">
                    <?php if(has_post_thumbnail()) {
                        the_post_thumbnail(array(185, 150), 'style=width: 185px; height:150px;' );
                    } ?>
                </div>
                <div class="dropdown-content">
                    <h3 class="dropdown-category"><?php echo the_category(" "); ?></h3>
                    <h4 class="dropdown-title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h4>
                </div>
            </div>
        <?php endwhile;
    endif;
    wp_reset_postdata();

    die();
}