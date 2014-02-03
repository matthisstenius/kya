
<aside class="sidebar col-1-3">
	<div class="feature-news">
		<header class="pad">
			<h2><?php echo get_the_title(8); ?></h2>	
		</header>
		
		<ul class="news">
			<?php query_posts('showposts=10')?>

			<?php while(have_posts() ) : the_post(); ?>
				
			<li><a class="pad" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

			<?php endwhile; ?>
		</ul>
	</div>
	
</aside>