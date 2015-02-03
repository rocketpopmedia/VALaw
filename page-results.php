<?php
/*
Template Name: Results Page
*/
?>
<?php get_header(); ?>
<div class="doublewrap">
<div class="disclaimerwrap">
	<div class="disclaimer">
<h1>SETTLEMENTS AND VERDICTS IN ALL CASES DEPEND ON VARIOUS FACTORS AND CIRCUMSTANCES WHICH ARE UNIQUE TO EACH CASE. THEREFORE, PAST RESULTS IN CASES ARE NOT A GUARANTEE OR PREDICTION OF SIMILAR RESULTS IN FUTURE CASES WHICH THE FIRM AND ITS LAWYERS MAY UNDERTAKE. </h1>
	</div>
</div>
	

	<div class="double">				
		<?php query_posts('category_name=results&posts_per_page=-1'); if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<?php if (has_post_thumbnail( $post->ID ) ) { ?>
			<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
				<section class="left">	
					<section class="featured" style="background: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>) no-repeat center 0; background-size: cover;">
				    </section>
				  <a id="button" href="<?php echo get_permalink(); ?>">
							Read More
							</a>
				</section> 
				<section class="right">
				    <section class="postcontent">
						<h1><?php the_title();?></h1>	
					     <!-- <p>Year of Case: <?php echo get_post_meta( $post->ID, 'testimonial date', true); ?></p> -->
						<p class="content"><?php the_excerpt(); ?></p>
					</section>		
				</section>	
				<hr>
			<?php } else { ?>
				<section class="left">	
					<section class="featured" style="background: url(<?php bloginfo('template_url');?>/css/images/figure.png) no-repeat center 0; background-size: cover;">
				    </section>
							<a id="button" href="<?php echo get_permalink(); ?>">
							   Read More
							</a>
				</section> 
				<section class="right">
				    <section class="postcontent">
						<h1><?php the_title();?></h1>
						<!-- <p>Year of Case: <?php echo get_post_meta( $post->ID, 'testimonial date', true); ?></p>	 -->
						<p class="content"><?php the_excerpt(); ?></p>
					</section>		
				</section>	
				<hr>
			<?php } ?>
		<?php endwhile; ?>
		
			
		
		<?php query_posts('category_name=video&posts_per_page=-1'); if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<?php if (has_post_thumbnail( $post->ID ) ) { ?>
			<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
				<section class="left">	
					<section class="featured" style="background: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>) no-repeat center 0; background-size: cover;">
				    </section>
				  <a id="button" href="<?php echo get_permalink(); ?>">
							Watch Video Testimonial 
							</a>
				</section> 
				<section class="right">
				    <section class="postcontent">
						<h1><?php the_title();?></h1>	
					     <!-- <p>Year of Case: <?php echo get_post_meta( $post->ID, 'testimonial date', true); ?></p> -->
						<p class="content"><?php the_excerpt(); ?></p>
					</section>		
				</section>	
				
				<hr>

				<?php } ?>

		<?php endwhile; ?>
				
		
		<div class="double">
		<center><h1>Client Testimonials</h1></center></br>
		<?php query_posts('category_name=testimonials&posts_per_page=-1'); if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<section class="quote">
						<p><?php the_title();?></p>	
						<p class="content"><?php the_excerpt(); ?></p>	
				</section>	
				<hr>
		<?php endwhile; ?>
	</div>	


	</div>	
</div>
<?php get_footer(); ?>
