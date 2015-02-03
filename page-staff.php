<?php
/*
Template Name: Staff
*/
?>
<?php get_header(); ?>


<div class="doublewrap2">

<div class="doublewrap">




	<div class="stafflinks">	
	 <ul>
      <li><a href="#amyatkinson">Amy Atkinson</a></li>
      <li><a href="#martizaaviles">Martiza Aviles</a></li>
      <li><a href="#terrybarker">Terry Barker</a></li>
      <li><a href="#lauraburcham">Laura Burcham</a></li>
      <li><a href="#cindyfindlay">Cindy Findlay</a></li>
      <li><a href="#georgiafrancis">Georgia Francis</a></li>
	  <li><a href="#jessicagraziano">Jessica Graziano</a></li>
	  <li><a href="#maribellopez">Maribel Lopez</a></li>
	  <li><a href="#mkmoore">MK Moore</a></li>
	  <li><a href="#cristapatterson">Crista Patterson</a></li>
	  <li><a href="#nancysaraceno">Nancy Saraceno</a></li>
	  <li><a href="#mirashea">Mira Shea</a></li>
	  <li><a href="#staceysmith">Stacey Smith</a></li>
	  <li><a href="#carlasommers">Carla Sommers</a></li>
    </ul>
	</div>

	
	<div class="double">
	
	   <!-- 	<div class="slide_container">
	   
	   	<div class="top-border"></div>

   
 <div id="menu">
 <ul>
      <li><a href="#amyatkinson">Amy Atkinson</a></li>
      <li><a href="#martizaaviles">Martiza Aviles</a></li>
      <li><a href="#terrybarker">Terry Barker</a></li>
      <li><a href="#lauraburcham">Laura Burcham</a></li>
      <li><a href="#cindyfindlay">Cindy Findlay</a></li>
      <li><a href="#georgiafrancis">Georgia Francis</a></li>
	  <li><a href="#jessicagraziano">Jessica Graziano</a></li>
	  <li><a href="#maribellopez">Maribel Lopez</a></li>
	  <li><a href="#mkmoore">MK Moore</a></li>
	  <li><a href="#cristapatterson">Crista Patterson</a></li>
	  <li><a href="#nancysaraceno">Nancy Saraceno</a></li>
	  <li><a href="#mirashea">Mira Shea</a></li>
	  <li><a href="#staceysmith">Stacey Smith</a></li>
	  <li><a href="#carlasommers">Carla Sommers</a></li>
    </ul>
  </div>
 
  <div id="btn"><span></span></div>
   
</div>



<div id="staff-nav">Staff Navigation</div>-->

	
	
	
	

		<?php query_posts('category_name=staff&posts_per_page=-1'); if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<?php if (has_post_thumbnail( $post->ID ) ) { ?>
			<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
			<a id="<?php echo get_post_meta( $post->ID, 'link', true); ?>" class="staff-links1"></a>
			
				<section class="left" id="portrait">	
						<section class="featured" style="background: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>) no-repeat center 0; background-size: cover;">
				    </section>
				      <a id="button" href="mailto:<?php echo get_post_meta( $post->ID, 'email', true); ?>">
					   Email <?php the_title();?>
				     </a>
				</section> 
				<section class="right">
				    <section class="postcontent">
						<h1><?php the_title();?></h1>	
						<p class="content"><?php the_content(); ?></p>
					</section>
				</section>	
				<hr>
				<?php } else { ?>
					<a id="<?php echo get_post_meta( $post->ID, 'link', true); ?>" class="staff-links1"></a>
				<section class="left" id="portrait">	
					<section class="featured" style="background: url(<?php bloginfo('template_url');?>/css/images/figure.png) no-repeat center 0; background-size: cover;">
				    </section>
				      <a id="button" href="mailto:<?php echo get_post_meta( $post->ID, 'email', true); ?>">
					   Email <?php the_title();?>
				     </a>
				</section> 
				<section class="right">
				    <section class="postcontent">
						<h1><?php the_title();?></h1>	
						<p class="content"><?php the_content(); ?></p>
					</section>
				</section>	
				<hr>

			<?php } ?>
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

