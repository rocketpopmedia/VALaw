<?php
/*
Template Name: Attorneys
*/
?>
<?php get_header(); ?>
<div class="doublewrap">
<div class="topimageteam"></div>
	<div class="double">
		<?php query_posts('cat=4&order=ASC'); if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<?php if (has_post_thumbnail( $post->ID ) ): ?>
			<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
				<section class="left" id="portrait">	
					<section class="featured" style="background: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>) no-repeat center 0; background-size: cover;">
				    </section>
				     <a id="button" href="<?php echo get_permalink(); ?>">Learn More or Contact
							</a>
				</section> 
				<section class="right">
				    <section class="postcontent">
								<h1><?php the_title();?></h1>	
								<br><br>
								<p><?php the_excerpt(); ?></p>
					</section>
				</section>	
				<hr>
			<?php endif; ?>
		<?php endwhile; ?>
	</div>	
</div>	
	<?php wp_reset_query(); ?>
<!--
		<div class="bottomimage">
		<div class="bottomimagetext">
			<h4>We invite you to consult with us at no cost for an initial consultation about whether we can help. If we can, we will be delighted. If we can't, maybe we can help you find someone who can.</h4>
		</div>
	</div>
-->
<?php get_footer(); ?>
