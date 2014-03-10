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
