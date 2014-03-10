<?php get_header(); ?>

   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
   		<h3><?php the_title(); ?></h3>
   		<?php the_content(); ?>
   <?php endwhile; endif; ?>

	<?php if( have_rows('example_repeater') ): ?>
	 
	    <ul>
	    <?php while( have_rows('example_repeater') ): the_row(); ?>
	        <li><?php the_sub_field('repeater_textfield'); ?><img src="<?php the_sub_field('repeater_imagefield'); ?>" /></li>	        
	    <?php endwhile; ?>
	    </ul>
	 
	<?php endif; ?>
		
<?php get_footer(); ?>








	


