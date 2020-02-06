<?php 
  get_header(); 
  get_template_part('templates/page', 'banner' );
  $thisID = get_the_ID();
?>
  <?php while( have_posts() ): the_post(); ?>
<section class="een-pakkende-sec">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="hpagebuilder-inner">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </div>    
</section>
<?php endwhile; ?>
<?php get_footer(); ?>