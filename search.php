<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Rocketpopmedia
 * @since Rocketpopmedia 1.0
 */
get_header(); ?>
<section class="twelve columns alpha">
   <div id="the-articles">
   <?php if (have_posts()) : ?>
      <h2><?php printf(__('Search Results for: %s', 'rocketpopmedia'), '' . get_search_query() . ''); ?></h2>
      <?php
      /* Run the loop for the search to output the results.
       * If you want to overload this in a child theme then include a file
       * called loop-search.php and that will be used instead.
       */
       get_template_part('loop', 'search');
      ?>
   <?php else : ?>
      <h2><?php _e('Nothing Found', 'rocketpopmedia'); ?></h2>
      <p><?php _e('Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'rocketpopmedia'); ?></p>
      <?php get_search_form(); ?>
      <script>
         // focus on search field after it has loaded
         document.getElementById('s') && document.getElementById('s').focus();
      </script>
   <?php endif; ?>
   </div>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
