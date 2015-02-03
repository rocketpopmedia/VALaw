<?php get_header(); ?>
<?php if (in_category('Attorneys')) { ?>
<div id="single" class="doublewrap">
	<section class="double">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<div class="left">	
				<section class="featured" style="background: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>) no-repeat center 0; background-size: cover;">
				    </section>
				    <a id="button" href="http://valaw.rpmdevserver.com/attorneys/">
					    See All Attorneys
				     </a>
				      <a id="button" href="mailto:<?php echo get_post_meta( $post->ID, 'email', true); ?>">
					    Email <?php the_title();?>
				     </a>
<br><br>
				    <h1>Paralegals:</h1>
				    <p><?php echo get_post_meta( $post->ID, 'Paralegals', true); ?></p>
			</div>
			<div class="right">    
			    <div class="postcontent">
							<h1><?php the_title();?></h1>	
							<p class="content"><?php the_content(); ?></p>
				</div>
			</div>
		<?php endwhile; ?>
		<div class="bump"></div>
	</section>
</div>
<?php } elseif (in_category('results')) { ?>
<div id="single" class="doublewrap">
	<section class="double">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<div class="left">	
				<section class="featured" style="background: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>) no-repeat center 0; background-size: cover;">
				    </section>
				    <a id="button" href="http://valaw.rpmdevserver.com/results/">
					   Go back to Results Page
				     </a>
			</div>
			<div class="right">    
			    <div class="postcontent">
							<h1><?php the_title();?></h1>	
							<p class="content"><?php the_content(); ?></p>
				</div>
			</div>
		<?php endwhile; ?>
		<div class="bump"></div>
	</section>
</div>
<?php } elseif (in_category('news')) { ?>
<div id="single" class="doublewrap">
	<section class="double">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<div class="left">	
				<section class="featured" style="background: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>) no-repeat center 0; background-size: cover;">
				    </section>
				    <a id="button" href="http://valaw.rpmdevserver.com/news/">
					   Go back to News Page
				     </a>
			</div>
			<div class="right">    
			    <div class="postcontent">
							<h1><?php the_title();?></h1>	
							<p class="content"><?php the_content(); ?></p>
				</div>
			</div>
		<?php endwhile; ?>
		<div class="bump"></div>
	</section>
</div>

<?php } elseif (in_category('video')) { ?>
<div id="single" class="doublewrap">
	<section class="double">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<div class="center">    
			    <div class="postcontent">
							<h1><?php the_title();?></h1>	
							<p class="content"><?php the_content(); ?></p>
				</div>
			</div>
		<?php endwhile; ?>
		<div class="bump"></div>
	</section>
</div>


<?php } else { ?>	
<div id="single" class="doublewrap">
	<section class="double">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<div class="left">	
				<div class="featured" style="background: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>) no-repeat center 0; background-size: cover;">
			    </div>
			</div>
			<div class="right">    
			    <div class="postcontent">
							<h1><?php the_title();?></h1>	
							<p class="content"><?php the_content(); ?></p>
				</div>
			</div>
		<?php endwhile; ?>
		<div class="bump"></div>
	</section>
</div>
<?php } ?>	
<?php get_footer(); ?>