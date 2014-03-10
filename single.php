<?php get_header(); ?>

<div class="wrap page-title">
    <h2 class="section-title">Updates</h2>

	<?php include('social.php'); ?>
  	
</div>


<section class="wrap updates">
	<div class="row">

    	 <aside class="col-4 pull-left">
            <div class="content">
                         <ul>
                         <?php $args = array( 'orderby' => 'name', 'parent' => 0);
							$categories = get_categories( $args );
							foreach ( $categories as $category ) {
							echo '<li><a href="' . get_category_link( $category->term_id ) . '">' . $category->name . '</a></li>';
							}?>
						  </ul>

                    <p>Some things are better shared so keep in touch! For regular posts on what we're up to on an ongoing basis, whether it's recipes we think might go brilliantly with a certain pie or just sharing our news and views with you, this is where you'll find the latest Skoffings. We love hearing from you and make sure to follow us on Facebook and Twitter.</p>
                    
					 <a href="<?php site_url(); ?>/updates" class="read-more">Back to All UPDATES</a>

                    </div>



          </aside>  


 <?php if (have_posts()) : ?>
               <?php while (have_posts()) : the_post(); ?>    

   <article class="col-9 single-post">
        <div class="content post">
           <div class="date">
                  <span class="day"><?php the_time('d'); ?></span></br><span class="month"><?php the_time('M'); ?></span>
                </div>
            <div class="feature-image text-left">
               <?php the_post_thumbnail(); ?>
            </div>
        </div>
        
    </article>


  <article class="col-9">
            <div class="content post-text">
               <div class="text-left">   

				 <h3><?php $category = get_the_category();  echo $category[0]->cat_name; ?></h3>
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>

               <?php endwhile; ?>
     <?php endif; ?>
	
	</div>
</section>



<?php get_footer(); ?>