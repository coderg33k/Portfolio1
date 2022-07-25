<?php 
  /**
   * Template Name: Homepage
   * 
   * @package Portfolio1
   * 
   */
?>

<?php get_header(); ?>
<!-- profilepic and profiletext are part of ACS inside WP Dashboard -->
<div class="homepage">
  <div class="profilepic">
    <img src="<?php the_field('profilepic'); ?>" alt="" class="">
  </div>
  <div class="profiletext">
    <h2><?php the_field('profiletext1'); ?></h2>
    <h3><?php the_field('profiletext2'); ?></h3>
  </div>

  <?php
get_template_part('template-parts/profile-bio');
  ?>
</div>

<?php get_footer(); ?>

<?php
get_template_part('template-parts/name-of-template-parts-file-here');
?>