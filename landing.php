<?php get_header(); ?>

<?php 
/* 
Template Name: Home Page
*/
?>

<?php get_header(); ?>



        <section id='slider' class='swipe full-width'>
          <div class='swipe-wrap'>

            
            <?php if(have_rows('slider')):
              while( have_rows('slider') ) : the_row();
                if(get_row_layout() == 'slider_text'):
                   
                   $subTitle = get_sub_field('sub_title');
                   $mainTitle = get_sub_field('main_title');
                   $sliderText = get_sub_field('slider_text');
                   $sliderImage = get_sub_field('slider_image');

                   echo '<div>
                            <div class="text-wrap">
                                <div class="slider-text">
                                  <h3>' . $subTitle . '</h3>',
                                  '<h2>' . $mainTitle . '</h2>',
                                  '<p>' . $sliderText . '</p>
                                </div>
                            </div>',
                    
                            '<div class="bg"><img src="' . $sliderImage . '" alt="' . $image['alt'] . '" /></div>
                        </div>';

                  elseif(get_row_layout() == 'slider_graphic'):

                    $sliderImage = get_sub_field('slider_image');
                    $graphic = get_sub_field('graphic');

                     echo '<div>
                            <div class="text-wrap">
                                <div class="slider-graphic">
                                  <img src="' . $graphic . '" alt="' . $image['alt'] . '" />,                           
                                </div>
                            </div>',
                    
                            '<div class="bg"><img src="' . $sliderImage . '" alt="' . $image['alt'] . '" /></div>
                        </div>';



          endif;
    endwhile;
 endif; ?>


</div>
</section>


  <section class="wrap">

    <div class="counter content">
                 <ul id='position'>
       <?php if(have_rows('slider')):
              while( have_rows('slider') ) : the_row();
                if(get_row_layout() == 'slider_text'):
                  
                  $subTitle = get_sub_field('sub_title');

                   echo "<li></li>";

                elseif(get_row_layout() == 'slider_graphic'):

                  echo "<li></li>";
    endif;
    endwhile;
 endif; ?>

</ul></div>
            




        
                     
                      
                
            

     <div class="row">

            <?php if(have_rows('our_pies')):
              
              while(have_rows('our_pies')) : the_row();

                    $pieImage = get_sub_field('pie_image');
                    $subTitle = get_sub_field('subTitle');
                    $mainTitle = get_sub_field('mainTitle');
                    $text = get_sub_field('text');
                    $link = get_sub_field('link');

                    echo'
                    <article class="col-3">
                      <div class="content">

                      <div class="thumb"><img src="'.$pieImage.'" height="160" width="310" alt=""></div>
                      <h3>'.$subTitle.'</h3>
                     <a href="'.$link.'"> <h2>'.$mainTitle.'</h2></a>
                      <p>'.$text.'</p>

                      <a href="'.$link.'"><span class="more"></span></a>
                      </div>
                    </article>';

                 endwhile; 
              endif;

            ?>

      </div>

</section>


<section class='full-width'>
  <div class="wrap profile-image profile">
    <div class="row">
      <div class="col-2">
        <h2 class="large">Donal Skehan</h2>

        <p class="large"><?php the_field('about_donal'); ?></p>
      </div>
    </div>
  </div>
</section>

<section class="wrap">
            
            <div class="row">

                <div class="col-1">
                    <div class="content title">
                    <h3 class="section-title">Updates</h3>
                    <a class="read-more" href="<?php site_url(); ?>/updates/">View All updates ></a>
                    </div>
                </div>


           <?php query_posts('posts_per_page=4'); ?>
            <?php while (have_posts()) : the_post(); ?>
             <article class="col-4">
                    <div class="content">
                      <div class="date">
                  
          <span class="day"><?php the_time('d'); ?></span></br><span class="month"><?php the_time('M'); ?></span>
                </div>
       
                 <div class="thumb"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></div>
                 <h3><?php foreach((get_the_category()) as $category) { if ($category->cat_name != 'uncategorized') { 
        echo '<a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a> ';
        } }?></h3>
                <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>"><span class="more"></span></a>
           
              </article>

            <?php endwhile;?>

</div>
</section>


<?php get_footer(); ?>
