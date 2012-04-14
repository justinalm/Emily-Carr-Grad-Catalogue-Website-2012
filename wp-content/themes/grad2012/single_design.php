<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>


<?php include("header.php"); ?>

		<div class="container">
		  
			<div class="row">  
			    <div class="sixcol">
      				        <?php the_post(); ?>
                      <h2 class="post-titles"><?php the_title(); ?></h2>
          </div>
          
          <div class="sixcol last">
            </div>
          </div>
          
          <div class="row">
          <div class="threecol" id="list">
              				<p class="list"><?php echo get_post_meta($post->ID, 'project_name', true) ?></p>
              				<p class="list"><?php echo get_post_meta($post->ID, 'project_media', true) ?></p>
              				<p class="list"><?php echo get_post_meta($post->ID, 'project_dimensions', true) ?></p>              				
  				</div>
              				
			    <div class="threecol" id="list-last">              				
              				<p class="list"><?php echo get_post_meta($post->ID, 'student_portfolio', true) ?></p>
          </div>
          
          <div class="sixcol last">
          </div>
          </div>
            
          <div class="row">
          <div class="twelvecol">
              				<p class="content"><?php the_content(); ?></p>
          </div>
          </div>
          
      			<div class="row">
              				
              				<p class="random">5 more randomly suggested projects from Design:</p>
              				
              				<div class="twelvecol">
              				<?php
                       			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                       			$args = array(
                       				'category_name' => 'design',
                       				'posts_per_page' => 5,
                       				'orderby' => 'rand',
                       				'post__not_in' => array($post->ID)
                       			);
                       			query_posts($args); ?>
                   		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>                        

                   		<a href="<?php the_permalink(); ?>" class="thumbcol<?php echo rand(2,4); ?>">
                 			<?php echo get_the_post_thumbnail($id, 'large'); ?>
                 			<span class="thumbtitle"><?php the_title(); ?></span>
                   		<?php endwhile; endif; ?></a>
                   		</div>
		  </div><!-- #row -->
	  </div><!-- #container -->

<?php include("footer.php"); ?>
