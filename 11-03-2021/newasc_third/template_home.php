<?php

/**

 * Template Name: Home Page

 * Template Post Type: post, page

 *

 * @package WordPress

 * @subpackage NewAsc

 * @since New ASC 1.0

 */

get_header();

?>
<section class="Home-section-1 main-padding-header Home_section_new">
    <div class="Home_slider">
    	<?php
		 $args = array(  
		        'post_type' => 'slider',
		        'post_status' => 'publish',
		        //'posts_per_page' => 8, 
		        'orderby' => 'title', 
		        'order' => 'ASC', 
		    );

		    $loop = new WP_Query( $args ); 
		    while ( $loop->have_posts() ) : $loop->the_post(); 
		  
        ?>
        <div class="slider-data" >
            <?php the_post_thumbnail(); ?>
            <div class="slider-inner-data">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
                            <h3 class="font-bold text-white"><?php echo get_the_title(); ?></h3>
                            <div class="d-flex">
                                <?php echo get_the_content(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  <!--slider-data-->
         
        <?php
             endwhile;
	   		 wp_reset_postdata(); 
	    ?>
    </div>
    
    <div class="bg-ef">
        <div class="container">
            <div class="pos-absolute-form">
                <form class="align-items-center justify-content-center">
                    <div class="home-form">
                        <div class="first-control">
                        <input type="text" class="mb-0 full form-control" placeholder="Location">
                        </div>
                        <div class="second-control">
                        <select class="mb-0 full form-control">
                            <option>Please Select</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                        </div>
                        <div class="third-control">
                        <button class="uppercase btn-sm btn-orange mb-0" type="submit">Find Camps</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="Home-section-3">
  <div class="container">
    <div class="partner_slider">
    	<?php
		 	$args = array( 'post_type' => 'HomeLogos', 'posts_per_page' => 10 );
			$the_query = new WP_Query( $args ); 
			 if ( $the_query->have_posts() ) :
			 while ( $the_query->have_posts() ) : $the_query->the_post(); 
		
        ?>
        <div class="slider-data">
          <?php the_post_thumbnail(); ?>
        </div>
    <?php endwhile; 
    		endif;
    ?>
        
    </div>
  </div>
</section>

<section class="Home-section-3">
    <div class="container">
        <div class="title">
            <div class="row justify-content-center">
                <div class="col-xl-9 col-lg-11">
                    <h2>Find a camp</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-7 col-sm-9 col-10 main-styled-card">
                <div class="card styled-card">
                    <div class="card-img">
                        <div class="inner-card ">
                            <img src="image/card-hover-img.png" class="img-fluid" alt="cardhover">
                        </div>
                        <img src="image/card1.png" class="img-fluid" alt="cardhover">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Card Title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a class="" href="/">Read More</a>
                    </div>
                </div>
                <div class="card styled-card">
                    <div class="card-img">
                        <div class="inner-card ">
                            <img src="image/card-hover-img.png" class="img-fluid" alt="cardhover">
                        </div>
                        <img src="image/card2.png" class="img-fluid" alt="cardhover">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Card Title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a class="" href="/">Read More</a>
                    </div>
                </div>
                <div class="card styled-card">
                    <div class="card-img">
                        <div class="inner-card ">
                            <img src="image/card-hover-img.png" class="img-fluid" alt="cardhover">
                        </div>
                        <img src="image/card3.png" class="img-fluid" alt="cardhover">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Card Title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a class="" href="/">Read More</a>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-4 col-lg-4 col-md-7 col-sm-9 col-10 main-styled-card">
                <div class="card styled-card">
                    <div class="card-img">
                        <div class="inner-card ">
                            <img src="image/card-hover-img.png" class="img-fluid" alt="cardhover">
                        </div>
                        <img src="image/card4.png" class="img-fluid" alt="cardhover">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Card Title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a class="" href="/">Read More</a>
                    </div>
                </div>
                <div class="card styled-card">
                    <div class="card-img">
                        <div class="inner-card ">
                            <img src="image/card-hover-img.png" class="img-fluid" alt="cardhover">
                        </div>
                        <img src="image/card5.png" class="img-fluid" alt="cardhover">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Card Title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a class="" href="/">Read More</a>
                    </div>
                </div>
                <div class="card styled-card">
                    <div class="card-img">
                        <div class="inner-card ">
                            <img src="image/card-hover-img.png" class="img-fluid" alt="cardhover">
                        </div>
                        <img src="image/card6.png" class="img-fluid" alt="cardhover">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Card Title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a class="" href="/">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-7 col-sm-9 col-10 main-styled-card">
                <div class="card styled-card">
                    <div class="card-img">
                        <div class="inner-card ">
                            <img src="image/card-hover-img.png" class="img-fluid" alt="cardhover">
                        </div>
                        <img src="image/card7.png" class="img-fluid" alt="cardhover">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Card Title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a class="" href="/">Read More</a>
                    </div>
                </div>
                <div class="card styled-card">
                    <div class="card-img">
                        <div class="inner-card ">
                            <img src="image/card-hover-img.png" class="img-fluid" alt="cardhover">
                        </div>
                        <img src="image/card8.png" class="img-fluid" alt="cardhover">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Card Title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a class="" href="/">Read More</a>
                    </div>
                </div>
                <div class="card styled-card">
                    <div class="card-img">
                        <div class="inner-card ">
                            <img src="image/card-hover-img.png" class="img-fluid" alt="cardhover">
                        </div>
                        <img src="image/card9.png" class="img-fluid" alt="cardhover">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Card Title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a class="" href="/">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>

<?php  
    include("Common/batman.php");
?>

<section class="Home-section-4">
    <div class="container">
        <div class="title">
            <div class="row justify-content-center">
                <div class="col-xl-9 col-lg-11">
                    <h2>ASC HALL OF FAME</h2>
                    <p>Some of our past and current ASC heroes</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 main-trainer">
                <div class="trainer-main">
                    <img src="image/trainer1.png" class="img-fluid" alt="trainer">
                    <div class="trainer-content">
                        <div class="trainer-card">
                            <h4>STACIA JOSEPH</h4>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore</p>
                            <a href="" class="nav-link p-0">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 main-trainer">
                <div class="trainer-main">
                    <img src="image/trainer4.png" class="img-fluid" alt="trainer">
                    <div class="trainer-content">
                        <div class="trainer-card">
                            <h4>STACIA JOSEPH</h4>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore</p>
                            <a href="" class="nav-link p-0">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 main-trainer">
                <div class="trainer-main">
                    <img src="image/trainer3.png" class="img-fluid" alt="trainer">
                    <div class="trainer-content">
                        <div class="trainer-card">
                            <h4>STACIA JOSEPH</h4>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore</p>
                            <a href="" class="nav-link p-0">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 main-trainer">
                <div class="trainer-main">
                    <img src="image/trainer4.png" class="img-fluid" alt="trainer">
                    <div class="trainer-content">
                        <div class="trainer-card">
                            <h4>STACIA JOSEPH</h4>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore</p>
                            <a href="" class="nav-link p-0">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!--  -->

    <?php  
      //  include("Common/modalsection.php");
    ?>

    <!--  -->

    <?php  
      //  include("Common/Included_section.php");
    ?>

    <!--  -->

    <?php  
      //  include("Common/Kids_section.php");
    ?>

    <!--  -->

    <?php  
      //  include("Common/Bottom_form.php");
    ?>

    <!--  -->

    <?php  
      //  include("Common/footer.php");
    ?>
    
</body>
</html>



<?php

get_footer();

?>