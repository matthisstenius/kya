
<aside class="sidebar col-1-3">
	<div class="feature-news">
		<header class="pad">
			<h2><?php echo get_the_title(8); ?></h2>	
		</header>
		
		<ul class="news">
			<?php $catId = get_cat_id('archive'); ?>
			<?php $query = new WP_Query(array(
										'ignore_sticky_posts' => 1,
										'category__not_in' => array($catId),
										'posts_per_page' => 10)) ?>



			<?php while($query->have_posts() ) : $query->the_post(); ?>
				
			<li><a class="pad" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		</ul>
	</div>
	
</aside>