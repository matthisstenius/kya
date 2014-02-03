<?php 
/*
	Template Name: Teacher Training
*/
 ?>


<?php get_header(); ?>

		<?php while (have_posts() ) : the_post(); ?>

			<section class="content col-2-3">
				<nav class="nav clearfix nav-page">
					<ul>
						<?php wp_list_pages('title_li=&include=13,75'); ?>
					</ul>	
				</nav>
				
				<article class="pad">

					<!-- <h1><?php the_title(); ?></h1> -->

					<?php the_content(); ?>

				</article>

			</section> <!--end .content-->

		<?php endwhile; ?>

		<?php get_sidebar(); ?>

<?php get_footer(); ?> 		
 