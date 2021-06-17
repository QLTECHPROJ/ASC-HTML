<?php
/*
Template Name: City Template
*/
?>
<?php get_header(); ?>


<!-- <div id="home-content template-content" class="x-main full" role="main"> -->
    <?php
    $id = "";
    $current_url =  (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
 //print_r($current_url);

 $category_name = basename($current_url);
 $category_first = ucfirst($category_name);

 $args = array( 'post_type' => 'cpt_152600', 'posts_per_page' => 10, 'orderby' => 'ASC' , 'title' => $category_first );

    $loop = new WP_Query( $args );

if ( $loop->have_posts() ) {
        while ( $loop->have_posts() ) : $loop->the_post();
// echo "<pre>";
// print_r($product);
         //$title =  the_title();
         //echo $title;
         $id = get_the_ID();
         //echo $id;
endwhile;
}

 $page_title = get_field( "page_title",$id );
 //echo "<pre>";
 //print_r($page_title);


?>

    <section class="Banner-Section">
        <div class="container">
            <div class="Banner-Section-data">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" class="nav-link p-0">Home</a></li>
                <li class="breadcrumb-item"><a href="#" class="nav-link p-0">City</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $category_first;?></li>
                </ol>
            </nav>
            <h2 class="heading-banner"><?php echo $page_title;?></h2>
            </div>
        </div>
    </section>
    <section class="City-details-section-2">
        <div class="container">
            <div class="">
                <Container>
                    <div class="title">
                        <h2 class="uppercase"><?php echo get_field('sub_title_1',$id);?></h2>
                        <h2 class="uppercase"><?php echo get_field('sub_title_2',$id);?></h2>
                    </div>
                    <div class="text-center">
                        <button class="uppercase btn btn-orange-large" type="submit" id="download_flyer">DOWNLOAD FLYER</button>
                    </div>
                </Container>
            </div>
        </div>
    </section>
    <section class="City-details-section-3">
        <div class="container">
            <div class="row">
<?php
$params = array(
    'post_type' => 'product',
    'meta_query' => array(
        array('key' => 'camp_city', //meta key name here
              'value' => $category_first, 
              'compare' => '=',
        )
    ),  
    'posts_per_page' => 5 

);
$loop = new WP_Query($params);
if ( $loop->have_posts() ) {
        while ( $loop->have_posts() ) : $loop->the_post();
          /*echo "<pre>";
print_r($product);*/
global $post, $product;

/*echo "<pre>";
print_r($product);*/

//echo $product->id;

?>

 <div class="col-xl-4 col-lg-4 col-md-6 col-sm-9 col-12 main-book-card">
    <div class="card book-card">
        <div class="card-img">
            <img src="<?php echo wp_get_attachment_url($product->image_id);?>" class="img-fluid" alt="">
            <div class="tag blue">New</div>
        </div>
        <div class="card-body">
            <h5 class="card-title"><?php echo the_title();?></h5>
            <?php
                $date = get_post_meta($product->id,'camp_dates',true);
                $camp_venu = get_post_meta($product->id,'camp_venue',true);
            ?>
            <p class="card-text"><?php echo $date;?></p>
            <p class="card-text"><?php echo $camp_venu;?></p>
            <ul>
                <li class="main-price">$<?php echo $product->get_price();?></li>
            </ul>
            <a class="nav-link uppercase btn-sm btn-orange text-center" href="<?php the_permalink() ?>">More info / Book Now</a>
        </div>
    </div>
</div>

<?php
endwhile;
}else {
    /**
     * Hook: woocommerce_no_products_found.
     *
     * @hooked wc_no_products_found - 10
     */
    do_action( 'woocommerce_no_products_found' );
}
?>
</div>
</div>
</section>

<?php
$id = "";
 $args = array( 'post_type' => 'cpt_152600', 'posts_per_page' => 10, 'orderby' => 'ASC' , 'title' => $category_first );

    $loop = new WP_Query( $args );

if ( $loop->have_posts() ) {
        while ( $loop->have_posts() ) : $loop->the_post();
// echo "<pre>";
// print_r($product);
         //$title =  the_title();
         //echo $title;
         $id = get_the_ID();
         //echo $id;
endwhile;
}
$school_holiday_program = get_field( "school_holiday_program",$id );
/*echo "<pre>";
print_r($value);*/
?>

<section class="Batman-Section">
    <div class="container">
        <div class="title mb-0">
            <div class="row justify-content-center">
                <div class="col-xl-9 col-lg-11">
                    <h2><?php echo $school_holiday_program['title']; ?></h2>
                    <!-- <p>Lorem ipsum dolor sit</p> -->
                </div>
            </div>
        </div>
        <div class="Batman-Section-data">
            <div class="row justify-content-center align-items-center">
                <div class="col-xl-4 col-lg-4 col-md-12 justify-content-center d-flex lg-mb-2">
                    <img src="<?php echo $school_holiday_program['image'];?>" class="img-fluid" alt="batman">
                </div>
                <div class="col-xl-8 col-lg-8 col-md-12">
                    <div class="pl-3 pr-2">
                        <p class="font-15 font-medium color-3b">
                            <?php echo $school_holiday_program['desc'];?>
                        </p>
                        <button class="uppercase btn-sm btn-orange-large" type="submit">BOOK A CAMP TODAY</button>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</section>
<?php
$holidays = get_field( "holiday_table",$id );
//echo "<pre>";
//print_r($holidays);
?>
<section class="City-details-section-4 tbl">
        <div class="container">
            <div class="mb-4">
                <div class="title-main mb-0">
                    <h2 class="text-white"><?php echo $holidays['title'];?></h2>
                </div>
               <!--  <p class="font-15 font-medium text-center text-white">
                    <?php echo $holidays['desc'];?>
                </p> -->
                <!-- <p class="font-15 font-medium text-center text-white mb-0">
                    2019/2020 Summer School HolidaysSat 21 December – Mon 27 January.
                </p> -->
            </div>

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="first-td">Period</th>
                            <th>Dates</th>
                            <th>Length</th>
                        </tr>
                    </thead>
                    <tbody>
                         
                                <?php

                                foreach ($holidays['table'] as $key => $va) {
                                    //echo "<pre>";
                                    //print_r($va);
                               
                                ?>
                            <tr>
                            <td class="first-td"><?php echo $va['period'];?></td>
                            <td><?php echo $va['dates'];?></td>
                            <td><?php echo $va['length'];?></td>
                            </tr>
                            <?php
                                }
                            ?>
                        
                        
                    </tbody>
                </table>
            </div>
        </div>
    </section>

<?php
$how_does_it_work = get_field( "how_does_it_work",$id );
//echo "<pre>";
//print_r($how_does_it_work);
?>
	<section class="Modal-section">
    <div class="container">
        <div class="title">
            <div class="row justify-content-center">
                <div class="col-xl-9 col-lg-11">
                    <h2><?php echo $how_does_it_work['title'];?></h2>
                    <p><?php echo $how_does_it_work['desc'];?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="Modal-section-data">
        <div class="container">
            <img src="<?php echo get_template_directory_uri().'/assets/image/play-button.png'?>" class="img-fluid" width="60" height="60" alt="batman" data-toggle="modal" data-target="#video_modal">
        </div>
    </div>
</section>

<div class="modal fade video-modal" id="video_modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-body p-0">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <iframe width="100%" height="400" id="video_id" src="<?php echo $how_does_it_work['youtube_url'];?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
        </div>
    </div>
    </div>
</div>
<?php
$included = get_field( "included",$id );
//echo "<pre>";
//print_r($included);
?>
<section class="Included-section">
        <div class="container">
            <div class="title">
                <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-11">
                        <h2>WHAT'S INCLUDED</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                    foreach ($included as $key => $valueincluded) {
                        # code...
                    
                ?>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                    <div class="icon-card card">
                        <div class="card-img">
                            <img src="<?php echo $valueincluded['icon'];?> " alt="cardhover" width="100" height="100" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $valueincluded['title'];?></h5>
                            <p class="line-break-3 card-text"><?php echo $valueincluded['desc'];?></p>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>

            <div class="text-center">
                <button class="uppercase btn-sm btn-orange-large" type="submit">BOOK A CAMP TODAY</button>
            </div>
        </div>
    </section>
    <?php
    
$testimonial = get_field( "testimonial",$id );
//echo "<pre>";
//print_r($testimonial);
    ?>

    <section class="Kid-section">
        <div class="Kid-section-first">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-6 kid-image">
                        <div class="d-lg-none d-inline">
                            <img src="<?php echo $testimonial['image'];?>" class="img-fluid" alt="kids">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 text-center kids-data">
                        <p class="mb-30 font-22 font-semibold text-white"><?php echo $testimonial['testimonial'];?></p>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="Kid-section-second">
            <div class="container">
                <div class="title">
                    <h2 class="uppercase"><?php echo $testimonial['title_1'];?></h2>
                    <h2 class="uppercase"><?php echo $testimonial['title_2'];?></h2>
                </div>
                <div class="text-center">
                    <button class="uppercase btn-sm btn-orange-large" type="submit">BOOK A CAMP TODAY</button>
                </div>
            </div>
        </div>
    </section>

    <?php
    
$flyer = get_field( "flyer",$id );
//echo "<pre>";
//print_r($flyer);
    ?>

    <section class="City-details-section-5" id="flyer_form">
        <div class="container">
            <div class="title">
                <h2><?php echo $flyer['title'];?></h2>
                <p><?php echo $flyer['desc'];?> </p>
            </div>
            
            <!--  fyler form will come here -->
            <?php
             $asd =   gravity_form(41, false, false, false, '', true, 12); 
             ?>
        </div>
    </section>

<!-- </div> -->

<?php get_footer(); ?>