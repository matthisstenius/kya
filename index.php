<?php get_header(); ?>

	<?php $catId = get_cat_id('archive'); ?>
	<?php echo "<a href='" . get_category_link($catId) . "'>Archive</a>" ?>
	
	<?php $query = new WP_Query(array('category__not_in' => array($catId))) ?>
		<?php while ($query->have_posts() ) : $query->the_post(); ?>
			
			<section class="blog-posts clearfix">
				<a href="<?php the_permalink(); ?>">
				<div class="col-1-3">
						<?php
							if (has_post_thumbnail() ) {
						 		the_post_thumbnail(); 
							}
						
							else {
								echo '<img src="'.get_bloginfo("template_url").'/img/default.jpg" />';
							}
						?>
					
				</div>
				
				
				<article class="col-2-3">
					<h2><?php the_title(); ?></h2>

					<?php the_excerpt(); ?>
					
				</article>
				</a>
			</section> <!--end .blog-post-->
			
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
<?php get_footer(); ?> 		