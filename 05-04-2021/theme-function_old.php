<?php



if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'newasc_setup' ) ) :
	function newasc_setup() {
	
		load_theme_textdomain( 'newasc', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'newasc' ),
			)
		);
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);
		add_theme_support(
			'custom-background',
			apply_filters(
				'newasc_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);
		add_theme_support( 'customize-selective-refresh-widgets' );
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'newasc_setup' );

function newasc_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
	add_theme_support( 'gravityforms' );
	add_theme_support( 'woocommerce-gravityforms-product-addons' );
	add_theme_support( 'wc-dynamic-pricing-and-discounts' );
}
add_action( 'after_setup_theme', 'newasc_add_woocommerce_support' );


add_filter( 'woocommerce_breadcrumb_defaults', 'newasc_woocommerce_breadcrumbs' );
function newasc_woocommerce_breadcrumbs($defaults) {
	
	
	
	
    return array(
            'delimiter'   => ' &#47; ',
            'wrap_before' => '<section class="Banner-Section"><div class="container"><div class="Banner-Section-data"><nav aria-label="breadcrumb"><ol class="breadcrumb">',
            'wrap_after'  => ' </ol></nav><h2 class="heading-banner"></h2></div></div></section>',
            'before'      => '<li class="breadcrumb-item">',
            'after'       => '</li>',
            'home'        => _x( 'Home', 'breadcrumb', 'woocommerce' ),
        );
}





function newasc_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'newasc_content_width', 640 );
}
add_action( 'after_setup_theme', 'newasc_content_width', 0 );

function newasc_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'newasc' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'newasc' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'newasc_widgets_init' );

function newasc_scripts() {
	wp_enqueue_style( 'newasc-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'newasc-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'newasc-fontawesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'newasc-slick', get_template_directory_uri() . '/assets/css/slick.css', array(), _S_VERSION );
	wp_enqueue_style( 'newasc-slick-theme', get_template_directory_uri() . '/assets/css/slick-theme.css', array(), _S_VERSION );
	wp_enqueue_style( 'newasc-gatsby', get_template_directory_uri() . '/assets/css/gatsby-css.css', array(), _S_VERSION );
	
	
	//wp_enqueue_script( 'newasc-jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'newasc-popper', get_template_directory_uri() . '/assets/js/popper.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'newasc-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'newasc-slick', get_template_directory_uri() . '/assets/js/slick.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'newasc-ms', get_template_directory_uri() . '/assets/js/jquery.multiselect.js', array(), _S_VERSION, true );
	
	wp_enqueue_script( 'newasc-gmap', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyA-w1yIFUC5apNzpwsAGIxmhPQ2enVHfTE&libraries=places', array(), _S_VERSION, true );
	wp_enqueue_script( 'newasc-cookie', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'newasc-main', get_template_directory_uri() . '/assets/js/main.js', array(), time(), true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'newasc_scripts' );



require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/customizer.php';


if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

add_shortcode('Book_Kids', 'book_kids_section'); 
add_shortcode('menu_mega', 'GenerateMenu'); 
add_shortcode('Social_Menu', 'GenerateSocialMenu'); 

	function book_kids_section() {
		if(is_user_logged_in()){
			$user_id =  get_current_user_id();
			$array = array('4','26');
			$i = 0;
			$kids = array();
			foreach($array as $form_id){
				$paging = array( 'offset' => 0, 'page_size' => 150 );
				$search_criteria['field_filters'][] = array( 'key' => 'created_by', 'value' => $user_id );
				$entries = GFAPI::get_entries( $form_id, $search_criteria, null, $paging );
				foreach($entries as $e){
					$key = array_search($e['2.3']." ".$e['2.6'], array_column($kids, 'name'));
					$keys = array_keys(array_column($kids, 'name'), $e['2.3']." ".$e['2.6']);
					if($keys){
						$flag = 0;
						foreach($keys as $kk){
							$b_day = $kids[$kk]['birth_date'];
							if($b_day == $e['12']){
								$flag = 1;
							}
						}
						if($flag == 0){
							$kids[$i]['name'] = $e['2.3']." ".$e['2.6'];
							$kids[$i]['birth_date'] = $e['12'];
							$kids[$i]['Form'] = $form_id;
							$kids[$i]['School'] = $e['16'];
							$kids[$i]['Grade'] = $e['18'];
							$kids[$i]['Club'] = $e['17'];
							$kids[$i]['P_e'] = $e['20'];
							$kids[$i]['M_c'] = $e['21'];
							if($form_id == 4){
								$kids[$i]['gender'] = ($e['23'] == '') ? 'None' : $e['23'];
							}
							else{
								$kids[$i]['gender'] = ($e['25'] == '') ? 'None' : $e['25'];
							}
							$i++;
						}
					}
					else{
						$kids[$i]['name'] = $e['2.3']." ".$e['2.6'];
						$kids[$i]['birth_date'] = $e['12'];
						$kids[$i]['Form'] = $form_id;
						$kids[$i]['School'] = $e['16'];
						$kids[$i]['Grade'] = $e['18'];
						$kids[$i]['Club'] = $e['17'];
						$kids[$i]['P_e'] = $e['20'];
						$kids[$i]['M_c'] = $e['21'];
						if($form_id == 4){
							$kids[$i]['gender'] = ($e['23'] == '') ? 'None' : $e['23'];
						}
						else{
							$kids[$i]['gender'] = ($e['25'] == '') ? 'None' : $e['25'];
						}
						$i++;
					}
				}
			}
			
			echo'<div class="campbtnssec mb-5">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 " id="kids_walk" >
                        <div class="campbtnbx nchooskidbx">
                            <div class="campbtn-img"><img src="'.get_template_directory_uri().'/assets/image/Kids_walk.svg" alt="" class="campsvgicon"></div>
                            <span class="camptitle">Choose From Kids</span>
                         </div><!--campbtnbx-->
                        
                    </div>
                    <div class="col-lg-46 col-md-4 col-sm-6 col-12" id="new_walk">
                        <div class="campbtnbx addnewkidbx">
                            <div class="campbtn-img"><img src="'.get_template_directory_uri().'/assets/image/Add-New-Kids.svg" alt="" class="campsvgicon"></div>
                            <span class="camptitle">Add New Kids</span>
                        </div><!--campbtnbx-->
                    </div>
                </div>
            </div>    
            <div class="row" id="kids_sec" >
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group mb-20 kidsdropbx">
                        <label class="master-label">Choose Kids</label>
                        <select class="mb-1 master form-control" id="select_kids" >
							<option value="" >Please Select Kids</option>';
							foreach($kids as $k){
								echo '<option value="'.$k['name'].'@'.$k['birth_date'].'@'.$k['gender'].'@'.$k['School'].'@'.$k['Grade'].'@'.$k['Club'].'@'.$k['P_e'].'@'.$k['M_c'].'" >'.$k['name'].'</option>';
							}		
                        echo'</select>
                    </div>
                </div>
            </div>';
		}
				
	}
	


	function GenerateSocialMenu() {
		echo '<ul>';
		$args = array(  
			'post_type' => 'cpt_152830',
			'post_status' => 'publish',
			'posts_per_page' => 20, 
			'orderby' => 'title', 
			'order' => 'ASC', 
		);
		$loop = new WP_Query( $args ); 	
		while ( $loop->have_posts() ) : $loop->the_post(); 
			$icon = get_field( "icon", $post->ID );
			$social_link = get_field( "social_link", $post->ID );
			echo '<li><a class="nav-link p-0" target="_blank" href="'.$social_link.'"><i class="fa '.$icon.'"></i></a></li>';			
			the_excerpt(); 
		endwhile;
		wp_reset_postdata(); 					
		echo '</ul>';
		echo '<span class="httxt text-white text-uppercase">Australian sports camps ™</span>'; 		
		
	}
	
	function GenerateMenu() {
		
		$sport_menu = wp_get_nav_menu_object("Gatsby Menu Sports" );
		$array_sport_menu = wp_get_nav_menu_items( $sport_menu->term_id);
		
		
		
		
		$city_menu = wp_get_nav_menu_object("Gatsby Menu City" );
		$array_city_menu = wp_get_nav_menu_items( $city_menu->term_id);
		
		$prog_menu = wp_get_nav_menu_object("Gatsby Menu Partner" );
		$array_prog_menu = wp_get_nav_menu_items( $prog_menu->term_id);
		
		$menu_items = wp_get_menu_array('menu-1');
		
		echo '<ul class="navbar-nav ">';	
			foreach ($menu_items as $item){	
				echo '<div>';
					$dropdown = "";
					$uppercase = "";
					$ext = "";
					$pos = "";
					$dropdowntoggle = "";
					$mainmenu = "";
					$idd = "";
					if(!empty($item['children'])){$dropdown = "dropdown"; $uppercase = "uppercases";$dropdowntoggle = "dropdown-toggle"; $ext='data-toggle="dropdown" aria-expanded="false"';}
					if($item['title'] == 'Camps'){$dropdown = "dropdown"; $pos="position-static"; $dropdowntoggle = "dropdown-toggle"; $ext='data-toggle="dropdown" aria-expanded="false"'; $mainmenu = "main-menu-toggle"; $idd = 'id="navbarDropdown"';}
                    echo'<li class="nav-item '.$dropdown.' '.$uppercase.' '.$pos.' ">';
						
						if($item['title'] == 'Home'){
							echo'<a class="nav-link '.$mainmenu.' '.$dropdowntoggle.' " '.$ext.' '.$idd.' href="'.FRONT_URL.'">'.$item['title'].'</a>';
						}
						else if($item['title'] == 'Shop'){
							echo'<a class="nav-link '.$mainmenu.' '.$dropdowntoggle.' " '.$ext.' '.$idd.' href="'.FRONT_URL.'product">'.$item['title'].'</a>';
						}
						else{
							echo'<a class="nav-link '.$mainmenu.' '.$dropdowntoggle.' " '.$ext.' '.$idd.' href="'.FRONT_URL.''.strtolower($item['title']).'">'.$item['title'].'</a>';
						}
					
                        
						if($item['title'] == 'Camps'){
							echo '<ul class="dropdown-menu main-menu">';
                                echo '<div class="w-100 d-flex main-box d-xl-block">';
								echo '<div class="first-box">';
									 $cnt_s = (count($array_sport_menu)/2);
										echo '<div class="inner-menu">
												<div class="mb-3 menu-heading">
													<a href="'.FRONT_URL.'book-a-camp" class="">ASC Sports</a>
												</div>
												<ul>';	
												$k = 1;
												foreach($array_sport_menu as $sport){
													
													
													if($k <= $cnt_s){
														$link_array = explode('/',$sport->url);
														
														echo '<li>
														<img src="'.$sport->attr_title.'" class="icon img-fluid"><a href="'.FRONT_URL.'camps/'.strtolower(str_replace(" ", "-", $link_array[4])).'" class=""> '.$sport->title.'</a>
													</li>';
													}	
													$k++;
												}		
												echo '</ul>	
												</div>';
												
										echo '<div class="inner-menu">
												<div className="mb-3 menu-heading">
													<h3 className="font-16 font-semibold color-333 uppercase mb-3">&nbsp;</h3>
												</div>
												<ul>';	
												$j = 1;
												foreach($array_sport_menu as $sport){
													if($j > $cnt_s){
														$link_array = explode('/',$sport->url);
														echo '<li>
															<img src="'.$sport->attr_title.'" class="icon img-fluid"><a href="'.FRONT_URL.'camps/'.strtolower(str_replace(" ", "-", $link_array[4])).'" class=""> '.$sport->title.'</a>
														</li>';
													}
													
													$j++;
												}		
												echo '</ul>	
												</div>';		
												
										 		
										echo '<div class="inner-menu">
										<div class="mb-3 menu-heading">
											<a href="'.FRONT_URL.'school-holiday-programs" class="">Cities</a>
										</div>
										<ul>';
											foreach($array_city_menu as $city){
													echo '<li>
														<a href="'.FRONT_URL.'city/'.strtolower(str_replace(" ", "-", $city->title)).'" class=""> '.$city->title.'</a>
													</li>';	
												}	
										echo '</ul>	
										</div>';
										$cnt_p = (count($array_prog_menu)/2);	
										
										echo '<div class="inner-menu">
											<div class="mb-3 menu-heading">
												<a href="'.FRONT_URL.'partner-program" class="partnerprog_menu">Partner Programs</a>
											</div>
											<ul>';
											$kk = 1;
												foreach($array_prog_menu as $prog){
													if($kk <= $cnt_p){
														$link_array = explode('/',$prog->url);
													echo '<li>
														<img src="'.$prog->attr_title.'" class="icon img-fluid"><a href="'.FRONT_URL.'camps/'.strtolower(str_replace(" ", "-", $link_array[4])).'" class=""> '.$prog->title.'</a>
													</li>';	
													}
													$kk++;
												}
											echo'</ul>	
											</div>';
										echo '<div class="inner-menu">
											<div className="mb-3 menu-heading">
													<h3 className="font-16 font-semibold color-333 uppercase mb-3">&nbsp;</h3>
												</div>
											<ul>';
											$jj = 1;
												foreach($array_prog_menu as $prog){
													if($jj > $cnt_p){
													echo '<li>
														<img src="'.$prog->attr_title.'" class="icon img-fluid"><a href="'.FRONT_URL.'camps/'.strtolower(str_replace(" ", "-", $prog->title)).'" class=""> '.$prog->title.'</a>
													</li>';	
													}
													$jj++;
												}
											echo'</ul>	
											</div>';		
									echo '</div>';	
								
								echo '<div class="second-box">';
                                       $request = new WP_REST_Request( 'GET', '/newasc/v1/menu_banner' );
										$response = rest_do_request( $request );
										$server = rest_get_server();
										$data = $server->response_to_data( $response, false );
										$json = json_decode(wp_json_encode( $data ));
										$realArray = (array)$json;
										
										$data = (array)$realArray['ResponseData'][0];
										$IsBanner = $data['IsBanner'];
										$Desc = $data['Desc'];
										
										if($IsBanner == 1){
											echo $Desc;
										}
                                    echo '</div>';	
                                    echo '</div>';	
							echo '</ul>';	
						}
						if(!empty($item['children'])){
							echo '<ul class="dropdown-menu common-menu">';
								foreach($item['children'] as $submenu){
									echo '<li>';
                                        echo '<a class="dropdown-item" href="'.FRONT_URL.''.str_replace("'s","",str_replace(' ', '-', strtolower($submenu['title']))).'">'.$submenu['title'].'</a>';
                                    echo '</li>';
								}
							echo '</ul>';
						}
                    echo'</li>';
                echo'</div>';
				
			}
			
			echo' 	<div>
						<li class="nav-item">
							<a class="nav-link uppercase btn-sm btn-orange" href="'.FRONT_URL.'book-a-camp/">book a camp</a>
						</li>
					</div>
					<div>
						<li class="nav-item pr-0">
							<a class="nav-link uppercase " href="/cart">
								<img src="'.get_template_directory_uri().'/assets/image/cart.png" class="img-fluid" alt="Cinque Terre">';
								global $woocommerce;
								if($woocommerce->cart->cart_contents_count > 0){
									echo'<span class="badge badge-blue" id="cart_count" >'.$woocommerce->cart->cart_contents_count.'</span>';
								}
							echo'</a>
						</li>
					</div>';
		echo '</ul>';	

		
	}	

	function wp_get_menu_array($current_menu) {

		$menu_name = $current_menu;
		$locations = get_nav_menu_locations();
		
		$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
		$array_menu = wp_get_nav_menu_items( $menu->term_id); 
		
		$menu = array();
		foreach ($array_menu as $m) {
			
			if (empty($m->menu_item_parent)) {
				$menu[$m->ID] = array();
				$menu[$m->ID]['ID']      =   $m->ID;
				$menu[$m->ID]['title']       =   $m->title;
				$menu[$m->ID]['url']         =   $m->url;
				$menu[$m->ID]['attr_title']  =   $m->attr_title;
				$menu[$m->ID]['slug']  =   $m->name;
				$menu[$m->ID]['children']    =   array();
			}
		}

		$submenu = array();
		foreach ($array_menu as $m) {
			if ($m->menu_item_parent) {
				
				$submenu[$m->ID] = array();
				$submenu[$m->ID]['ID']       =   $m->ID;
				$submenu[$m->ID]['title']    =   $m->title;
				$submenu[$m->ID]['url']  =   $m->url;
				$submenu[$m->ID]['slug']  =   $m->name;
				$submenu[$m->ID]['attr_title']  =   $m->attr_title;
				$menu[$m->menu_item_parent]['children'][$m->ID] = $submenu[$m->ID];
			}
		}
		return $menu;
	}



function newasc_price_shortcode_callback( $atts ) {
    $atts = shortcode_atts( array(
        'id' => null,
    ), $atts, 'bartag' );

    $html = '';

    if( intval( $atts['id'] ) > 0 && function_exists( 'wc_get_product' ) ){
         $_product = wc_get_product( $atts['id'] );
         $html = number_format($_product->get_price(),2);
    }
    return $html;
}
add_shortcode( 'woocommerce_price', 'newasc_price_shortcode_callback' );

/* Woo Setup */
remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);
//remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
remove_action('woocommerce_single_product_summary', 'woocommerce_output_related_products', 20);
remove_action('woocommerce_single_product_summary', 'woocommerce_upsell_display', 15);
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woo_custom_cart_button_text' );    // 2.1 +
function woo_custom_cart_button_text() {
	return __( 'BOOK NOW', 'woocommerce' );
}
add_filter( 'woocommerce_product_add_to_cart_text', 'woo_archive_custom_cart_button_text' );    // 2.1 +
function woo_archive_custom_cart_button_text() {
	return __( 'More Info / Book Now', 'woocommerce' );
}
/* Change Return to Shop button text */
add_filter( 'gettext', 'change_woocommerce_return_to_shop_text', 20, 3 );
function change_woocommerce_return_to_shop_text( $translated_text, $text, $domain ) {
	switch ( $translated_text ) {
		case 'Return to shop' :
		$translated_text = __( 'Return to Camps & Programs', 'woocommerce' );
		break;
	}
	return $translated_text;
}

    // define the woocommerce_after_cart_totals callback 
    function sm_woo_custom_checkout_button_text(  ) { 
        //echo "here";
		global $woocommerce;
		$cart_message = false;
		$cat_in_online = false;
		$source_url = "";
		$product_name = "";
		foreach ($products as $key => $value) {

		$check_message = get_post_meta($key,'camp_shop_appointment');
			foreach ($check_message as $key => $term) {
				//print_r($term);
				if($term=="shop_product")
				 { 
						
						 $cart_message = true;
				}
			}
		}
		if($term=="shop_product")
		{
			//do nothing it will use the default woocommerece message of cont shopping - 24-04-2020
		}
		elseif($term=="online_coaching")
		{
			foreach( WC()->cart->get_cart() as $cart_item ){

			 if ( $check_camp = get_post_meta( $cart_item['product_id'], 'camp_shop_appointment') ) {
			foreach ($check_camp as $term)
			 {
				if($term=="online_coaching")
				 { 
					
					$product_id = $cart_item['product_id'];
					$product_name = get_the_title($product_id);
					$source_url= $cart_item['_gravity_form_lead']['source_url'];
					 $cat_in_online = true;
				}
			 }
		   }
		 }
			if($cat_in_online)
			{
					$return_to  = $source_url;
					$message= sprintf('<a href="%s" class="btn-orange-large-border" style="outline: none;">%s</a> %s', $return_to, __('Book another child', 'woocommerce'), __('"'.$product_name.'" has been added to your cart.', 'woocommerce'));
			}
		}
		else
		{
			if (strpos($message, 'Continue shopping') !== false) {
				$message = str_replace("Continue shopping", "Book another child", $message);
			  }
		}
		
		echo $message;
		
    } 
             
  

add_action('woocommerce_proceed_to_checkout', 'sm_woo_custom_checkout_button_text',20);

/* Change Continue Shopping button text */
add_filter( 'wc_add_to_cart_message_html', 'wc_add_to_cart_message_html_custom_button_text', 10, 2 );
function wc_add_to_cart_message_html_custom_button_text($message, $products) {
	global $woocommerce;
	$cart_message = false;
	$cat_in_online = false;
	$source_url = "";
	$url = "";
	$product_name = "";
	
	foreach ($products as $key => $value) {
	$product = wc_get_product( $key );
	$product_name = $product->get_title();
	 $url = get_permalink( $key );
	$check_message = get_post_meta($key,'camp_shop_appointment');
		foreach ($check_message as $key => $term) {
			//print_r($term);
			if($term=="shop_product")
             { 
				
        			 $cart_message = true;
        	}
		}
	}
	
	
	
	
	
	if($term=="shop_product")
	{
		//do nothing it will use the default woocommerece message of cont shopping - 24-04-2020
	}
	elseif($term=="online_coaching")
	{
		foreach( WC()->cart->get_cart() as $cart_item ){

		 if ( $check_camp = get_post_meta( $cart_item['product_id'], 'camp_shop_appointment') ) {
    	foreach ($check_camp as $term)
    	 {
            if($term=="online_coaching")
             { 
             	
             	$product_id = $cart_item['product_id'];
             	$product_name = get_the_title($product_id);
             	$source_url= $cart_item['_gravity_form_lead']['source_url'];
        		 $cat_in_online = true;
        	}
         }
       }
     }
     	if($cat_in_online)
     	{
     			$return_to  = $source_url;
          		$message= sprintf('<a href="%s" class="btn-orange-large-border" style="outline: none;">%s</a> %s', $return_to, __('Book another child', 'woocommerce'), __('"'.$product_name.'" has been added to your cart.', 'woocommerce'));
     	}
	}
	else
	{
		if (strpos($message, 'Continue shopping') !== false) {
			//$message = str_replace("Continue shopping", "Book another childa", $message);
			$message= sprintf('<a href="%s" class="btn-orange-large-border" style="float: right;padding: 0px 7px !important;">%s</a> %s', $url, __('Book another child', 'woocommerce'), __('"'.$product_name.'" has been added to your cart.', 'woocommerce'));
	      }
    }
	return $message;
}
/* Change the Sale badge text */
add_filter( 'woocommerce_sale_flash', 'wc_custom_replace_sale_text' );
function wc_custom_replace_sale_text( $html ) {
	return str_replace( __( 'Sale!', 'woocommerce' ), __( 'Early Bird Offer!', 'woocommerce' ), $html );
}

/* Change 'Choose an option' variable text */
add_filter('variable_product_select_text', 'wc_custom_replace_product_select_text' );
function wc_custom_replace_product_select_text( $html ) {
	return str_replace( __( 'Choose an option!', 'woocommerce' ), __( 'Select', 'woocommerce' ), $html );
}

/* Remove products count after categories name */
add_filter( 'woocommerce_subcategory_count_html', 'woo_remove_category_products_count' );
function woo_remove_category_products_count() {
	return;
}
/* Hide Empty Product categories in the Product category Widget */
function woo_hide_product_categories_widget( $list_args ) {
	$list_args[ 'hide_empty' ] = 1;
	return $list_args;
}
add_filter( 'woocommerce_product_categories_widget_args', 'woo_hide_product_categories_widget' );

/* Modify thank you page message */
function woocommerce_thankyou_order_received_text( $translated_text, $text, $domain ) {
	switch ( $translated_text ) {
		case 'Thank you. Your order has been received.' :
		$translated_text = __( 'Thank you, your booking has been received, and you\'ve been sent an email with the program details.', 'woocommerce' );
		break;
	}
	return $translated_text;
}
add_filter( 'gettext', 'woocommerce_thankyou_order_received_text', 20, 3 );

/* Change Out of Stock Text */
add_filter( 'woocommerce_get_availability', 'wcs_custom_get_availability', 1, 2);
function wcs_custom_get_availability( $availability, $_product ) {
 // Change Out of Stock Text
	if ( ! $_product->is_in_stock() ) {
		$availability['availability'] = __('Bookings closed', 'woocommerce');
	}
	return $availability;
}

/* Auto Complete all WooCommerce orders */
add_action( 'woocommerce_thankyou', 'custom_woocommerce_auto_complete_order' );
function custom_woocommerce_auto_complete_order( $order_id ) {
	if ( ! $order_id ) {
		return;
	}
	$order = wc_get_order( $order_id );
	$order->update_status( 'completed' );
}

/* Add Custom Order Field to order emails */
add_filter('woocommerce_email_order_meta_keys', 'my_woocommerce_email_order_meta_keys');

function my_woocommerce_email_order_meta_keys( $keys ) {
	$keys['Booking Notes'] = 'customer_notes';
	return $keys;
}

/* Remove WooCommerce Updater Notice */
remove_action('admin_notices', 'woothemes_updater_notice');
/* Remove WooCommerce "Connect Your Store" Notice */
add_filter( 'woocommerce_helper_suppress_admin_notices', '__return_true' );

/*  Change WooCommerce new order email subject line */
add_filter('woocommerce_email_subject_new_order', 'change_admin_email_subject', 1, 2);
function change_admin_email_subject( $subject, $order ) {
	global $woocommerce;
	$blogname = wp_specialchars_decode(get_option('blogname'), ENT_QUOTES);
	$subject = sprintf( '[%s] New booking (%s) from %s - %s', $blogname, $order->get_id(), $order->get_formatted_billing_full_name(), $order->get_date_created()->format("Y-m-d H:i:s") );
	return $subject;
}

/* WooCommerce Hide Prices on the Shop & Category Pages */
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );

/* Remove WooCommerce Order Again button */
remove_action( 'woocommerce_order_details_after_order_table', 'woocommerce_order_again_button' );

/* WooCommerce 3.0+ Remove product gallery slider and gallery zoom */
add_action( 'after_setup_theme', 'remove_woo_three_support', 11 );
function remove_woo_three_support() {
	remove_theme_support( 'wc-product-gallery-zoom' );
	remove_theme_support( 'wc-product-gallery-slider' );
}

/* WooCommerce 3.0+ Do Not Remove Woocommerce Image Settings */
function x_woocommerce_donot_remove_plugin_setting() {
	if ( ! is_admin() ) {
		return;
	}
	remove_filter( 'woocommerce_product_settings', 'x_woocommerce_remove_plugin_settings', 10 );
}
add_action('init', 'x_woocommerce_donot_remove_plugin_setting');

/**
 * This will remove the filter that makes it so order notes and related fields will always show
 */
remove_action( 'wc_checkout_fields_disable_order_comments', 'wc_checkout_fields_maybe_hide_additional_info_header' );
/**
 * Function will go through submitted checkout fields and look for required checkboxes.
 * It then creates an action related to those checkboxes to pass on to see if they have a set value or not.
 */
function wc_checkout_fields_look_for_checkboxes() {
	$checkout_fields = WC()->checkout->checkout_fields;
	foreach ( $checkout_fields as $fieldset ) {
		foreach ( $fieldset as $key => $field ) {
			if ( isset( $field['type'] ) && 'checkbox' === $field['type'] && ! empty( $field['required'] ) ) {
				add_action( 'woocommerce_process_checkout_field_' . $key, 'wc_checkout_fields_make_checkout_checkboxes_required' );
			}
		}
	}
}
add_action( 'woocommerce_checkout_process', 'wc_checkout_fields_look_for_checkboxes' );
/**
 * Function that will check a checkbox for a true/false value.
 * If 0 (false), it returns empty to trigger the "required" error notice
 */
function wc_checkout_fields_make_checkout_checkboxes_required( $field ) {
	if ( 0 === $field ) {
		return '';
	}
	return $field;
}

/* WooCommerce Custom Product Template for Specific Products */
add_filter( 'template_include', 'custom_template_for_products' );
function custom_template_for_products( $template ) {

	/* check product slug */
	if ( is_single( 'vic-cricket-camp-hawthorn-copy' )  ) {
		$template = locate_template( 'template-custom-product.php' );
	}
	return $template;
}

/**
 * Fix Gravity Form Tabindex Conflicts
 * http://gravitywiz.com/fix-gravity-form-tabindex-conflicts/
 */
add_filter( 'gform_tabindex', 'gform_tabindexer', 10, 2 );
function gform_tabindexer( $tab_index, $form = false ) {
 $starting_index = 1000; // if you need a higher tabindex, update this number
 if ( $form )
 	add_filter( 'gform_tabindex_' . $form['id'], 'gform_tabindexer' );
 return GFCommon::$tab_index >= $starting_index ? GFCommon::$tab_index : $starting_index;
}
/**
 * Add Gravity Form confirmation anchor
 * http://www.gravityhelp.com/documentation/page/Gform_confirmation_anchor
 */
add_filter( 'gform_confirmation_anchor', '__return_true' );

/* Modify Gravity Form 12 address format for CRM */
add_filter("gform_pre_render_12", "monitor_dropdown");
function monitor_dropdown($form) {

	?>
	<script type="text/javascript">
		jQuery(document).ready(function(){


			jQuery('#input_12_37').bind('change', function()
			{
            //get selected value from drop down;
            var selectedValue = jQuery("#input_12_37 :selected").text();
            console.log("testtt--- "+selectedValue);

            //populate a text field with the selected drop down value
            jQuery("#input_12_39").val(selectedValue);
        });
		});
	</script>
	<?php

	return $form;
}

add_filter( 'gform_address_types_12', 'australian_address_type' );
function australian_address_type( $address_types ) {
	$address_types['australia'] = array(
		'label'       => 'Australian',
		'zip_label'   => 'Postcode',
		'state_label' => 'State',
		'states'      => array(
			'ACT' => 'Australian Capital Territory',
			'NT'  => 'Northern Territory',
			'NSW' => 'New South Wales',
			'QLD' => 'Queensland',
			'SA'  => 'South Australia',
			'TAS' => 'Tasmania',
			'VIC' => 'Victoria',
			'WA'  => 'Western Australia',
		)
	);

	return $address_types;
}

/* Disable the WordPress SEO sitemap transient caching */
add_filter('wpseo_enable_xml_sitemap_transient_caching', '__return_false');

/* LH HSTS plugin filters */
add_filter('lh_hsts_max_age', 'modify_ls_hsts_max_age_func');
function modify_ls_hsts_max_age_func( $max_age ) {
	return 31536000;
}
/* ZOHO CRM code for Google AdWords */
add_filter( 'gform_field_input_5_14', 'tracker', 10, 5 );
function tracker( $input, $field, $value, $lead_id, $form_id ) {
	if ( $form_id == 5 && $field->id == 14 ) {
		$input = '<input type="hidden" id="zc_gad" name="zc_gad" value="">';
	}
	return $input;
}
add_filter( 'gform_field_input_14_11', 'tracker_form_14', 10, 5 );
function tracker_form_14( $input, $field, $value, $lead_id, $form_id ) {
	if ( $form_id == 14 && $field->id == 11 ) {
		$input = '<input type="hidden" id="zc_gad" name="zc_gad" value="">';
	}
	return $input;
}
function add_google_adword_script() {
	wp_enqueue_script( 'zcga', 'https://crm.zoho.com/crm/javascript/zcga.js', array(), '', true );
}
add_action( 'wp_enqueue_scripts', 'add_google_adword_script' );


/* Remove Emoji Styles & Scripts */
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
/* Remove comment-reply.min.js from footer */
function asc_disable_comment_js() {
	wp_deregister_script( 'comment-reply' );
}
add_action( 'init', 'asc_disable_comment_js' );

/* Change Gravity Forms validation messages */
add_filter( 'gform_validation_message_22', 'change_message_22', 10, 2 );
function change_message_22( $message, $form ) {
	return "<div class='validation_error'>Please select a City or Sport" . '</div>';
}
add_filter( 'gform_validation_message_23', 'change_message_23', 10, 2 );
function change_message_23( $message, $form ) {
	return "<div class='validation_error'>Please select a City or Sport" . '</div>';
}
add_filter( 'gform_validation_message_24', 'change_message_24', 10, 2 );
function change_message_24( $message, $form ) {
	return "<div class='validation_error'>Please select a City or Sport" . '</div>';
}

function custom_get_gravity_form_download_brochure($atts)
{
	$objProduct = wc_get_product();
	if(is_object($objProduct))
	{
		$return_content="";

		$product_id = $objProduct->get_id();
    // $objProduct=new WC_Product($product_id);
		$product_name=$objProduct->get_name();
		$return_content.='<small style="font-size:15px;">Camp Name : '.$product_name;
		$return_content.="<br/>Detailed camp information and peace of mind for parents</small>.";
		$return_content.=do_shortcode('[gravityform id=32 title=false description=false ajax=true field_values="product_id='.$product_id.'"]');

		return $return_content;
	}
	else
	{

	}
}
add_shortcode( 'custom_get_gravity_form_download_brochure', 'custom_get_gravity_form_download_brochure' );

// ***************** Apply coupon code from URL functionality *****************
// Get coupon from URL and store in session
add_action('init', 'get_custom_coupon_code_to_session');
function get_custom_coupon_code_to_session(){
	if( isset($_COOKIE['code']) ){
		
		if (is_admin()){
			return;
		}
        // Ensure that customer session is started
		if( !WC()->session->has_session() )
			WC()->session->set_customer_session_cookie(true);

        // Check and register coupon code in a custom session variable
		$coupon_code = WC()->session->get('coupon-code');
		$coupon_code = esc_attr( $_COOKIE['code'] );
        WC()->session->set( 'coupon-code', $coupon_code ); // Set the coupon code in session
    }
}

// Get coupon code from session and apply in cart and checkout page
add_action( 'woocommerce_before_cart', 'add_discout_to_checkout', 10, 0 );
add_action( 'woocommerce_before_checkout_form', 'add_discout_to_checkout', 10, 0 );
function add_discout_to_checkout( ) {
    // Set coupon code
	
	$coupon_code = WC()->session->get('coupon-code');
	if ( ! empty( $coupon_code ) && ! WC()->cart->has_discount( $coupon_code ) ){
        WC()->cart->add_discount( $coupon_code ); // apply the coupon discount
        WC()->session->__unset('coupon-code'); // remove coupon code from session
		
		unset( $_COOKIE['code'] );
	?>
	<script>
		function expireAllCookies(name, paths) {
			var expires = new Date(0).toUTCString();

			// expire null-path cookies as well
			document.cookie = name + '=; expires=' + expires;

			for (var i = 0, l = paths.length; i < l; i++) {
				document.cookie = name + '=; path=' + paths[i] + '; expires=' + expires;
			}
		}

		expireAllCookies('code', ['/']);
	</script>
	<?php
    }
	
}

// Add sports/state to gravity forms
add_filter( 'gform_pre_render', 'add_sports_to_product_form',10,3 );
function add_sports_to_product_form($form ,$ajax ,$field_values ){
	if($form['id']==4 || $form['id']==26){
		$objProduct = wc_get_product();
		if(is_object($objProduct))
		{
			$prodctId=$objProduct->get_id();
			$campBasePrice=$objProduct->get_price();
			$isProductOnSale=$objProduct->is_on_sale();
      // Get Sports or partner program status   
			$categories=get_the_terms( $prodctId, 'product_cat' );
			$isPartnerProgarm=false;
			$sports="";
			foreach ($categories as $key => $value) {
				if($value->name=="Partner Programs")
				{
					$isPartnerProgarm=true;
				}
				else if($value->name=="Uncategorized" || $value->name=="Uncategorised" || $value->name=="Membership")
				{
          // Do nothing
				}
				else
				{
					$sports=$value->name;
				}
			}

      // Get Sports 
			$state="";
			$tags=get_the_terms( $prodctId, 'product_tag' );
			if(count($tags)!=0)
			{
				$state=$tags[0]->name;
			}

     	// If not a partner program than add memberhsip pass price
			$membProductPrice=0;
			$membPerCampPrice=0;
			$membSavePrice=0;
			if(!$isPartnerProgarm)
			{
				$membProductId=wc_get_product_id_by_sku("memb-7");
				if($membProductId)
				{
					$objMembProduct=new WC_Product($membProductId);
					$membProductPrice=$objMembProduct->get_price();
					if($membProductPrice){
						$membPerCampPrice=$membProductPrice/7;
						$membSavePrice=$campBasePrice-$membPerCampPrice;
					}
				}
			}
      // Loop on fields and set sports
			$fields = $form['fields'];
			foreach( $form['fields'] as &$field ) {
				if($field->inputName=='product_sports')
				{
					$field->defaultValue=$sports;
				}
				else if($field->inputName=='product_state')
				{
					$field->defaultValue=$state;
				}
				else if($field->inputName=='is_partner_program')
				{
					$field->defaultValue=$isPartnerProgarm;
				}
				else if($field->inputName=='save_more_price')
				{
					$field->cssClass.=" save_more_price";
					$field->defaultValue=$membSavePrice;
				}
				else if($field->inputName=='product_on_sale')
				{
					$field->cssClass.=" product_on_sale";
					$field->defaultValue=$isProductOnSale;
				}
			}
		}
	}
	return $form;
}

// ************* Lead magnet button shortcode ***************
function custom_get_popup_button_for_pdf_guildeline($atts)
{
	$buttonText="";
	if(isset($atts['text']))
	{
		$buttonText=$atts['text'];
		if($buttonText==""){
			$buttonText="Download";
		}
	}

	$imageSrc="";
	if(isset($atts['src']))
	{
		$imageSrc=$atts['src'];
	}

	$tag="";
	if(isset($atts['tag']))
	{
		$tag=$atts['tag'];
		if($tag==""){
			$tag="button";
		}
	}

	$classes="";
	if(isset($atts['classes']))
	{
		$classes=$atts['classes'];
	}

	$blHasFile=false;
	$queried_object = get_queried_object();
	if ( $queried_object ) {
		$post_id = $queried_object->ID;
		$objPost=get_post($post_id);

		$postType=$objPost->post_type;
		if($postType=="post"){
			$emailTemplateId=get_post_meta($post_id,'article_email_template',true);
			if($emailTemplateId!=""){
				$blHasEmailTemplate=true;
			}
		}
	}

    // If email template exists than add trigger button
	$html="";
	if($blHasEmailTemplate){
		if($env_variable=="staging"){
			$trigger_id="121523";
		}
		else{
			$trigger_id="126102";
		}
		if($tag=="button"){
			$html.=do_shortcode('[popup_trigger id="'.$trigger_id.'" tag="button" classes="'.$classes.'"]'.$buttonText.'[/popup_trigger]');
		}
		else if($tag=="img"){
			$html.=do_shortcode('[popup_trigger id="'.$trigger_id.'" tag="div"]<img src="'.$imageSrc.'" class="'.$classes.'">[/popup_trigger]');
		}
	}
	else{
	}
	return $html;
}
add_shortcode( 'custom_get_popup_button_for_pdf_guildeline', 'custom_get_popup_button_for_pdf_guildeline' );

// ********** Lead magnet form ***************
function custom_get_gravity_form_download_guideline($atts)
{
	$queried_object = get_queried_object();
	if ( $queried_object ) {
		$post_id = $queried_object->ID;
		$objPost=get_post($post_id);

		$postType=$objPost->post_type;

		if($postType=="post"){
			$return_content="";
			$return_content.=do_shortcode('[gravityform id=32 title=false description=false ajax=true field_values="article_id='.$post_id.'"]');

			return $return_content;
		}
	}
}
add_shortcode( 'custom_get_gravity_form_download_guideline', 'custom_get_gravity_form_download_guideline' );

/* Custom Post Type Email Templates */
function create_posttype_custom_email_template() {
	register_post_type( 'email_templates',array(
		'labels' => array(
			'name' => __( 'Email Templates' ),
			'singular_name' => __( 'Email Template' )
		),
		'supports' => array( 'title', 'editor', 'custom-fields' ),
    'public' => false,  // it's not public, it shouldn't have it's own permalink, and so on
    'publicly_queryable' => true,  // you should be able to query it
    'show_ui' => true,  // you should be able to edit it in wp-admin
    'exclude_from_search' => true,  // you should exclude it from search results
    'show_in_nav_menus' => false,  // you shouldn't be able to add it to menus
    'has_archive' => false,  // it shouldn't have archive page
    'rewrite' => false,  // it shouldn't have rewrite rules
));
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype_custom_email_template' );


add_action( 'woocommerce_after_shop_loop', 'custom_add_seo_keywords_for_shop_page', 15 );
function custom_add_seo_keywords_for_shop_page() {
	echo '<div style="clear:both"></div><div style="clear:both;text-align:left;"><h2>ABOUT AUSTRALIAN SPORTS CAMPS</h2><p>'.nl2br('ASC has been running holiday sports camps for kids aged 6-16 for over 35 years. We offer structured skill-improvement camps in Australia, ensuring that participants have fun in the school holidays, whilst developing a deeper love and enthusiasm for their chosen sport.

		We have school holiday programs, for a wide variety of sports camps in Australia throughout the Summer, Autumn, Winter and Spring school holiday breaks. Our kid\'s camps are suited to players of all abilities and we ensure everyone has fun in their school holiday activities. Also, ASC ensures your children receive quality coaching at top sporting facilities, plus have the chance to meet and be inspired by elite sports people, past and present.').'</p></div>';
}

// Add custom product filter for camp venue from meta
add_filter( 'woocommerce_product_query_meta_query', 'show_only_products_with_specific_venue', 10, 2 );
function show_only_products_with_specific_venue( $meta_query, &$query ) {

    // Only on shop pages
	if( ! is_shop() ) return $meta_query;

	global $wpdb;
    // Only if ven key exists in URL
	if(isset($_GET['ven']))
	{
		$venue=trim($_GET['ven']);
		$venue=stripslashes($venue);
		$meta_query[] = array(
			'key'     => 'camp_venue',
			'compare' => '=',
			'value'=>$venue
		);

	}
	return $meta_query;
}


// Add custom filter for searching with product title
add_action('pre_get_posts','alter_query');
function alter_query(&$query){

	if(is_shop())
	{
		if($query->query_vars['post_type']=='product')
		{
      // Only if sname key exists in URL
			if(isset($_GET['sname']))
			{
				$sname=trim($_GET['sname']);
				$query->query_vars['s']=$sname;
			}
		}
	}
}
//Checkout Page ajax For Checking the Unique Email and Phone From Crm
add_action('wp_footer', 'billing_country_update_checkout', 50);
function billing_country_update_checkout() {
	if ( ! is_checkout() ) return;
	?>
	<script type="text/javascript">
		jQuery(function($){

			var headerArray = [];

			var coupoun = "";
			$('.cart-discount').children().each(function(){

				headerArray.push($(this).text());
			});
			if (headerArray.length > 1)
			{ 
				var string =headerArray[0].toString();
          //console.log(string);
          var stringsplit = string.split(":");
          //console.log(stringsplit);
          var trimStr = $.trim(stringsplit[1]);
          coupoun = trimStr;

          //console.log(coupoun);
      }
      else
      {
      	coupoun="";
      }


      $('#billing_address_1').on( 'focusout', function (){

      	$('.cart-discount').children().each(function(){

      		headerArray.push($(this).text());
      	});
      	if (headerArray.length > 1)
      	{ 
      		var string =headerArray[0].toString();
          //console.log(string);
          var stringsplit = string.split(":");
          //console.log(stringsplit);
          var trimStr = $.trim(stringsplit[1]);
          coupoun = trimStr;

          //console.log(coupoun);
      }
      else
      {
      	coupoun="";
      }
      if(coupoun!=""){
      	var coupouncode = coupoun;
      }
      else
      {
      	var coupouncode = jQuery('#coupon_code').val();
      }
      var email = jQuery('#billing_email').val();
          //alert(email);
          var mobile = jQuery('#billing_mobile').val();
          //alert(mobile);
          var add = jQuery(this).val();
          //alert(add);
          var ajax_url = window.location.origin+"/wp-content/mu-plugins/check_unique_parent_offer.php?nocache="+Math.random();"";
          if(coupouncode!="" && email!="" && mobile!="")
          {
            //alert(coupouncode);
            if(coupouncode=="NEW" || coupouncode=="new")
            {
             // alert(coupouncode);
             $.ajax({
             	type: 'POST',
             	url: ajax_url,
             	data: {coupouncode: coupouncode,email: email,mobile: mobile,add: add},
             	success: function(data) {
                //$('#author-bio').html(data); 
                if(jQuery.trim(data) == 'Remove_Copoun'){
                    //console.log(data);
                    $(".woocommerce-remove-coupon").trigger("click");
                    alert('The coupon NEW is removed as the email/mobile already exists. The offer is valid for new users only.');
                    coupouncode = "";
                    coupoun = "";
                    headerArray = []
                }      

            }   
        }); 
         }    
     }
    //return false;
});
      $('#order_agreement').click(function (){
      	if(this.checked){

      		if(coupoun!=""){
      			var coupouncode = coupoun;
      		}
      		else
      		{
      			var coupouncode = jQuery('#coupon_code').val();
      		}
      		var email = jQuery('#billing_email').val();
          //alert(email);
          var mobile = jQuery('#billing_mobile').val();
          //alert(mobile);
          var add = jQuery(this).val();
          //alert(add);
          var ajax_url = window.location.origin+"/wp-content/mu-plugins/check_unique_parent_offer.php?nocache="+Math.random();"";
          if(coupouncode!="" && email!="" && mobile!="")
          {
          	if(coupouncode=="NEW" || coupouncode=="new")
          	{
              //alert(coupouncode);
              $.ajax({
              	type: 'POST',
              	url: ajax_url,
              	data: {coupouncode: coupouncode,email: email,mobile: mobile,add: add},
              	success: function(data) {
                //$('#author-bio').html(data); 
                if(jQuery.trim(data) == 'Remove_Copoun'){
                    //console.log(data);
                    $(".woocommerce-remove-coupon").trigger("click");
                    alert('The coupon NEW is removed as the email/mobile already exists. The offer is valid for new users only.');
                    coupouncode = "";
                    coupoun = "";
                    headerArray = []
                }      

            }   
        });
          }     
      }
  }
    //return false;
});

  });
</script>
<?php
}

//for custom post resource 
  function create_posttype_resource() {
	register_post_type( 'resource',
	  array(
		'labels' => array(
		  'name' => __( 'Resource' ),
		  'singular_name' => __( 'Resource' )
		),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'resource'),
		'hierarchical'   => true,
	  )
	);
  }
  add_action( 'init', 'create_posttype_resource' );
  
  
function is_product_the_same_cat($valid, $product_id, $quantity) {
    global $woocommerce;
    if($woocommerce->cart->cart_contents_count == 0){
         return true;
    }
	
	
    foreach ( $woocommerce->cart->get_cart() as $cart_item_key => $values ) {
        $_product = $values['data'];
		
		
		
        $terms = get_post_meta( $_product->id, 'camp_shop_appointment' );
		
		
		
        $target_terms = get_post_meta( $product_id, 'camp_shop_appointment' );
        foreach ($terms as $term) {
             $cat_ids[] = $term; 
        }
        foreach ($target_terms as $term) {
            $target_cat_ids[] = $term; 
        }           
    }
	
	
	
    $same_cat = array_intersect($cat_ids, $target_cat_ids);
    if(count($same_cat) > 0)
    { 
    	
    	return $valid;
    }
    else 
    {
        wc_add_notice( 'Please purchase shop products separately to camps', 'error' );
        return false;
    }
}


add_filter( 'woocommerce_add_to_cart_validation', 'is_product_the_same_cat',10,3);

?>
<?php
add_action('woocommerce_before_cart', 'check_category_in_cart');
 
function check_category_in_cart() {
 
// Set $cat_in_cart to false
$cat_in_cart = false;
$cat_in_camp = false;
$cat_in_online = false;
 
// Loop through all products in the Cart        
foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
 
    // If Cart has category "download", set $cat_in_cart to true
    if ( $check_shop = get_post_meta( $cart_item['product_id'], 'camp_shop_appointment') ) {
    	foreach ($check_shop as $term)
    	 {
            if($term=="shop_product")
             { 
             	
        	 $cat_in_cart = true;
        	}
        }
    }

    if ( $check_camp = get_post_meta($cart_item['product_id'],'camp_shop_appointment' ) ) {
    	foreach ($check_camp as $term)
    	{
    		if($term=="camp")
    		{
        		$cat_in_camp = true;
        	}
         }
    }
      if ( $check_camp = get_post_meta($cart_item['product_id'],'camp_shop_appointment' ) ) {
    	foreach ($check_camp as $term)
    	{
    		if($term=="online_coaching")
    		{
        		$cat_in_online = true;
        	}
         }
    }
}
   
// Do something if category "download" is in the Cart      
if ( $cat_in_cart ) 
  {
 
// For example, print a notice
 remove_action( 'woocommerce_proceed_to_checkout','woocommerce_button_proceed_to_checkout', 20);

 	if(!$cat_in_camp)
 	{

 add_action( 'woocommerce_proceed_to_checkout', 'insert_empty_cart_button' );

 function insert_empty_cart_button() {
	 global $woocommerce;
    foreach( WC()->cart->get_cart() as $cart_item ){
		$url = get_permalink( $cart_item['product_id'] );
	}	
	$url =  str_replace("https://shop.australiansportscamps.com.au/book/","https://develop.australiansportscamps.com.au/product/",$url);
?>
<div class="text-center mb-20">
<a class="btn-orange-large-border btn-block"  href="<?php echo $url; ?>">
    <?php esc_html_e( 'Continue shopping', 'woocommerce' ); ?>
</a>
</div>
<div class="text-center mb-20">
<a href="<?php echo esc_url( wc_get_checkout_url() );?>" class="btn btn-orange-large btn-block">
	<?php esc_html_e( 'Proceed to checkout', 'woocommerce' ); ?>
</a>
</div>
<?php
 		}
  
	}
  }
} //end of main functions

add_action( 'woocommerce_checkout_create_order', 'before_checkout_create_order',20,2);

function before_checkout_create_order( $order, $data ){
	//print_r($order_id);

	$cat_in_cart = false;
	$cat_in_online = false;
	$cat_in_private = false;

	foreach( WC()->cart->get_cart() as $cart_item ){

		 if ( $check_shop = get_post_meta( $cart_item['product_id'], 'camp_shop_appointment') ) {
    	foreach ($check_shop as $term)
    	 {
    	 	

            if($term=="shop_product")
            { 
             	
        			 $cat_in_cart = true;
        	}
        	if($term=="online_coaching")
        	{
        		    $cat_in_online = true;
        	}
			if($term=="private_coaching")
        	{
        		    $cat_in_private = true;
        	}
        }
      }
   }
    if($cat_in_cart)
    {
    	 $order->update_meta_data( '_shop_product', 'product' );
    }
    if($cat_in_online)
    {
    	$order->update_meta_data( '_shop_product', 'online_coaching' );
    }
	if($cat_in_private)
    {
    	$order->update_meta_data( '_shop_product', 'private_coaching' );
    }
}

add_action('woocommerce_before_cart', 'sample', 10);

function sample() {
    echo '<p>Purchase shop products separately to camps</p>';
}
add_filter('woocommerce_order_button_html', 'disable_place_order_button_html' );
function disable_place_order_button_html( $button ) {
    // HERE define your targeted shipping method id
    $targeted_shipping_method = "free_shipping:5";
    $cat_in_cart = false;

	foreach( WC()->cart->get_cart() as $cart_item ){

		 if ( $check_shop = get_post_meta( $cart_item['product_id'], 'camp_shop_appointment') ) {
    	foreach ($check_shop as $term)
    	 {
    	 	

            if($term=="shop_product")
             { 
             	
        			 $cat_in_cart = true;
        	}
        }
      }
   }

   	if($cat_in_cart)
   	{
	    // Get the chosen shipping method (if it exist)
	    if( $chosen_shipping_methods = WC()->session->get( 'chosen_shipping_methods' ) ){
	        foreach ( $chosen_shipping_methods as $chosen_shipping_method ) {
	            // If the targeted shipping method is selected, we disable the button
	            if( $targeted_shipping_method != $chosen_shipping_method ) {
	                $style = 'style="background:Silver !important; color:white !important; cursor: not-allowed !important; text-align:center;"';
	                $button_text = apply_filters( 'woocommerce_order_button_text', __( 'Place order', 'woocommerce' ) );
	                $button = '<a class="button" '.$style.'>' . $button_text . '</a>';
	                break;
	            }
	        }
	    }
	 }
    return $button;
}

add_action('admin_head', 'my_column_width');

function my_column_width() {
    echo '<style type="text/css">';
    echo 'table.wp-list-table .column-productchannel {
    width: 10ch;
}';
    echo '</style>';
}


 





//new column product table
add_filter( 'manage_edit-product_columns', 'custom_product_column',11);
function custom_product_column($columns)
{
    $new_columns = array();
    foreach( $columns as $key => $column ){
        $new_columns[$key] =  $columns[$key];
        if( $key === 'price' )
            $new_columns['productchannel'] = __( 'Product Channel','woocommerce');
    }
    return $new_columns;
}

// Populate column
add_action( 'manage_product_posts_custom_column', 'woo_product_weight_column_data', 2 );
function woo_product_weight_column_data( $column ) {
    global $post;

    if ( $column == 'productchannel' ) {
		$terms = get_post_meta( $post->ID, 'camp_shop_appointment' );
		$text = "";
		$i = 0;
		foreach($terms as $t){
			if($i  == 0){ $apnd = ""; }else{ $apnd = ","; }
			if($t == 'private_coaching'){
				$text .= $apnd."Private Coaching";
			}
			else if($t == 'online_coaching'){
				$text .= $apnd."Online Coaching";
			}
			else if($t == 'shop_product'){
				$text .= $apnd."Shop Product";
			}
			else{
				$text .= $apnd."Camp";
			}
			$i++;
		}
		if($text == ""){
			$return = "-";
		}
		else{
			$return = $text;
		}
		echo $return;
    }
}

add_action( 'woocommerce_review_order_before_submit', 'bbloomer_add_checkout_privacy_policy', 9 );
    
function bbloomer_add_checkout_privacy_policy() {
   
woocommerce_form_field( 'order_agreement', array(
   'type'          => 'checkbox',
   'class'         => array('form-row privacy'),
   'label_class'   => array('woocommerce-form__label woocommerce-form__label-for-checkbox checkbox'),
   'input_class'   => array('woocommerce-form__input woocommerce-form__input-checkbox input-checkbox'),
   'required'      => true,
   'label'         => 'I\'ve read and accept the <a href="/terms-conditions/" target="_blank">Terms & Conditions</a>',
)); 
}

// Show notice if customer does not tick
    
add_action( 'woocommerce_checkout_process', 'bbloomer_not_approved_privacy' );
   
function bbloomer_not_approved_privacy() {
    if ( ! (int) isset( $_POST['order_agreement'] ) ) {
        wc_add_notice( __( 'Please acknowledge the Privacy Policy' ), 'error' );
    }
}

function single_product_button_for_shop_product( $button_text, $product ) {
    
    if ( 'simple' === $product->get_type() ) {
        // enter the default text for external products
		
		$html = " $".number_format($product->get_price(),2);
		
        return $product->button_text ? strtoupper($product->button_text).$html : 'Buy Now';
    }

    return $button_text;
}
add_filter( 'woocommerce_product_single_add_to_cart_text', 'single_product_button_for_shop_product', 10, 2 );


add_filter( 'woocommerce_thankyou_order_received_text', 'shop_thank_you_title', 20, 2 );
 
function shop_thank_you_title( $thank_you_title, $order ){

	$order_id = wc_get_order_id_by_order_key( $_GET['key'] );
	$order = wc_get_order( $order_id );
	$order_check = get_post_meta($order_id,'_shop_product',true);

 	if($order_check=="product")
 	{
	     return 'Thanks for purchasing our AFL Footy Pack. Please check your email for order details';
 	}
 	else
 	{
 		return 'Thank you, your booking has been received, and you\'ve been sent an email with the program details.';
 	}
}

/*  Add GTM4 script in the <head> */
add_action('wp_head', 'insert_gtm4wp_script');
function insert_gtm4wp_script(){
?>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PRK5WQ');</script>
<!-- End Google Tag Manager -->
<?php
};


add_action('wp_footer', 'custom_cart_item_count_script');
function custom_cart_item_count_script(){
    if( WC()->cart->is_empty() )
        $cart_count = 0;
    else
        $cart_count = WC()->cart->get_cart_contents_count();


	?>
	<script type="text/javascript">
			/*! js-cookie v3.0.0-rc.1 | MIT */
			!function(e,t){"object"==typeof exports&&"undefined"!=typeof module?module.exports=t():"function"==typeof define&&define.amd?define(t):(e=e||self,function(){var n=e.Cookies,r=e.Cookies=t();r.noConflict=function(){return e.Cookies=n,r}}())}(this,function(){"use strict";function e(e){for(var t=1;t<arguments.length;t++){var n=arguments[t];for(var r in n)e[r]=n[r]}return e}var t={read:function(e){return e.replace(/(%[\dA-F]{2})+/gi,decodeURIComponent)},write:function(e){return encodeURIComponent(e).replace(/%(2[346BF]|3[AC-F]|40|5[BDE]|60|7[BCD])/g,decodeURIComponent)}};return function n(r,o){function i(t,n,i){if("undefined"!=typeof document){"number"==typeof(i=e({},o,i)).expires&&(i.expires=new Date(Date.now()+864e5*i.expires)),i.expires&&(i.expires=i.expires.toUTCString()),t=encodeURIComponent(t).replace(/%(2[346B]|5E|60|7C)/g,decodeURIComponent).replace(/[()]/g,escape),n=r.write(n,t);var c="";for(var u in i)i[u]&&(c+="; "+u,!0!==i[u]&&(c+="="+i[u].split(";")[0]));return document.cookie=t+"="+n+c}}return Object.create({set:i,get:function(e){if("undefined"!=typeof document&&(!arguments.length||e)){for(var n=document.cookie?document.cookie.split("; "):[],o={},i=0;i<n.length;i++){var c=n[i].split("="),u=c.slice(1).join("=");'"'===u[0]&&(u=u.slice(1,-1));try{var f=t.read(c[0]);if(o[f]=r.read(u,f),e===f)break}catch(e){}}return e?o[e]:o}},remove:function(t,n){i(t,"",e({},n,{expires:-1}))},withAttributes:function(t){return n(this.converter,e({},this.attributes,t))},withConverter:function(t){return n(e({},this.converter,t),this.attributes)}},{attributes:{value:Object.freeze(o)},converter:{value:Object.freeze(r)}})}(t,{path:"/"})});
	</script>		
	<?php


    if(isset($cart_count)){
    ?>
        <script type="text/javascript">
            jQuery(function($){
                var cartCount = <?php echo $cart_count; ?>,
                    csName = 'CART';
                   
					Cookies.set(csName, cartCount, { domain: '.australiansportscamps.com.au'})
                
            });
        </script>
    <?php
    }
	
	/*user loggedin*/
	global $current_user; wp_get_current_user();
	if ( is_user_logged_in() ) {
		$logged_in = 1;
		$user = $current_user->user_login;
		$l_url =  base64_encode(wp_logout_url( get_permalink( wc_get_page_id( 'myaccount' ) ) ));
	}
	else{
		$logged_in = 0;
		$user = '';
		$l_url =  '';
	}
	
	?>
        <script type="text/javascript">
			
            jQuery(function($){
				
                var login = <?php echo $logged_in; ?>;
                var user = "<?php echo $user; ?>";
                var l_url = "<?php echo $l_url; ?>";
                   
					Cookies.set('LOGIN', login, { domain: '.australiansportscamps.com.au'})
					Cookies.set('USER', user, { domain: '.australiansportscamps.com.au'})
					Cookies.set('L_URL', l_url, { domain: '.australiansportscamps.com.au'})
                
            });
        </script>
    <?php
	
	
	
}


function custom_columns( $columns ) {
    $columns = array(
        'cb' => '<input type="checkbox" />',
        'featured_image' => 'Image',
        'title' => 'Title',
        'comments' => '<span class="vers"><div title="Comments" class="comment-grey-bubble"></div></span>',
        'date' => 'Date'
     );
    return $columns;
}
add_filter('manage_posts_columns' , 'custom_columns');

function custom_columns_data( $column, $post_id ) {
    switch ( $column ) {
    case 'featured_image':
        the_post_thumbnail( 'thumbnail' );
        break;
    }
}
add_action( 'manage_posts_custom_column' , 'custom_columns_data', 10, 2 ); 



add_shortcode( 'wc_reg_form_bbloomer', 'bbloomer_separate_registration_form' );
    
function bbloomer_separate_registration_form() {
   if ( is_admin() ) return;
   if ( is_user_logged_in() ){
	echo "<script type='text/javascript'>
        window.location='https://shop.australiansportscamps.com.au/my-account/';
        </script>";
	   };
   ob_start();
 
   // NOTE: THE FOLLOWING <FORM></FORM> IS COPIED FROM woocommerce\templates\myaccount\form-login.php
   // IF WOOCOMMERCE RELEASES AN UPDATE TO THAT TEMPLATE, YOU MUST CHANGE THIS ACCORDINGLY
 
   do_action( 'woocommerce_before_customer_login_form' );
 
   ?>
	<section class="Login-section loginsec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-9 col-md-10 col-sm-12">
                    <div class="gray-data">
                        <div class="title">
                            <h2 class="mb-2">New customer</h2>
                        </div>
                        <form method="post" class="woocommerce-form woocommerce-form-register register" <?php do_action( 'woocommerce_register_form_tag' ); ?> >
 
						<?php do_action( 'woocommerce_register_form_start' ); ?>
						
						<?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>
							<div class="form-group mb-30">
                                <label class="master-label"><?php esc_html_e( 'Username', 'woocommerce' ); ?> <span class="required">*</span></label>
                                <input type="text" class="mb-1 master form-control" name="username" id="reg_username" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>"
                                    placeholder="Enter your Username"><?php // @codingStandardsIgnoreLine ?>
                            </div>
						<?php endif; ?>
						<div class="form-group mb-30">
                                <label class="master-label"><?php esc_html_e( 'Email address', 'woocommerce' ); ?> <span class="required">*</span></label>
                                <input type="email" class="mb-1 master form-control" name="email" id="reg_email" autocomplete="email" value="<?php echo ( ! empty( $_POST['email'] ) ) ? esc_attr( wp_unslash( $_POST['email'] ) ) : ''; ?>"
                                    placeholder="Enter your email address"><?php // @codingStandardsIgnoreLine ?>
                        </div>
						<?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>
						<div class="form-group mb-30">
                                <label class="master-label"><?php esc_html_e( 'Password', 'woocommerce' ); ?> <span class="required">*</span></label>
                                <input type="password" class="mb-1 master form-control" name="password" id="reg_password2" autocomplete="off" 
                                    autocomplete="new-password"  placeholder="Enter your password"><?php // @codingStandardsIgnoreLine ?>
                        </div>
						
						<span id="password-strength"></span>
						<?php else : ?>
							<p><?php esc_html_e( 'A password will be sent to your email address.', 'woocommerce' ); ?></p>
 
						<?php endif; ?>
						
						<?php do_action( 'woocommerce_register_form' ); ?>
 
							 <p class="woocommerce-FormRow form-row">
								<?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
								<button type="submit" class="btn btn-orange-large d-block w-100 btn-reg woocommerce-form-register__submit" name="register" value="<?php esc_attr_e( 'Register', 'woocommerce' ); ?>"><?php esc_html_e( 'Register', 'woocommerce' ); ?></button>
							 </p>
							<div class="text-center">
                                <span class="d-flex d-small-block text-center justify-content-center font-18 color-70 font-medium">
                                    Already have an account? <a href="/my-account" class="nav-link p-0 ml-2 color-3b font-medium">Returning customer</a> 
                                </span>
                            </div>
						<?php do_action( 'woocommerce_register_form_end' ); ?>
						
                            
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
 
   <?php
	wp_enqueue_script( 'password-strength-meter' );
     
   return ob_get_clean();
}

add_shortcode( 'wc_login_form_bbloomer', 'bbloomer_separate_login_form' );
  
function bbloomer_separate_login_form() {
   if ( is_admin() ) return;
   if ( is_user_logged_in() ) return; 
   ob_start();
   woocommerce_login_form();
   return ob_get_clean();
}

function func_print_wc_errors($atts) {
     
       
    return wc_print_notices();
}
add_shortcode("custom_print_errors", "func_print_wc_errors");


add_filter( 'woocommerce_registration_error_email_exists', function( $html ) {
    $url =  wc_get_page_permalink( 'myaccount' );
    $url = add_query_arg( 'redirect_checkout', 1, $url );
    $html = str_replace( 'An account is already registered with your email address. Please log in', '<a href="'.$url.'"><strong>YOUR CUSTOM TEXT</strong></a>', $html );
    return $html;
} );



add_filter("wc_stripe_elements_styling", "snippetpress_style_stripe_1");
function snippetpress_style_stripe_1($styles) {
    $styles = array(
        "base" => array( 
            
            "fontSize" => "19px",
            "padding" => "20px",
           
        ),
    );
    return $styles;
}

function ss_cart_updated( $cart_item_key, $cart ) {
	//global $woocommerce;
	//if($woocommerce->cart->cart_contents_count > 0){
		//$cnt = $woocommerce->cart->cart_contents_count;
	//}
	//else{
		$cnt = 0;
	//}
	
	?>
	<script>
		jQuery(document).ready(function($) {
            alert('Item removed');
            console.log('Item removed');
			document.getElementById("cart_count").innerHTML = "whatever";
        });
		
	</script>
	<?php
	

}
add_action( 'woocommerce_cart_item_removed', 'ss_cart_updated', 10, 2 );

add_filter( 'woocommerce_cart_item_quantity', 'wc_cart_item_quantity', 10, 3 );

function wc_cart_item_quantity( $product_quantity, $cart_item_key, $cart_item ){
	if( is_cart() ){
		$product_quantity = sprintf( '%2$s <input type="hidden" name="cart[%1$s][qty]" value="%2$s" />', $cart_item_key, $cart_item['quantity'] );
	}
	return $product_quantity;
}

// add custom validation to the gravity forms plugin to validate "phone number" field
add_filter("gform_field_validation_42_7", "custom_validation", 10, 4);

function custom_validation($result, $value, $form, $field){

    if(!preg_match('~^\d{8,14}+$~', $value)){
        $result["is_valid"] = false;
        $result["message"] = "Please enter a valid telephone number";
    }

    return $result;
}

add_filter("gform_field_validation_5_3", "custom_validation_2", 10, 4);

function custom_validation_2($result, $value, $form, $field){

    if(!preg_match('~^\d{8,14}+$~', $value)){
        $result["is_valid"] = false;
        $result["message"] = "Please enter a valid telephone number";
    }

    return $result;
}


add_filter("gform_field_validation_32_12", "custom_validation_3", 10, 4);

function custom_validation_3($result, $value, $form, $field){

    if(!preg_match('~^\d{8,14}+$~', $value)){
        $result["is_valid"] = false;
        $result["message"] = "Please enter a valid telephone number";
    }

    return $result;
}

add_filter("gform_field_validation_33_3", "custom_validation_4", 10, 4);

function custom_validation_4($result, $value, $form, $field){

    if(!preg_match('~^\d{8,14}+$~', $value)){
        $result["is_valid"] = false;
        $result["message"] = "Please enter a valid telephone number";
    }

    return $result;
}

add_filter("gform_field_validation_12_4", "custom_validation_5", 10, 4);

function custom_validation_5($result, $value, $form, $field){

    if(!preg_match('~^\d{8,14}+$~', $value)){
        $result["is_valid"] = false;
        $result["message"] = "Please enter a valid telephone number";
    }

    return $result;
}


add_filter("gform_field_validation_38_4", "custom_validation_6", 10, 4);

function custom_validation_6($result, $value, $form, $field){

    if(!preg_match('~^\d{8,14}+$~', $value)){
        $result["is_valid"] = false;
        $result["message"] = "Please enter a valid telephone number";
    }

    return $result;
}





function disable_shipping_calc_on_cart( $show_shipping ) {
	
	$hide_true = 0;
	$member_id = array(124146,124145,123769);
	
	foreach( WC()->cart->get_cart() as $cart_item ){
		if (in_array($cart_item['product_id'], $member_id)){
			$hide_true = 1;
		}
		if ( $check_shop = get_post_meta( $cart_item['product_id'], 'camp_shop_appointment') ) {
			foreach ($check_shop as $term){
				if($term=="camp"){ 
        			$hide_true = 1;
				}
			}
		}
		
    }
	
	if($hide_true == 1){
		if( is_cart() ) {
			return false;
		}
		if( is_checkout() ) {
			return false;
		}
	}

    return $show_shipping;
}
add_filter( 'woocommerce_cart_ready_to_calc_shipping', 'disable_shipping_calc_on_cart', 99 );

add_action( 'woocommerce_before_checkout_form', 'ts_before_checkout_form', 10 );

function ts_before_checkout_form(){
	$hide_true = 0;
	$member_id = array(124146,124145,123769);
	
	foreach( WC()->cart->get_cart() as $cart_item ){
		if (in_array($cart_item['product_id'], $member_id)){
			$hide_true = 1;
		}
		if ( $check_shop = get_post_meta( $cart_item['product_id'], 'camp_shop_appointment') ) {
			foreach ($check_shop as $term){
				if($term=="camp"){ 
        			$hide_true = 1;
				}
			}
		}
		
    }
	
	if($hide_true == 1){
		if( is_checkout() ) {
			echo '<style>.woocommerce-shipping-fields{ display:none !important; }</style>';
			echo '<script>document.getElementById("ship-to-different-address-checkbox").checked = false;</script>';
		}
	}
}


function md_custom_woocommerce_checkout_fields( $fields ) 
{
    $fields['order']['order_comments']['placeholder'] = 'Any final notes about your child or booking.';

    return $fields;
}
add_filter( 'woocommerce_checkout_fields', 'md_custom_woocommerce_checkout_fields' );



add_filter( 'gform_confirmation', 'custom_confirmation', 10, 4 );
function custom_confirmation( $confirmation, $form, $entry, $ajax ) {	
	
	if( $form['id'] == '5') {
		$url = 'https://shop.australiansportscamps.com.au/gravity-contact-us/';
		$confirmation .= "
				<script>
				jQuery( document ).ready(function() {
					
					setTimeout(function(){ window.location.replace('".$url."'); }, 1000);
					
				});
			</script>";
	}
	if( $form['id'] == '8') {
		$url = 'https://shop.australiansportscamps.com.au/gravity-about-us/';
		$confirmation .= "
				<script>
				jQuery( document ).ready(function() {
					
					setTimeout(function(){ window.location.replace('".$url."'); }, 1000);
					
				});
			</script>";
	}
	
	
	
	 return $confirmation;
}

add_filter( 'woocommerce_my_account_my_orders_query', 'custom_my_account_orders', 10, 1 );
function custom_my_account_orders( $args ) {

    $args['posts_per_page'] = 10;
    return $args;
}






?>