<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Rocketpopmedia
 * @since Rocketpopmedia 1.0
 */
?>
<aside id="sidebar" class="four columns" role="complementary">
   <ul>
   <?php (is_active_sidebar('primary-widget-area')) ? dynamic_sidebar('primary-widget-area') : NULL; ?>
   <?php (is_active_sidebar('secondary-widget-area')) ? dynamic_sidebar('secondary-widget-area') : NULL ?>
   <?php (is_active_sidebar('third-widget-area')) ? dynamic_sidebar('third-widget-area') : NULL ?>
   <?php (is_active_sidebar('fourth-widget-area')) ? dynamic_sidebar('fourth-widget-area') : NULL ?>
   <?php (is_active_sidebar('fifth-widget-area')) ? dynamic_sidebar('fifth-widget-area') : NULL ?>
   <?php (is_active_sidebar('sixth-widget-area')) ? dynamic_sidebar('sixth-widget-area') : NULL ?>
   <?php (is_active_sidebar('seventh-widget-area')) ? dynamic_sidebar('seventh-widget-area') : NULL ?>
   </ul>
</aside>
