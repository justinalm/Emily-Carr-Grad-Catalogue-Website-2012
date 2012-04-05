<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

<?php include("header.php"); ?>

	<div class="container">
		<div class="row">
  		<div class="ninecol">
					<h2><?php _e( 'This is somewhat embarrassing, isn&rsquo;t it?', 'portfolio' ); ?></h2>
					<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching, or one of the links
					below, can help.'); ?></p>
					<?php the_widget( 'WP_Widget_Recent_Posts', array( 'number' => 10 ), array( 'widget_id' => '404' ) ); ?>
          <div class="threecol last">
          </div>
      </div>
	</div>
</div>
<br>
<?php include("footer.php"); ?>
