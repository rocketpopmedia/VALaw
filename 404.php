<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Rocketpopmedia
 * @since Rocketpopmedia 1.0
 */
get_header(); ?>
<section class="twelve columns alpha">
   <article id="the-articles post-0" class="post error404 not-found">
      <h2><?php _e('Not Found', 'rocketpopmedia'); ?></h2>
      <div id="404"></div>
      <p><?php _e('Perhaps searching will help.', 'rocketpopmedia'); ?></p>
      <?php get_search_form(); ?>
      <script>
         // focus on search field after it has loaded
         document.getElementById('s') && document.getElementById('s').focus();
      </script>
   </article>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
