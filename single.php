
<?php get_header(); ?>

		<?php while (have_posts() ) : the_post(); ?>

			<section class="content pad col-2-3">

				<article>
					
					<h1><?php the_title(); ?></h1>
					
					<?php the_content(); ?>

				</article>

			</section> <!--end .content-->

		<?php endwhile; ?>
		
		<?php get_sidebar(); ?>

</div> <!--end .wrap-->	

<?php get_footer(); ?> 		