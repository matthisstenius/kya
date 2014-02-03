<?php
/* 
	Template Name: Home Page
*/
 ?>
 
 <?php get_header(); ?>
 
 <div class="quotes-area pad">
 	<?php $the_query = new WP_Query('page_id=5') ?>
 	<?php while ($the_query->have_posts() ) : $the_query->the_post(); ?>

 		<?php the_content(); ?>

 	<?php
		endwhile;
		wp_reset_postdata();
	?>
 </div>
 
 <div class="quote clearfix">
 	<div class="inner-quote">
 		<?php $query = new WP_Query( array ( 'orderby' => 'rand', 'posts_per_page' => '1', 'post_type' => 'quotes' ) ); ?>


		<?php while ($query->have_posts() ) : $query->the_post(); ?>

			<blockquote><?php the_content(); ?></blockquote>
			<p class="author">- <?php the_title(); ?></p>

		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
 	</div>
 	
 </div>

 <div class="features clearfix">
 	<div class="col-1-3">
 		<div class="feature feature-one pad">
 				<?php $the_query = new WP_Query('page_id=13') ?>
 				<?php while ($the_query->have_posts() ) : $the_query->the_post(); ?>
					
					<h2><?php the_title(); ?></h2>
 					<?php the_excerpt(); ?>

 					<a class="btn btn-read-more" href="<?php the_permalink(); ?>">
 						<?php 
 							if (qtrans_getLanguage() == 'en') {
 								echo 'Read more';
 							}

 							else if (qtrans_getLanguage() == 'sv') {
 								echo "Läs mer";
 							}
 						?>
 					</a>
 				
 				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
 			
 		</div>
 	</div>

 	<div class="col-1-3">
 		<?php 
 			$args = array('posts_per_page' => 1,
 						  'post__in' => get_option('sticky_posts'),
 						  'ignore_sticky_post' => 1 );
 			query_posts($args)
 		?>

 		<?php while (have_posts() ) : the_post(); ?>

 			<a href="<?php the_permalink(); ?>">
 				<div class="feature feature-two pad">
 					<?php
 						if (has_post_thumbnail() ) {
							the_post_thumbnail('size-medium'); 
						}

					?>
 					<h2><?php the_title(); ?></h2>
 		
 			</div>
 			</a>
 		
 		<?php endwhile; ?>
 		<?php wp_reset_query(); ?>
 	</div>

 	<div class="col-1-3">
 		<div class="feature-news">
 			<header class="feature-header pad">
 				<h2><?php echo get_the_title(8); ?></h2>	
 			</header>
 			
 			<ul class="news">
 				<?php query_posts('showposts=5'); ?>
 		
 				<?php while (have_posts() ) : the_post(); ?>
 			
 					<li><a class="pad" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
 			
 				<?php endwhile; ?>
 				<?php wp_reset_query(); ?>
 			</ul>
 		</div>
 	</div>
 </div>

 <?php get_footer(); ?>	