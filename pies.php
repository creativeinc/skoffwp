<?php get_header(); ?>

<?php 
/* 
Template Name: Pies Page
*/
?>

<?php get_header(); ?>


<section class="wrap no-padding">
    
      <?php include('social.php'); ?>


       <div class="row">
        <article class="col-1">
            <div class="content intro center">
                <h2 class="section-title"><?php trim(wp_title("")); ?></h2>

    <p class="large"><?php the_field('intro'); ?></p>



</div></article>
  
  <?php if( have_rows('pie') ): ?>
  
      <?php while( have_rows('pie') ): the_row(); ?>
        <article class="col-3">
      <div class="content left  <?php the_sub_field('colour'); ?>  ">
              <a href="<?php the_sub_field('link'); ?> ">
               <h3><?php the_sub_field('sub_title'); ?> </h3>        
               <h2><?php the_sub_field('main_title'); ?></h2>          
               <p><?php the_sub_field('text'); ?>  </p> 
               <span class="more-white"></span>
              </a>       
              
        
      </div>     </article>        
    
      <?php endwhile; ?>
  <?php endif; ?>

    
    <?php the_field('pie_two'); ?>
    <?php the_field('pie_three'); ?>

</div>
</section>

<?php get_footer(); ?>
