<?php
/*
Template Name: finearts
*/
?>

<?php include("header.php"); ?>

<div id="finearts">
    <img src="/wp-content/themes/grad2012/images/finearts.png">
</div>

<div class="container">
  <div class="row">
    
      <div class="twelvecol" id="blog"> 
      <?php
      			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      			$args = array(
      				'category_name' => 'finearts',
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

</div>

<?php include("footer.php"); ?>