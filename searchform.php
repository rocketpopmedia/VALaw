<?php
/**
 * The template for displaying search forms in Twenty Eleven
 *
 * @package WordPress
 * @subpackage Rocketpopmedia
 * @since Rocketpopmedia 1.0
 */
?>
<form method="get" id="search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
   <input type="text" class="field" name="s" id="s" placeholder="<?php esc_attr_e( 'SEARCH', 'rocketpopmedia' ); ?>" />
   <input type="submit" class="ir submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'GO!', 'rocketpopmedia' ); ?>" />
</form>
