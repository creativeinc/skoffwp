<?php get_header(); ?>

<?php 
/* 
Template Name: Contact Page
*/
?>

<div class="wrap page-title">
  <h2 class="section-title">Our Pies</h2><?php include('social.php'); ?>
</div>


		<section class="wrap no-padding contact">
			
			<div class="row">

	
			<div class="col-2 pull-left">
				<div class="content">
						  <p class="large"><?php the_field('intro');?></p>
					</div>

				<div class="row contact-info">

					<div class="col-3 pull-left">

						<div class="content phone">
							<h4>Contact us by phone:</h4>
							<p><?php the_field('phone');?></p>
							<h4>Drop us a mail:</h4>
							<p><a href='mailto:<?php the_field('email_address');?>?subject=We love your pies'><?php the_field('email_address');?></a></p>
						</div>
						
					</div>
					<div class="col-3 pull-left address">
						<address>
							<?php the_field('address');?>
						</address>
					</div>
					<div class="col-3 pull-left social">
						<div class="content ">
							<p>Join us on <a>Facebook</a> Follow us on <a>Twitter</a> <a>YouTube channel</a> Our <a>Instagram</a> profile</p>
						</div>
					</div>

					   <div class="col-1 pull-left">
						<div class="content">
							<p class="small">Fresh Cuts Foods Limited. Registered in Ireland | Number 357324. Registered office as above. Fresh Cuts Foods Limited. UK Limited Registered in England | Number 5071322. Registered office as above.
</p>
						</div>
					</div>

				</div>

			</div>  

				  
			

			<div class="col-2">
				<div class="content contact form">
				<?php if ( have_posts() ) { while ( have_posts() ) { the_post(); 
			   
			   	the_content(); 
			
		} 
	} 
?>

				</div>
			</div>



		  

		</section>




<?php get_header(); ?>
<?php get_footer(); ?>