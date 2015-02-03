<?php get_header(); ?>
<div class="doublewrap">
	<div class="double">
		<div class="left">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<?php if (has_post_thumbnail( $post->ID ) ): ?>
			<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
				<section class="featured" style="background: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>) no-repeat center 0; background-size: cover;">
			    </section>
		</div>
		<div class="right">
			    <section class="postcontent">
							<h1><?php the_title();?></h1>	
							<p class="content"><?php the_content(); ?></p>
				</section>
		</div>
			<?php endif; ?>
		<?php endwhile; ?>
		<div class="bump"></div>
	</div>	
</div>
	<?php get_footer(); ?>
