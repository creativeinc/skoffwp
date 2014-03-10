<?php get_header(); ?>

<?php 
/* 
Template Name: Single Pie Page
*/
?>

<?php get_header(); ?>
<div class="wrap page-title">
  <h2 class="section-title">Our Pies</h2><?php include('social.php'); ?>
</div>

<section class="wrap no-padding">
  <div class="row">
    <aside class="col-4 pull-left ">
      <div class="content">   

		<ul>
		  <?php wp_list_pages("title_li=&child_of=34"); ?>
		</ul>

        <p>Good food has always been at the heart of the Skehan family. Skoff Pies are made from 100% natural ingredients and come from a recipe which has been passed down from my grandfather to my dad and now to me. Wholesome and tasty, the perfect comfort food to enjoy at home.</p>
      </div>
    </aside>

    <article class="col-9">
      <div class="content pie-info">
        <div class="banner left <?php the_field('banner_colour'); ?>">
          <h3><?php the_field('sub_header');?></h3>

		<h3> </h3>

          <h2><?php trim(wp_title("")); ?></h2>
        </div>

        <div class="row">
          <div class="col-2 pie-info">
            <h2 class="content-title text-left"><?php the_field('title'); ?></h2>

            <p class="text-left"><?php the_field('body_text'); ?></p>
          </div>

          <div class="col-2 pie-info text-left">
            <div id="accordian">
              <ul>
                <li>
                  <h4><span class="icon cooker"></span>Cooking Instructions</h4>

                  <ul>
                    <li>
                      <p class="instructions"><?php the_field('cooking_instructions'); ?></p>
                    </li>
                  </ul>
                </li>

                <li>
                 <h4><span class="icon pot"></span>Filling ingredients</h4>

                  <ul>
                    <li>
                      <p class="instructions"><?php the_field('filling_ingredients'); ?></p>
                    </li>
                  </ul>
                </li>

                <li>
                  <h4><span class="icon pie"></span>Pie ingredients</h4>

                  <ul>
                    <li>
                      <p class="instructions"><?php the_field('pie_ingredients'); ?></p>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </article>
  </div>
</section><?php get_footer(); ?>