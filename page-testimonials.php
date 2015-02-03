<?php
/*
Template Name: testimonials Page
*/
?>
<?php get_header(); ?>
<div class="doublewrap">
	<div class="double">
		<?php query_posts('category_name=testimonials&posts_per_page=-1'); if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<section class="quote">
						<h4><?php the_title();?></h4>	
						<p class="content"><?php the_excerpt(); ?></p>	
				</section>	
				<div class="bump"></div>
		<?php endwhile; ?>
	</div>	
</div>
<!--
	<div class="awards">
			<h1 class="awardsheader">AWARDS</h1>
			<?php query_posts('category_name=award');  while ( have_posts() ) : the_post(); ?>
				<div class="individualaward">
					<div class="left"></div>
					<a href="<?php echo get_permalink(); ?>">
							<img class="awardimage" src="<?php bloginfo('template_url');?>/css/images/award.png">
							<h3 class="awardtitle"><?php the_title();?></h3>
					</a>
					<div class="right"></div>
				</div>		
			<?php endwhile; ?>
			<div class="float"></div>
	</div>
	<?php wp_reset_query(); ?>
	<div class="bottomimage">
		<div class="bottomimagetext">
			<h4>We invite you to consult with us at no cost for an initial consultation about whether we can help. If we can, we will be delighted. If we can't, maybe we can help you find someone who can.</h4>
		</div>
	</div>

-->
<?php get_footer(); ?>
