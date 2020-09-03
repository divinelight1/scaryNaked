<?php
/**
* The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */

 get_header();
 ?>

 <!--
abowe is the loop for backend editor content
if you dont need it feel free to delete
otherwise fit into the markup that you like

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
  here you can place markup
    <?php the_content(); ?>
  <?php endwhile; ?>
<?php endif; ?>

 -->

 <?php get_footer(); ?>
