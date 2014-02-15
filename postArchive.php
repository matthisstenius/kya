<?php
/* 
	Template Name: Post Archive
*/
 ?>

<?php get_header(); ?>
		<?php while (have_posts() ) : the_post(); ?>
			
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
					<p><?php the_author(); ?></p>
					<p><?php the_category(); ?></p>

					<?php the_excerpt(); ?>
					
				</article>
				</a>
			</section> <!--end .blog-post-->
			
		<?php endwhile; ?>

<?php get_footer(); ?> 		