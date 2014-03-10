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
                    </div>
          </aside>  

		<?php if (have_posts()) : ?>
		<?php $count = 0; ?>
		<?php while (have_posts()) : the_post(); ?>
		<?php $count++; ?>
		  <?php if ($count == 1) : ?>
		 	 <article class="col-9">
			  <div class="content feature">
			  	  <div class="date">
		   	  		  	<span class="day"><?php the_time('d'); ?></span></br><span class="month"><?php the_time('M'); ?></span>
		   	  		  </div>
		   
			  		<div class="feature-image text-left"><?php the_post_thumbnail(); ?></div>
			  	  	  <div class="feature-text">
			  	  	  <h3><?php foreach((get_the_category()) as $category) { if ($category->cat_name != 'uncategorized') { 
				echo '<a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a> ';
				} }?></h3>
			          <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			          <p><?php the_excerpt(); ?></p>
			          <span class="arrows"></span>
			      	</div>
			   </div>
		</article>       
		     
	

		  <?php endif; ?>
		<?php endwhile; ?>
		<?php endif; ?>



</div>
</section>

<section  class="wrap updates">
    <div class="row">
    	 <div id="content" class="col-9  pull-right">
		
		<?php if (have_posts()) : ?>
		
		<?php $count = 0; ?>
		<?php while (have_posts()) : the_post(); ?>


			<?php $count++; ?>
			  <?php if ($count !== 1) : ?>

			   <article class="col-3 pull-left">
                <div class="content no-margin">   
                	  <div class="date">
		   	  		  	
					<span class="day"><?php the_time('d'); ?></span></br><span class="month"><?php the_time('M'); ?></span>
		   	  		  </div>
		   
		   	  		  <div class="thumb"><?php the_post_thumbnail(); ?></div>

					
		   	  			 <?php if ( in_category('4') ): ?>
           					<h3><?php echo get_category('4')->cat_name; ?></h3>
 						 <?php elseif ( in_category('2') ): ?>
          					<h3><?php echo get_category('2')->cat_name; ?></h3>
      					 <?php elseif ( in_category('3') ): ?>
          					<h3><?php echo get_category('3')->cat_name; ?></h3>
 						 <?php endif; ?>


			          <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			          <p><?php the_excerpt(); ?></p>
			          <span class="more"></span>
			     
			     </div>
			 </article>
			     
			  <?php endif; ?>

		<?php endwhile; ?>


<div id="#nav-below">
		<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
		<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>
</div>

		<?php endif; ?>

				
		   </div>  
</div>
</section>

<?php get_footer(); ?>

