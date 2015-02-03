<?php
/*
Template Name: Resources Page
*/
?>
<?php get_header(); ?>
<div class="doublewrap">
<div class="topimageresources"></div>
	<div class="double">
	
	<div class="left">

		<?php
		// Before we do the posts and buttons, lets pull the regular content
		if ( have_posts() ) : while( have_posts() ) : the_post(); ?>

			<h2><?php the_title(); ?></h2>
			<p class="content"><?php the_content(); ?></p></div><div class="right">

		<?php
		// we use these functions to close the loop. We don't need wp_reset_postdata() bc this isn't a custom loop
		endwhile; endif;

		// Begin dropdown

		// setup array to pass to function, uses ID of resources cat
		$args = array(
			'child_of' => 8
		);

		// Gets an array of cats that are children of resources
		$cats = get_categories($args); ?>

		<select class="resources_dropdown">

			<?php
				foreach( $cats as $cat ){
					// create an option for each cat
					echo '<option value="' . $cat->slug . '" >' . $cat->name . '</option>';
		        }
		    ?>

		</select>

		<div class="resources">

			<?php
			// Setup our new loop
			// We want all "resources" posts
				$args = array(
					'post_type' => 'post',
					'cat' => 8,
					'posts_per_page' => -1
				);

				// Create our query object
				$query = new WP_Query($args);

				// We do a standard loop except we insert the methods from our object to get the desired posts
				if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post();

					// get the current cat, will pull the "resouces" cat as well which we don't want
					// so if the cat doesnt have a parent, we know its a child and thats what we want
					$postcat = get_the_category();
					foreach( $postcat as $cat ) {
						if ( $cat->parent != 0 ) {
							$catslug = $cat->slug;
						}
					} ?>

					<!-- We just inject our stuff into the html here -->
					<div class="resource <?php echo $catslug; ?>">
						<h1><?php the_title(); ?></h1>
						<br>
						<p>Date: <?php echo get_post_meta( $post->ID, 'Date', true); ?></p>
						<p>Sponsor: <?php echo get_post_meta( $post->ID, 'Sponsor', true); ?></p>
						<br>
						<a id="button" href="<?php echo get_post_meta( $post->ID, 'Article Link', true); ?>">
							Download PDF
						</a>
						<br><br>
					</div>
			<!-- end the loop, reset the post data -->
			<?php endwhile; endif; wp_reset_postdata(); ?>

		</div>




	</div></div>
</div>
<?php get_footer(); ?>
