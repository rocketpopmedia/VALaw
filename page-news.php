<?php
/*
Template Name: News Page
*/
?>
<?php get_header(); ?>
<div class="doublewrap">
	<div class="double">
		<?php query_posts('category_name=news&posts_per_page=-1'); if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<?php if (has_post_thumbnail( $post->ID ) ) { ?>
			<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
				<section class="left2">	
					<section class="featured2" style="background: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>) no-repeat center 0; background-size: cover;">
				    </section>
				   <a id="button" href="<?php echo get_permalink(); ?>">Read More
							</a>
				</section> 
				<section class="right2">
				    <section class="postcontent">
								<h1><?php the_title();?></h1><br><br>
								<!--<p><?php echo get_the_date('d/m/Y'); ?></p>-->
								<p class="content"><?php the_excerpt(); ?></p>
					</section>	
				</section>	
				<hr>
			<?php } else { ?>
				<section class="left2">	
					<section class="featured2" style="background: url(<?php bloginfo('template_url');?>/css/images/figure.png) no-repeat center 0; background-size: cover;">
				    </section>
				  <a id="button" href="<?php echo get_permalink(); ?>">
							   Read More
							</a>

				</section> 
				<section class="right2">
				    <section class="postcontent">
								<h1><?php the_title();?></h1>	
								<p class="content"><?php the_excerpt(); ?></p>
					</section>
				</section>	
				<hr>
			<?php } ?>
		<?php endwhile; ?>
	</div>
</div>	
<?php get_footer(); ?>
