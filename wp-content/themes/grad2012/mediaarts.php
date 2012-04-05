<?php
/*
Template Name: mediaarts
*/
?>

<?php include("header.php"); ?>

<div id="mediaarts">
    <img src="/wp-content/themes/grad2012/images/mediaarts.png">
</div>

<div class="container">
  <div class="row">
    
      <div class="twelvecol" id="blog"> 
      <?php
      			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      			$args = array(
      				'category_name' => 'mediaarts',
      				'paged' => $paged,
      				'posts_per_page' => -1,
      				'orderby' => 'title',
      				'order' => 'asc'
      			);
      			query_posts($args); ?>
  		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  		  
  		<a href="<?php the_permalink(); ?>" class="box col<?php echo rand(2,4); ?>">
			<span class="title"><?php the_title(); ?></span>
			<?php echo get_the_post_thumbnail($id, 'large'); ?> 
  		<?php endwhile; endif; ?></a>
  		</div>
  		</div>
  		
    <div class="row">
      <div class="twelvecol">
   	    <p><?php if (function_exists("pagination")) {pagination($additional_loop->max_num_pages);} ?></p>
      </div>
    </div>

</div>

<?php include("footer.php"); ?>