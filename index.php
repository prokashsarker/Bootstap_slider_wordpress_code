  <div class="col-lg-12 res_ma">
			<div class="container">
			 
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				   <!-----------Slider--1-------------------------->
				    
					<div class="carousel-inner" role="listbox">
					<!-------Start--5------->
				 
					 
					 				 <?php
				global $post;
				$args = array('posts_per_page' => -1, 'post_type'=> 'slider');
		
				$myposts = get_posts( $args );
				 $i=0;
				foreach( $myposts as $post ) : setup_postdata($post);
                  		
                 $i>0; $i++;
					 
					if($i==1){ 
						$class='active';
					}
					else{ 
						$class='';
					}
				?>

						<!-------Start--5------->
						<div class="item <?php echo  $class;?>">
							<div class="col-lg-12 pad_m">
								<div class="col-lg-8 pad_m">
					
					<img src="<?php $slide_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider-image' ); echo $slide_image[0]; ?>" alt="" title="#<?php the_ID(); ?>"/>
				 
								</div>
								<div class="col-lg-4 pad_m slider_text_back">
									<div class="col-lg-12">
										<div class="col-lg-2"></div>
				<div id="<?php the_ID(); ?>" class="col-lg-10 kill_m">
					<?php the_content(); ?>
				</div>	 
									</div>
								</div>
							</div>
						</div>
						
							<?php endforeach; ?>	
						   
						<!-----------------End----5------------->
					</div>

				  <!-- Controls -->
					<a class="left carousel-control mar_m2" href="#carousel-example-generic" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control mar_m" href="#carousel-example-generic" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
				
				
				
				
				
				
		 	
				
				
				
				<ul class="items">

							
						<?php if(!is_paged()) { ?>
						<?php
							$args = array( 'post_type' => 'slider', 'posts_per_page' => 4 );
							$loop = new WP_Query( $args );
						?>  
						<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

						
                                <li>
								
									<?php the_post_thumbnail('slider-image', array('class' => 'postthumbnails')); ?>
                                </li>						
						
						
						<?php endwhile; ?>
						<?php wp_reset_query(); ?>
						<?php } ?>							
							
                            </ul>