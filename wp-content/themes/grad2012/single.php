<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

        <?php
          $post = $wp_query->post;

          if (in_category('4')) {
              include(TEMPLATEPATH.'/single_design.php');
          } elseif (in_category('6')) {
              include(TEMPLATEPATH.'/single_finearts.php');
          } elseif (in_category('7')) {
              include(TEMPLATEPATH.'/single_mediaarts.php');
          } elseif (in_category('5')) {
              include(TEMPLATEPATH.'/single_maa.php');
          } else {
              include(TEMPLATEPATH.'/single_default.php');
          }
        ?>
