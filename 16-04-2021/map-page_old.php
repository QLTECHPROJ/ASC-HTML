<?php /* Template Name: Map-Page */ ?>
<?php
	get_header();
?>
<?php



	$args = array(
		'taxonomy' => 'product_cat',
		'hide_empty' => false,
		'parent'   => 0
	);
	$product_cat = get_terms( $args );
	
	
	
	
	
	function distance($lat1, $lon1, $lat2, $lon2, $unit) {
		if (($lat1 == $lat2) && ($lon1 == $lon2)) {
			return 0;
		}
		else {
			$theta = $lon1 - $lon2;
			$dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
			$dist = acos($dist);
			$dist = rad2deg($dist);
			$miles = $dist * 60 * 1.1515;
			$unit = strtoupper($unit);

			if ($unit == "K") {
			  return $miles * 1.609344;
			} else if ($unit == "N") {
			  return $miles * 0.8684;
			} else {
			  return $miles;
			}
		}
	}
	
	function sortById($x, $y) {
		return $x['KM'] - $y['KM'];
	}
	
	
	
?>
<style>
#map_canvas { 
	width: 100%; height: 500px; 
	float:left;
}
#locs {
	margin-top: 0px;
	padding-top: 0px;
	margin-left: 10px;
	float:left;
	height: 500px;
	overflow-y: scroll;
}
.loc {
	
	cursor:pointer; 
	
}
#form {
	margin-top: 0px;
	padding-top: 0px;
	margin-left: 10px;
	height: 60px;
}
label {
	width: 200px;
	padding: 5px;  
}
.dropdown-check-list {
  display: inline-block;
}

.dropdown-check-list .anchor {
  position: relative;
  cursor: pointer;
  display: inline-block;
  padding: 5px 50px 5px 10px;
  border: 1px solid #ccc;
}

.dropdown-check-list .anchor:after {
  position: absolute;
  content: "";
  border-left: 2px solid black;
  border-top: 2px solid black;
  padding: 5px;
  right: 10px;
  top: 20%;
  -moz-transform: rotate(-135deg);
  -ms-transform: rotate(-135deg);
  -o-transform: rotate(-135deg);
  -webkit-transform: rotate(-135deg);
  transform: rotate(-135deg);
}

.dropdown-check-list .anchor:active:after {
  right: 8px;
  top: 21%;
}

.dropdown-check-list ul.items {
  padding: 2px;
  display: none;
  margin: 0;
  border: 1px solid #ccc;
  border-top: none;
}

.dropdown-check-list ul.items li {
  list-style: none;
}

.dropdown-check-list.visible .anchor {
  color: #0094ff;
}

.dropdown-check-list.visible .items {
  display: block;
}
.laoder{
	width:100%;
	height:100%;
	background : #fff;
	position: fixed;
	z-index: 10;
	top: 0;
}
#preloader {
  height: 40px;
  width: 40px;
  position: absolute;
  top: 50%;
  left: 50%;
  margin-top: -20px;
  margin-left: -20px;
  
}
#preloader:before {
  content: "";
  display: block;
  position: absolute;
  left: -1px;
  top: -1px;
  height: 100%;
  width: 100%;
  -webkit-animation: rotation 1s linear infinite;
          animation: rotation 1s linear infinite;
  border: 1px solid #FF6600;
  border-top: 1px solid transparent;
  border-radius: 100%;
}
#preloader > .icon {
  position: absolute;
	top: 17%;
	left: 17%;
  width:50px;
  height:50px;
  -webkit-animation: wink 1s ease-in-out infinite alternate;
          animation: wink 1s ease-in-out infinite alternate;
}
@media only screen and (min-width: 768px) {
  #preloader {
    height: 60px;
    width: 60px;
    margin-top: -30px;
    margin-left: -30px;
	background : #fff;
  }
  #preloader:before {
    left: -2px;
    top: -2px;
    border-top-width: 2px;
    border-left-width: 2px;
    border-bottom-width: 2px;
    border-right-width: 2px;
  }
  #preloader > .icon {
    height: 37.5px;
    width: 15.9px;
   
  }
}
@media only screen and (min-width: 1200px) {
  #preloader {
    height: 80px;
    width: 80px;
    margin-top: -40px;
    margin-left: -40px;
  }
  #preloader > .icon {
     width:50px;
	height:50px;
   
  }
}
@-webkit-keyframes rotation {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(359deg);
  }
}
@keyframes rotation {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(359deg);
  }
}
@-webkit-keyframes wink {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}
@keyframes wink {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}
.aligncenter{
	width:100%;
	height:auto;
}
</style>
<div class="laoder"  >
					<div id="preloader" aria-busy="true" aria-label="Loading, please wait." role="progressbar">
						<img alt="" class="icon" src="https://shop.australiansportscamps.com.au/demo.svg" />
					</div>
				</div>
<section class="Banner-Section">
        <div class="container">
            <div class="Banner-Section-data">
            
			<nav aria-label="breadcrumb"><ol class="breadcrumb"><li class="breadcrumb-item"><a href="https://develop.australiansportscamps.com.au">Home</a></li>  / <li class="breadcrumb-item">Find a camp</li> </ol></nav><h1 class="heading-banner">Find a camp</h1>          
            </div>
        </div>
    </section>				
<section class="BottomForm Topform">
	<div class="container">
		
			<form autocomplete="off" >
			
				<div class="row align-items-center justify-content-center">
					<div class="lg-mb-2 col-xl-2 col-lg-3 col-md-12 col-12">
						<label class="font-20 font-bold color-3b mb-0 form-label">
							FIND A CAMP
						</label>
					</div>
					<div class="sm-mb-2 col-xl-3 col-lg-3 col-md-4 col-sm-4 col-12">
						<input type="text" id="locname" value="<?php echo (isset($_GET['f']) ? $_GET['f'] : "") ?>" class="mb-0 full form-control top-form" placeholder="Enter Suburb / Postcode">
					</div>
					<div class="sm-mb-2 seccont col-xl-3 col-lg-3 col-md-4 col-sm-4 col-12">
						<select   id="langOpt21" class="mb-0 full form-control top-form">
                        <option value="" > Select Sports </option>
                        <?php
							$q =  (isset($_GET['q']) ? $_GET['q'] : "");
							$my_c = explode(",",$_GET['q']);
							
						?>	
								
								<option <?php if($q == "basketball"){ echo 'selected="selected"'; } ?> value="basketball"> Basketball</option>                       
								<option <?php if($q == "football"){ echo 'selected="selected"'; } ?> value="football"> AFL/AFLW Football</option>
								<option <?php if($q == "netball"){ echo 'selected="selected"'; } ?> value="netball"> Netball</option>
								<option <?php if($q == "cricket"){ echo 'selected="selected"'; } ?> value="cricket"> Cricket</option>					   
								<option <?php if($q == "soccer"){ echo 'selected="selected"'; } ?> value="soccer"> Soccer</option>                 	
								<option <?php if($q == "hockey"){ echo 'selected="selected"'; } ?> value="hockey"> Hockey</option>								
								<option <?php if($q == "tennis"){ echo 'selected="selected"'; } ?> value="tennis"> Tennis</option>								
								<option <?php if($q == "rugby-league"){ echo 'selected="selected"'; } ?> value="rugby-league"> Rugby League</option>
								<option <?php if($q == "rugby-union"){ echo 'selected="selected"'; } ?> value="rugby-union"> Rugby Union</option>
								<option <?php if($q == "golf"){ echo 'selected="selected"'; } ?> value="golf"> Golf</option>
								<option <?php if($q == "rock-climbing"){ echo 'selected="selected"'; } ?> value="rock-climbing"> Rock Climbing</option>
								<option <?php if($q == "sailing"){ echo 'selected="selected"'; } ?> value="sailing"> Sailing</option>
								<option <?php if($q == "table-tennis"){ echo 'selected="selected"'; } ?> value="table-tennis"> Table Tennis</option>
								<option <?php if($q == "baseball"){ echo 'selected="selected"'; } ?> value="baseball"> Baseball</option>							
								<option <?php if($q == "ice-skating"){ echo 'selected="selected"'; } ?> value="ice-skating"> Ice Skating</option>								
								<option <?php if($q == "futsal"){ echo 'selected="selected"'; } ?> value="futsal"> Futsal</option>								
								<option <?php if($q == "horse-riding"){ echo 'selected="selected"'; } ?> value="horse-riding"> Horse Riding</option>							
								<option <?php if($q == "rowing"){ echo 'selected="selected"'; } ?> value="rowing"> Rowing</option>								
								<option <?php if($q == "multi-sport"){ echo 'selected="selected"'; } ?> value="multi-sport"> Multi Sport</option>								
								<option <?php if($q == "esports"){ echo 'selected="selected"'; } ?> value="esports"> eSports</option>							
								<option <?php if($q == "rock-climbing-indoor-surfing"){ echo 'selected="selected"'; } ?> value="rock-climbing-indoor-surfing"> Indoor Surfing</option>								
								<option <?php if($q == "gymnastics"){ echo 'selected="selected"'; } ?> value="gymnastics"> Gymnastics</option>								
								<option <?php if($q == "speed-agility"){ echo 'selected="selected"'; } ?> value="speed-agility"> Speed &amp; Agility</option>	
								
						<?php	
							
						?>
                    </select>
						<div class="d-none">
					<?php
							$q =  (isset($_GET['q']) ? $_GET['q'] : "");
							$my_c = explode(",",$_GET['q']);
							foreach ($product_cat as $parent_product_cat){	
								if($parent_product_cat->name != "Uncategorised"){
						?>	
								<input type="checkbox" class="chkk" <?php if (in_array($parent_product_cat->slug, $my_c)){ echo 'checked'; } ?> id="<?php echo $parent_product_cat->slug ?>" value="<?php echo $parent_product_cat->slug ?>" />
								
						<?php	
								}
							}
						?>
					</div>
					
					
					</div>
					<div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-12">
						<button type="button" class="uppercase btn-sm btn-orange mb-0 btn btn-primary">Find Camps</button>
						 
					</div>
				</div>
					<p  class="text-danger er-msg" style="text-align: center;margin-top: 10px;display:none;" >Please select a Location or Sport.</p>
			</form>
			<?php
				if($_GET['q'] == ''){
					$_GET['q'] = '';
				}
				
				if($_GET['q'] != ''){
					$f =  (isset($_GET['f']) ? $_GET['f'] : "");
			?>
			<div class="activefilterbx d-none">
				<div class="row align-items-center justify-content-center">
					<div class="col-xl-12 mb-2">
						<label class="font-20 font-medium color-3b mb-0">
							Active filters
						</label>
					</div>
					
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 sm-mb-2 filters"  >
							<?php
								if($f != ""){
									$ff = explode(" ",$f);
							?>
								<a href="javascript:;" id="<?php echo $ff[0]; ?>" class="filterbx btn-blue-border location"><?php echo $ff[0]; ?><span class="cancelbtn" data-type="location" ></span></a>
							<?php	
								}
							?>
							
							
					<?php	
								$my_c = explode(",",$_GET['q']);
								foreach($my_c as $c){
									if($c != ''){	
									if($c != 'null'){	
					?>
						<a href="javascript:;" id="<?php echo $c; ?>" class="filterbx btn-blue-border"><?php echo $c; ?><span data-value="<?php echo $c; ?>" data-type="sports" class="cancelbtn"></span></a>
					<?php	
									}
									}
								}
					?>
						</div>
					

				</div>
			</div><!--activefilterbx-->
			<?php			
				}
				else{
			?>		
			<div class="activefilterbx  d-none">
				<div class="row align-items-center justify-content-center">
					<div class="col-xl-12 mb-2">
						<label class="font-20 font-medium color-3b mb-0">
							Active filters
						</label>
					</div>
					
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 sm-mb-2 filters"  >
						<?php
								$f =  (isset($_GET['f']) ? $_GET['f'] : "");
								if($f != ""){
									$ff = explode(" ",$f);
							?>
								<a href="javascript:;" id="<?php echo $ff[0]; ?>" class="filterbx btn-blue-border location"><?php echo $ff[0]; ?><span class="cancelbtn" data-type="location" ></span></a>
							<?php	
								}
							?>
					</div>
				</div>
			</div>
						
			<?php		
				}
			?>
		
	</div>
</section>
<section class="mapsnotavailsec" style="dispaly:none;" >
	<section class="No-camp-section-2">
        <div class="container">
            <div class="title mb-30">
                <h2>
                    SELECT A SPORT TO VIEW AND BOOK CAMPS
                </h2>
                <p class="text-center">
                    No camps or programs were found matching your selection.
                </p>
            </div>
            <div class="title">
                <h2>
                    Notify Me
                </h2>
                <p class="text-center">
                    Please fill your email to get notified when similar camps are available again.
                </p>
            </div>
        </div>
    </section>
	<section class="No-camp-section-3">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-7 md-mb-4">
					<iframe src="https://shop.australiansportscamps.com.au/gravity-notify/" frameBorder="0" width="100%" height="550" ></iframe>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-5">
                    <?php
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
					?>
                </div>
            </div>
        </div>
    </section>
</section>
<section class="Camp-section-2 mapsavailsec" style="dispaly:none;">
	<div class="container">
		<div class="title">
			<h2 class="text-center">SELECT A SPORT TO VIEW AND BOOK CAMPS</h2>
		</div>
		
		<?php
					$arr = array();
					$i = 0;
					foreach ($product_cat as $parent_product_cat){	
						if($parent_product_cat->name != "Uncategorised"){
							$args = array(
								'post_type'      => 'product',
								'posts_per_page' => 100,
								'product_cat'    => $parent_product_cat->name
							);

							$loop = new WP_Query( $args );

							while ( $loop->have_posts() ) : $loop->the_post();
								global $product;
								$id = $product->get_id();
								$map = get_field( "map", $id );
									if($map['lat'] != null){
										$terms = get_the_terms( $id, 'product_tag' );	
										$aromacheck = array();
										if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
											foreach ( $terms as $term ) {
												$aromacheck[] = $term->name;
											}
										}
										$img = get_template_directory_uri()."/assets/Pin/".$parent_product_cat->slug.".png";
										if (@getimagesize($img)) {
											$image = $img;
										} else {
											$image = get_template_directory_uri()."/assets/Pin/camp.png";
										}
										
										$arr[$i]['ID'] = $id; 
										$arr[$i]['URL'] = get_permalink($ids); 
										$arr[$i]['Img'] = woocommerce_get_product_thumbnail(); 
										$arr[$i]['Name'] = get_the_title(); 
										$arr[$i]['Price'] = do_shortcode( '[woocommerce_price id='.$id.']' );
										$arr[$i]['Dates'] = get_field( "camp_dates", $id );
										$arr[$i]['Venue'] = get_field( "camp_venue", $id );
										$arr[$i]['type'] = $parent_product_cat->slug;
										$arr[$i]['type_icon'] = $image;
										$arr[$i]['type_name'] = $parent_product_cat->name;
										$arr[$i]['address'] = $map['address'];
										$arr[$i]['lat'] = $map['lat'];
										$arr[$i]['lng'] = $map['lng'];
										$arr[$i]['Tag'] = $aromacheck;
										if($_GET['lat'] != ""){
											if($map['lat'] != ""){
												$arr[$i]['KM'] = distance($map['lat'], $map['lng'], $_GET['lat'], $_GET['lng'], "K");
											}
										}
										else{
											$arr[$i]['KM'] = "";
										}
										$i++;
									}
									
							endwhile;

							wp_reset_query();
							
						}
					}
					if($_GET['lat'] != ""){
						usort($arr, function($a, $b) {
							return $a['KM'] <=> $b['KM'];
						});
					}
					
				?>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-12 col-p-0 lg-mb-4">
				<div class="">
                    <ul class="location camp-listing" id="locs">
                            
					</ul>
				</div>
			</div>
			<div class="col-xl-8 col-lg-8 col-md-12 col-p-0"  id="maps">
                <div class="camp-map-details">
					<div id="map_canvas"></div>
				</div>
			</div>
		</div>
	</div>
</section>



<input type="hidden" value="<?php echo $_GET['q']; ?>" id="q" />
<input type="hidden" value="<?php echo $_GET['l']; ?>" id="l" />
<input type="hidden" value="<?php echo $_GET['f']; ?>" id="f" />
<input type="hidden" value="<?php echo $_GET['lat']; ?>" id="lat" />
<input type="hidden" value="<?php echo $_GET['lng']; ?>" id="lng" />
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript">
	function AfterINIT() {
		console.log("AfterINIT");
		
		var cnt = 0;
		var cls = $("#l").val();
		$('.loc').each(function(i, obj) {
			if ($(this).hasClass('hide')){
				cnt++;  
				console.log("hide");
				$(this).hide();
			}
			else{
				console.log("show");	
				$(this).show();
			}
		});
		console.log($(".loc").length);
		console.log(cnt);
		if($(".loc").length === cnt){
			$(".mapsavailsec").hide();
			$(".mapsnotavailsec").show();
			$(".laoder").hide();
		}
		else{
			$(".mapsavailsec").show();
			$(".mapsnotavailsec").hide();
			$(".laoder").hide();
		}
		
	}
</script>
<script type="text/javascript">
$(document).on("click",".cancelbtn",function() {
	
	$('.btn-map').prop('disabled', true);
	var t = $(this).attr('data-type');
	
	if(t == 'location'){
		$(".location").remove();
		const params = { q: $("#q").val() }
		const paramString = new URLSearchParams(params)
		var url = 'https://shop.australiansportscamps.com.au/location/?'+paramString.toString();
		window.location.href = url;
	}
	else if(t == 'sports'){
		var v = $(this).attr('data-value');
		$("#"+v).remove();
		var q = $("#q").val();
		var qq = q.split(",");
		var substr = $("#langOpt21").val();
		 //var final_ar = new Array()
		//$.each(substr, function( index, value ) {
		//	if(value != v){
		//		if(value != ''){
		//			final_ar.push(value); 
		//		}
		//	}
		//});
		//var f_ar = final_ar.join(","); 
		var f_ar = final_ar.join(","); 
		
		const params = { q: substr,l: $("#l").val(),f: $("#f").val(),lat: $("#lat").val(),lng: $("#lng").val() }
		const paramString = new URLSearchParams(params)
		var url = 'https://shop.australiansportscamps.com.au/location/?'+paramString.toString();
		window.location.href = url;
	}
});
</script>
<script type="text/javascript">
var map;
var markers = [];
var lastinfowindow;
var locIndex;

//Credit: MDN
if ( !Array.prototype.forEach ) {
  Array.prototype.forEach = function(fn, scope) {
    for(var i = 0, len = this.length; i < len; ++i) {
      fn.call(scope, this[i], i, this);
    }
  }
}


var data = <?php echo json_encode($arr); ?>

function initialize() {
	console.log("here");
	"ACT","NSW","QLD","SA","TAS","VIC","WA","NT"
	<?php
		if($_GET['l'] != ""){
			
			if($_GET['l'] == "ACT"){
				?>		
					var latlng = new google.maps.LatLng(-35.5235, 148.9215);
				<?php
			}
			if($_GET['l'] == "NSW"){
				?>		
					var latlng = new google.maps.LatLng(-31.2763, 145.9591);
				<?php	
			}
			if($_GET['l'] == "QLD"){
				?>		
					var latlng = new google.maps.LatLng(-21.5285, 143.1972);
				<?php	
			}
			if($_GET['l'] == "SA"){
				?>		
					var latlng = new google.maps.LatLng(-29.1702, 134.5986);
				<?php	
			}
			if($_GET['l'] == "TAS"){
				?>		
					var latlng = new google.maps.LatLng(-41.7514, 146.5555);
				<?php	
			}
			if($_GET['l'] == "VIC"){
				?>		
					var latlng = new google.maps.LatLng(-36.5681, 143.4133);
				<?php	
			}
			if($_GET['l'] == "WA"){
				?>		
					var latlng = new google.maps.LatLng(-31.91394, 115.8543);
				<?php	
			}
			if($_GET['l'] == "NT"){
					?>		
					var latlng = new google.maps.LatLng(-18.8989, 133.6864);
				<?php
			}
			
			
		}
		else{
	?>		
		var latlng = new google.maps.LatLng(-31.91394, 115.8543);
	<?php		
		}
	?>
	
	
	
	
	var myOptions = {
		zoom: 5,
		center: latlng,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	map = new google.maps.Map(document.getElementById("map_canvas"),myOptions);
	
	geocoder = new google.maps.Geocoder();
	
	data.forEach(function(mapData,idx) {
		if(mapData.lat != null){
			var marker = new google.maps.Marker({
				map: map, 
				position:  { lat: parseFloat(mapData.lat), lng: parseFloat(mapData.lng) },
				title: mapData.title,
				icon: mapData.type_icon
			});

			var contentHtml = "<div style='height:200px'><div class='row'><div class='col-md-12 col-lg-12 col-xl-12'><h5 class='card-title'>"+mapData.Name+"</h5><p class='card-text'>"+mapData.Img+"</p><p class='card-text'>"+mapData.Dates+"</p><p class='card-text'>"+mapData.Venue+"</p><p class='nav-link p-0 main-price font-bold'>$"+mapData.Price+"</p><p class='card-text'><a href='"+mapData.URL+"' class='btn btn-orange' >Book Now</a></p></div></div></div>";
			var infowindow = new google.maps.InfoWindow({
				content: contentHtml
			});
			google.maps.event.addListener(marker, 'click', function() {
			  infowindow.open(map,marker);
			});
			marker.locid = idx+1;
			marker.infowindow = infowindow;
			markers[markers.length] = marker;
			var cls = '';
			$.each(mapData.Tag, function( index, value ) {
			  cls+=" "+value;
			});
			
			
			var html ='<li class="loc '+cls+'" data-locid="'+marker.locid+'">';
				html +='<div class="card book-card p-0">';
				html +='<div class="card-body p-0">';
				html +='<h5 class="card-title">'+mapData.Name+'</h5>';
				html +=' <p class="card-text">'+mapData.Dates+'</p>';
				html +=' <p class="card-text">'+mapData.Venue+'</p>';
				if(mapData.KM != ""){
					html +=' <p class="card-text"><b>'+mapData.KM.toFixed(2)+' KM</b></p>';
				}
				html +='<a class="nav-link p-0 main-price font-bold" href="#">$';
				html += mapData.Price;
				html +='</a>';
				html +=' <p class="card-text"><a class="btn btn-orange" href="'+mapData.URL+'" >Book Now</a></p>';
				//html +='<div class="tag">';
				//html +=' Flash offer<br>Ends Tomorrow!';
				//html +=' </div>';
				html +='</div>';
				html +=' </div>';
				html +='</li>';	 
				 $("#locs").append(html); 

			//Are we all done? Not 100% sure of this
			if(markers.length == data.length) {doFilter(); CallbackInit(); }
		}
	});

	$(document).on("click",".loc",function() {
		var thisloc = $(this).data("locid");
		for(var i=0; i<markers.length; i++) {
			if(markers[i].locid == thisloc) {
				//get the latlong
				if(lastinfowindow instanceof google.maps.InfoWindow) lastinfowindow.close();
				map.panTo(markers[i].getPosition());
				markers[i].infowindow.open(map, markers[i]);
				lastinfowindow = markers[i].infowindow;
			}
		}
	});

	function CallbackInit() {
		console.log("CallbackInit");
		<?php

			$q = $_GET['q'];
			$l = $_GET['l'];
			$f = $_GET['f'];

			if($_GET['q'] != ''){
				$my_c = explode(",",$_GET['q']);
				foreach($my_c as $c){
			?>
				$("#<?php echo $c; ?>").trigger("click");
			<?php	
				}
				
		?>
			
			
			
			/*console.log($('.loc').length);
			$('.loc').each(function(i) {
				console.log("demo");
				if ($('.menu').css('display') != 'none'){
					if ($(this).hasClass("<?php echo $l; ?>")) {
						$(this).show();
					}
					else{
						$(this).hide();
					}
				}
			});*/
			
			
			
		<?php	
			}
		?>
	}
	
	
	$(document).on("click", "input[type=checkbox]", doFilter);

}
function doFilter() {
		console.log("doFilter");
		//$('#langOpt21').multiselect('reload');
		if(!locIndex) {
			locIndex = {};
			//I reverse index markers to figure out the position of loc to marker index
			for(var x=0, len=markers.length; x<len; x++) {
				locIndex[markers[x].locid] = x;
			}
		}
		//what's checked?
		var checked = $("input[type=checkbox]:checked");
		var selTypes = [];
		for(var i=0, len=checked.length; i<len; i++) {
			selTypes.push($(checked[i]).val());
		}
		for(var i=0, len=data.length; i<len; i++) {
			var sideDom = "li.loc[data-locid="+(i+1)+"]";

			//Only hide if length != 0
			if(checked.length !=0 && selTypes.indexOf(data[i].type) < 0) {
				$(sideDom).hide();
				$(sideDom).removeClass("show");
				$(sideDom).addClass("hide");
				markers[locIndex[i+1]].setVisible(false);
			} else {
				
				if($("#l").val() != ''){
					if ($(sideDom).hasClass($("#l").val())) {
						$(sideDom).show();
						$(sideDom).addClass("show");
						$(sideDom).removeClass("hide");
						markers[locIndex[i+1]].setVisible(true);
					}
					else{
						$(sideDom).hide();
						$(sideDom).removeClass("show");
						$(sideDom).addClass("hide");
						markers[locIndex[i+1]].setVisible(false);
					}
				}
				else{
					$(sideDom).show();
					$(sideDom).addClass("show");
					$(sideDom).removeClass("hide");
					markers[locIndex[i+1]].setVisible(true);
				}
			}
		}
		AfterINIT();
	}

$('#langOpt21').on('change', function() {
	var id = $(this).val();
	 $('.chkk').prop("checked", false);
	 $('#'+id).prop("checked", true);
	 //$('#'+id).trigger("click");
	 doFilter();
});

</script>




<body onLoad="initialize()">





<?php
	get_sidebar();
	get_footer();
?>	