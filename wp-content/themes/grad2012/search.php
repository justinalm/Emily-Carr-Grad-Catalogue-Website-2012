<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

<div class="container">
  <div class="row">
    
      <div class="twelvecol" id="blog"> 

			<?php if ( have_posts() ) : ?>


				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<a href="<?php the_permalink(); ?>" class="box col<?php echo rand(2,4); ?>">
    			<span class="title"><?php the_title(); ?></span>
    			<?php echo get_the_post_thumbnail($id, 'large'); ?>

				<?php endwhile; ?></a>

			<?php else : ?>

						<h2 class="search-head"><?php _e( 'Who? What? Where?', 'twentyeleven' ); ?></h2>
						<p><?php _e( 'Sorry, but your search has yielded no results. 
						<br>Search the catalog again. We know you can do it!', 'twentyeleven' ); ?></p>
						
            <div class="twocol" style="margin: 0 0 0 4px;">
						<?php get_search_form(); ?>
						</div>

			<?php endif; ?>
			
			</div>
	</div>
</div>

<?php get_footer(); ?>