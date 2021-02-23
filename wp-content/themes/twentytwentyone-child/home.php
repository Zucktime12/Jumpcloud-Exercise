<?php
/* 
Template Name: Archives
*/
get_header(); ?>
 
<div id="primary" class="site-content">
<div id="content" role="main">
<?php query_posts(array('post__in'=>get_option('sticky_posts'))); ?>
	<?php while (have_posts()) : the_post(); ?>
	<section class="featured-blog-hero">
		<article class="sticky">
			<div class="row">
				<div class="featured-left col-md-6">
					<?php if(has_post_thumbnail()) {
						the_post_thumbnail('large', 'style=max-width: 100%; height:auto;');
					} ?>
				</div>
				<div class="featured-right col-md-6">
					<h2 class="red-heading">Featured</h2>
					<h2 class="sticky-title mb-5"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					
					<a class="button-primary" href="<?php the_permalink(); ?>">Read More <i class="fas fa-arrow-right"></i></a>

				</div>
			</div>
		</article>
	</section>
	<?php endwhile; ?>

<?php wp_reset_query(); ?>

<section class="recent-posts">
<?php 
$args = array(
	'posts_per_page' => 3,
	'ignore_sticky_posts' => 1
);
$query = new WP_Query( $args ); 

?>
<div>
	<div class="container">
		<div class="recent-posts-title">
			<h2 class="recent-title">Recent</h2>
		</div>
		<div class="row">
			<?php if($query->have_posts()) :?>
				<?php while($query->have_posts()) : $query->the_post(); ?>
					<div class="recent-post-container col-4">
						<?php if(has_post_thumbnail()) {
							the_post_thumbnail('post-thumbnail');
						} ?>
						<div class="recent-content">
							<h3 class="recent-post-category"><?php echo the_category(" "); ?></h3>
							<h3 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
						</div>
					</div>
				<?php endwhile; ?> 
			<?php endif; ?>
		</div> <!-- row -->
	</div> <!-- container -->
</div> 
<?php wp_reset_postdata(); ?>
<?php wp_reset_query(); ?>
</section>
<section class="dropdown js-filter">
<?php 
$cat_args = array(
	'posts_per_page' => 6,
	'ignore_sticky_posts' => 1
);
$catquery = new WP_Query( $cat_args ); 
?>
<div class="container">
		<div class="dropdown-title">
			<form class="js-filter-form">
				<select name="categories" class="filter-select">
					<?php 
						$category_args = array(
							'exclude' => array(8),
							'option_all' => 'All'
						);

						$categories = get_categories($category_args); ?>
						<option class="js-filter-item" value="-1">All</option>
						<?php foreach($categories as $cat) : ?>
							<option class="js-filter-item" value="<?php echo $cat->term_id; ?>">
								<?php echo $cat->name?>
							</option>
						<?php endforeach; ?>
				</select>
			</form>
		</div>
		<div class="row dropdown-row">
			<?php if($catquery->have_posts()) :?>
				<?php while($catquery->have_posts()) : $catquery->the_post(); ?>
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
				<?php endwhile; ?> 
			<?php endif; ?>
		</div> <!-- row -->
	</div> <!-- container -->
<?php wp_reset_query(); ?>
</section>
 
</div><!-- #content -->
</div><!-- #primary -->
<section class="cta">
	<div class="container">
		<div class="row justify-content-center align-items-center">
			<div class="cta-title mr-5">
				<h2>Join Foxhub<br>for a webinar</h2>
			</div>
			<div class="cta-image">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/webinar-image.png" alt="Webinar CTA Image">
			</div>
			<div class="cta-button ml-5">
				<a href="button-primary cta">Sign up today!</a>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>
