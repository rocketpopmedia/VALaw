<?php
/**
 * Template Name: About
 *
 */
get_header(); ?>
<div class="doublewrap">	
	<section class="double"> 
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<?php if (has_post_thumbnail( $post->ID ) ): ?>
		<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
		<div class="left">
				<div class="featured" style="background: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id()); ?>) no-repeat center 0; background-size: cover;">
				</div>
		</div>
		<div class="right">
			 <section class="postcontent">
			 <h1><?php the_title(); ?></h1>
			 <br><br>
			<p><?php the_content(); ?></p>
			 </section>
		</div>
		<?php endif; ?>
		<?php endwhile; ?>
	</section>
</div>
<div class="areasofpractice">
	<hr>
		<div class="areasofpracticetitle">
			<h1>Areas of Practice</h1>
		</div>
		<div class="practice-wrapper">
		 <a href="http://valaw.rpmdevserver.com/workers-compensation/" class="workerscompensation">
			<h2>Workers Comp</h2>
		</a>
		<a href="http://valaw.rpmdevserver.com/personal-injury/" class="personalinjury">
			<h2>Personal Injury</h2>
		</a>
		<a href="http://valaw.rpmdevserver.com/social-security-disability/" class="disability">
			<h2>Disability</h2>
		</a>
		</div>
</div>
<?php get_footer(); ?>
