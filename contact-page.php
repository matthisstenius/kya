<?php
/*
	Template name: Contact
*/
?>

<?php
	if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
		wpcf7_enqueue_scripts();
	}
?>

<?php get_header(); ?>

		<?php while (have_posts() ) : the_post(); ?>

			<section class="content contact-info col-1-2 pad">

				<article>

					<?php the_content(); ?>					
					
				</article>
				<?php endwhile; ?>
				
			</section> <!--end .contact-info-->

		
		<section class="contact-form col-1-2">
			<?php echo do_shortcode('[contact-form-7 id="202" title="Contact form 1"]'); ?>
		</section>
		


<?php get_footer(); ?> 		