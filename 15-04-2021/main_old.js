if(jQuery('.testimonial-slider-main').length > 0) {
	jQuery('.testimonial-slider-main').slick({
	  infinite: true,
	  slidesToShow:1,
	  slidesToScroll: 1,
	  loop:true,
	  dots:false,
	  arrow:true,
	  autoplay:true,
	  autoplaySpeed:6000,
	  responsive: [
    
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
		arrow:true,
	  autoplay:true,
	  autoplaySpeed:2000,
	 
      }
    },
	{
      breakpoint: 320,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
		arrow:true,
	  autoplay:true,
	  autoplaySpeed:2000,
      }
    }
   
  ]
	});
}






jQuery(window).load(function () {
    

    setTimeout(function () {
      if(jQuery('.description_above').length > 0) {
		if ( jQuery(' ul.description_above li').length > 1 ) {
			jQuery('ul.description_above li:first-child').hide();
			jQuery('ul.description_above li:nth-child(2)').hide();
			jQuery('.gchoice_4_23_0').show();
			jQuery('.gchoice_4_23_1').show();
			
			
		}  
	  }
	  
	  
    }, 3000);
	
	
	setTimeout(function () {
		if(jQuery('.out-of-stock').length > 0) {
			jQuery('.variations').hide();
			jQuery('.woocommerce-variation-description').hide();
			jQuery('.woocommerce-variation-price').hide();
			jQuery('.gform_wrapper').hide();
			jQuery('.variations_button').hide();
			jQuery('.tit').hide();
			
		}
    }, 500);
	

});

if(jQuery('.post-1242').length > 0) {
	jQuery( '<nav aria-label="breadcrumb"><ol class="breadcrumb"><li class="breadcrumb-item"><a href="https://develop.australiansportscamps.com.au">Home</a></li>  / <li class="breadcrumb-item">Cart</li> </ol></nav>' ).insertBefore( ".heading-banner" );
}

if(jQuery('.post-1243').length > 0) {
	jQuery( '<nav aria-label="breadcrumb"><ol class="breadcrumb"><li class="breadcrumb-item"><a href="https://develop.australiansportscamps.com.au">Home</a></li> / <li class="breadcrumb-item"><a href="https://shop.australiansportscamps.com.au/cart">Cart</a></li> / <li class="breadcrumb-item">Checkout</li> </ol></nav>' ).insertBefore( ".heading-banner" );
}




//scroll top
 jQuery(".htdropdown").hide();
        jQuery(document).ready(function(){
            jQuery('.userdropdownbox').click(function() {
               jQuery('.htdropdown').toggle("slide");
            });
        });

jQuery(window).scroll(function() {  // OR  $(window).scroll(function() {
    var h = jQuery("header").height();
	var height = (h+70);
	var percentage = (height / jQuery(window).height())*100; 
	if(jQuery(this).scrollTop() > 150) {
		jQuery("header .main-header").addClass("sticky");
	}else {
		jQuery("header .main-header").removeClass("sticky");
	}
	
	if(window.matchMedia("(max-width: 767px)").matches){
        var h = jQuery(".main-header").height();
		var percentage = (h / jQuery(window).height())*100; 
		if(jQuery(this).scrollTop() > 150) {
			jQuery(".menuu").addClass("sticky-top");
			jQuery(".menuu").css('top',(percentage+2)+'%');
		}
		else{
			jQuery(".menuu").removeClass("sticky-top"); 
			jQuery(".menuu").css('top','');
		}
        
    } else{  
       if(jQuery(this).scrollTop() > 150) {
			jQuery(".menuu").addClass("sticky-top");
			jQuery(".menuu").css('top',percentage+'%');
		}
		else{
			jQuery(".menuu").removeClass("sticky-top"); 
			jQuery(".menuu").css('top','');
		}
    }
});

jQuery( document ).ready(function() {
    var h = jQuery("header").height();
	var height = (h-40);
	var percentage = (height / jQuery(window).height())*100; 
	if(jQuery(this).scrollTop() > 150) {
		jQuery("header .main-header").addClass("sticky");
	}else {
		jQuery("header .main-header").removeClass("sticky");
	}
	if(window.matchMedia("(max-width: 767px)").matches){
        var h = jQuery(".main-header").height();
		var percentage = (h / jQuery(window).height())*100; 
		if(jQuery(this).scrollTop() > 150) {
			jQuery(".menuu").addClass("sticky-top");
			jQuery(".menuu").css('top',(percentage+2)+'%');
		}
		else{
			jQuery(".menuu").removeClass("sticky-top"); 
			jQuery(".menuu").css('top','');
		}
        
    } else{  
       if(jQuery(this).scrollTop() > 150) {
			jQuery(".menuu").addClass("sticky-top");
			jQuery(".menuu").css('top',percentage+'%');
		}
		else{
			jQuery(".menuu").removeClass("sticky-top"); 
			jQuery(".menuu").css('top','');
		}
    }
});

function checkPasswordStrength( $pass1,
                                $pass2,
                                $strengthResult,
                                $submitButton,
                                blacklistArray ) {
        var pass1 = $pass1.val();
	     $submitButton.attr( 'disabled', 'disabled' );
	
        var strongRegex = new RegExp("^(?=.{9,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");
        var mediumRegex = new RegExp("^(?=.{8,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
        var enoughRegex = new RegExp("(?=.{8,}).*", "g");
        if (pass1.length == 0) {
             $strengthResult.innerHTML = 'Type Password';
        } else if (false == enoughRegex.test(pass1)) {
             $strengthResult.html('<div class="woocommerce-password-strength short" aria-live="polite">Very weak - Please enter a stronger password.</div><small class="woocommerce-password-hint">Hint: The password should be at least eight characters long. To make it stronger, use upper and lower case letters, numbers, and symbols like ! " ? $ % ^ &amp; ).</small>');
        } else if (strongRegex.test(pass1)) {
             $strengthResult.html('<div class="woocommerce-password-strength strong" aria-live="polite">Strong </div><small class="woocommerce-password-hint">');
			 $submitButton.removeAttr( 'disabled' );
        } else if (mediumRegex.test(pass1)) {
             $strengthResult.html('<div class="woocommerce-password-strength good" aria-live="polite">Medium </div><small class="woocommerce-password-hint">');
			 $submitButton.removeAttr( 'disabled' );
        } else {
             $strengthResult.html('<div class="woocommerce-password-strength short" aria-live="polite">Very weak - Please enter a stronger password.</div><small class="woocommerce-password-hint">Hint: The password should be at least eight characters long. To make it stronger, use upper and lower case letters, numbers, and symbols like ! " ? $ % ^ &amp; ).</small>');
        }
    
    return 1;
}

jQuery( document ).ready( function( $ ) {
	// Binding to trigger checkPasswordStrength
	$( 'body' ).on( 'keyup', '#reg_password2,#reg_password3',
		function( event ) {
			checkPasswordStrength(
				$('#reg_password2'),         // First password field
				"", // Second password field
				$('#password-strength'),           // Strength meter
				$('.btn-reg'),           // Submit button
				['black', 'listed', 'word']        // Blacklisted words
			);
		}
	);
});




// testimonial-slider-main



// img-slider-main	
if(jQuery('.img-slider-main').length > 0) {
	jQuery('.img-slider-main').slick({
		infinite: true,
		slidesToShow:1,
		slidesToScroll: 1,
		loop:true,
		dots:false,
		arrow:true,
		autoplay:true,
		autoplaySpeed:3000
	  });
}


if(jQuery('.product-template-default').length > 0) {
	jQuery('.breadcrumb-item').each(function(i, obj) {
		var href = jQuery(this).find( "a" ).attr("href");
		if(href != undefined){
			if(href == 'https://shop.australiansportscamps.com.au'){
				jQuery(this).find( "a" ).attr("href","https://develop.australiansportscamps.com.au/");
			}
			if(href == 'https://shop.australiansportscamps.com.au/book/'){
				jQuery(this).find( "a" ).attr("href","https://develop.australiansportscamps.com.au/book-a-camp/");
			}
			if(href.indexOf("https://shop.australiansportscamps.com.au/sport/") > -1){
				jQuery(this).find( "a" ).attr("href","https://develop.australiansportscamps.com.au/book-a-camp/");
			}
		}
	});	
		
		
}




// scroll to map


if(jQuery(window).width() < 991){
  jQuery('.camp-listing ul li').click(function() {
    $('html, body').animate({
    scrollTop: jQuery("#maps").offset().top - 90
    }, 1000);
  });
}

// click to remove tr

jQuery("tr td .cancel").on("click", function(){
  jQuery(this).closest("tr").remove();
})

// tooltip

jQuery(function () {
  jQuery('[data-toggle="tooltip"]').tooltip()
})

// read more and less

jQuery(document).ready(function() {
  (function() {
    var showChar = 101;
    var ellipsestext = "...";

    jQuery(".truncate").each(function() {
      var content = $(this).html();
      if (content.length > showChar) {
        var c = content.substr(0, showChar);
        var h = content;
        var html =
          '<div class="truncate-text" style="display:block">' +
          c +
          '<span class="moreellipses">' +
          ellipsestext +
          '&nbsp;&nbsp;<a href="javascript:void(0);" class="moreless more color-orange decoration-none">Read More</a></span></span></div><div class="truncate-text" style="display:none">' +
          h +
          '<a href="javascript:void(0);" class="moreless less color-orange decoration-none">Read Less</a></span></div>';

        jQuery(this).html(html);
      }
    });

    jQuery(".moreless").click(function() {
      var thisEl = $(this);
      var cT = thisEl.closest(".truncate-text");
      var tX = ".truncate-text";

      if (thisEl.hasClass("less")) {
        cT.prev(tX).toggle();
        cT.slideToggle();
      } else {
        cT.toggle();
        cT.next(tX).fadeToggle();
      }
      return false;
    });
  })();
});


// 
jQuery(function()
{
  jQuery("#minus").click(function()
  {
      var currentVal = parseInt(jQuery(this).next(".qty").val());
      if (currentVal != NaN)
      {
          if(currentVal > 0){
                  jQuery(this).next(".qty").val(currentVal - 1);
              }

      }
  });
    jQuery("#plus").click(function()
    {
        var currentVal = parseInt(jQuery(this).prev(".qty").val());
        if (currentVal != NaN)
        {
            jQuery(this).prev(".qty").val(currentVal + 1);
        }
    });

});

// Address

jQuery(document).ready(function() {
  jQuery('#add_new').on('click', function () {
      jQuery('.New-address').removeClass('d-none');
      jQuery('.main-address').removeClass('d-block');
      jQuery('.main-address').addClass('d-none');
      jQuery('.New-address').addClass('d-block');
      jQuery(window).scrollTop(0);
  });
  jQuery('#new_back').on('click', function () {
      jQuery('.New-address').removeClass('d-block');
      jQuery('.main-address').removeClass('d-none');
      jQuery('.New-address').addClass('d-none');
      jQuery('.main-address').addClass('d-block');
      jQuery(window).scrollTop(0);
  });
});

// Order

jQuery(document).ready(function() {
  jQuery('.order_details').on('click', function () {
      jQuery('.order-details').removeClass('d-none');
      jQuery('.main-order').removeClass('d-block');
      jQuery('.main-order').addClass('d-none');
      jQuery('.order-details').addClass('d-block');
      jQuery(window).scrollTop(0);
  });
  jQuery('#back_order').on('click', function () {
      jQuery('.order-details').removeClass('d-block');
      jQuery('.main-order').removeClass('d-none');
      jQuery('.main-order').addClass('d-block');
      jQuery('.order-details').addClass('d-none');
      jQuery(window).scrollTop(0);
  });
});

// toggle_sidebar

jQuery(document).ready(function() {
    jQuery('#toggle_sidebar').on('click', function () {
        jQuery('.sidebar.side-sticky.small').toggleClass('toggle');
    });
}); 

jQuery('#findcamps').on('click', function () {
	jQuery(".er-msg").hide();
	var camp = jQuery('#langOpt2').val();
	var loc = jQuery('#loc').val();
	var lat = jQuery('#lat').val();
	var lng = jQuery('#lng').val();
	var locationName = jQuery('#locationName').val();
	var getUrl = window.location;
	var flg = 0;
	if(camp == ''){
		if(loc == ''){
			flg = 1;
		}
	}
	else{
		if(camp == '' && loc == ''){
			flg = 1;
		}
		
	}
	
	
	if(flg == 1){
		jQuery(".er-msg").show();
		return false;
	}
	
	var URL = "https://shop.australiansportscamps.com.au/location/?q="+camp+"&l="+loc+"&f="+locationName+"&lat="+lat+"&lng="+lng;
	window.location = URL;
});


jQuery('.btn-map').on('click', function () {
	jQuery(".er-msg").hide();
	var camp = jQuery('#langOpt21').val();
	var loc = jQuery('#l').val();
	var lat = jQuery('#lat').val();
	var lng = jQuery('#lng').val();
	var locationName = jQuery('#locname').val();
	var flg = 0;
	if(camp == ''){
		if(loc == ''){
			flg = 1;
		}
	}
	else{
		if(camp == '' && loc == ''){
			flg = 1;
		}
		
	}
	
	
	if(flg == 1){
		jQuery(".er-msg").show();
		return false;
	}
	var getUrl = window.location;
	var URL = "https://shop.australiansportscamps.com.au/location/?q="+camp+"&l="+loc+"&f="+locationName+"&lat="+lat+"&lng="+lng;
	window.location = URL;
});



jQuery('.onclicksection').on('click', function () {
	var h = jQuery("header").height();
	var height = (h-200);
	var id = jQuery(this).attr('data-id');
	jQuery('html, body').animate({
        scrollTop: jQuery("#"+id).offset().top + height
    }, 1000);
});

jQuery('#db').on('click', function () {
var h = jQuery("header").height();
	var height = (h-200);
	jQuery('html, body').animate({
        scrollTop: jQuery("#flyer_form").offset().top + height
    }, 1000);

});






/*jQuery('#langOpt2').multiselect({
    columns: 1,
    placeholder: 'Select Camps',
    search: true,
	onOptionClick : function( element, option ){
		//here
		console.log(option);
	}
});*/
jQuery('#langOpt21').on('change', function() {
	var html = '';
		
		if(jQuery("#f").val() != ''){
			var f = jQuery("#f").val();
			var ff = f.split(" ");
			html+='<a href="javascript:;" id="'+ff[0]+'" class="filterbx btn-blue-border location">'+ff[0]+'<span class="cancelbtn" data-type="location" ></span></a>';
		}
		var substr = jQuery("#langOpt21").val();
		html+='<a href="javascript:;" id="'+substr+'" class="filterbx btn-blue-border">'+substr+'<span data-value="'+substr+'" data-type="sports" class="cancelbtn"></span></a>';
		//jQuery.each(substr, (index, item) => {
			//html+='<a href="javascript:;" id="'+item+'" class="filterbx btn-blue-border">'+item+'<span data-value="'+item+'" data-type="sports" class="cancelbtn"></span></a>';
		//});
		
		jQuery(".filters").html(html);	
});

/*jQuery('#langOpt21').multiselect({
    columns: 1,
    placeholder: 'Select Camps',
    search: true,
	onOptionClick : function( element, option ){
		//here
		var html = '';
		
		if(jQuery("#f").val() != ''){
			var f = jQuery("#f").val();
			var ff = f.split(" ");
			html+='<a href="javascript:;" id="'+ff[0]+'" class="filterbx btn-blue-border location">'+ff[0]+'<span class="cancelbtn" data-type="location" ></span></a>';
		}
		var substr = jQuery("#langOpt21").val();
		jQuery.each(substr, (index, item) => {
			html+='<a href="javascript:;" id="'+item+'" class="filterbx btn-blue-border">'+item+'<span data-value="'+item+'" data-type="sports" class="cancelbtn"></span></a>';
		});
		
		jQuery(".filters").html(html);
		
		//filters
	}
});*/
if(jQuery('.rp_wcdpd_product_page').length > 0) {
	
	
	
	var total = jQuery(".rp_wcdpd_pricing_table_variation_container > div").length;
	if(total > 0){
		var cnt = 0;
		jQuery(".rp_wcdpd_pricing_table_variation_container > div").each(function(){
			var context = jQuery(this);
			if (context.css('display') == 'none'){
			   cnt++;
			}
		});
		if(cnt === total){
			jQuery(".camphidesection").hide();
		}
		
	}
}	
else{
	jQuery(".camphidesection").hide();
}

if(jQuery('.out-of-stock').length > 0) {
	jQuery(".kidssection").hide();
}	

if(jQuery('.loginsec').length > 0) {
	if(jQuery('.showlogin').length > 0) {
		jQuery('.showlogin').attr('href','/my-account');
	}
}
if(jQuery('.woocommerce-remove-coupon').length > 0) {
	jQuery('.woocommerce-remove-coupon').on('click', function () {
		
	});	
}
	
if(jQuery('.remove').length > 0) {
	jQuery('.remove').on('click', function () {
		var c = 0;
		var cart = jQuery("#cart_count").text();
		if(cart != ''){
			cart = parseInt(cart);
			if(cart == 1){
				c = ''; 
			}
			else{
				c = (cart - 1);
				if(c == 0){
					c = ''; 
				}
			}
			jQuery("#cart_count").html(c);
			
                    csName = 'CART';
                   
					Cookies.set(csName, c, { domain: '.australiansportscamps.com.au'})
			
		}
	});
}


if(jQuery('.woocom-err').length > 0) {
	setTimeout(function(){ jQuery('.woocom-err').eq(0).hide(); }, 5000);
}
if(jQuery('.woocom-info').length > 0) {
	//setTimeout(function(){ jQuery('.woocom-info').eq(0).hide(); }, 5000);
}
if(jQuery('.woocom-suc').length > 0) {
	setTimeout(function(){ jQuery('.woocom-suc').eq(0).hide(); }, 5000);
}

 jQuery(document).on("click","button",function() {	
	console.log("here");
	setTimeout(function(){ console.log("here"); jQuery('.woocom-err').hide(); jQuery('.woocommerce_error').hide();    }, 9000);
	setTimeout(function(){ jQuery('.woocom-suc').hide(); }, 9000);
});

if(jQuery('#order_comments_field').length > 0) {
	 jQuery('#order_comments_field label > .optional').html("");
}



jQuery('#new_walk').on('click', function () {
	jQuery("#kids_sec").hide();
	jQuery("#input_4_2_3").val("");
		jQuery("#input_4_2_6").val("");
		jQuery("#input_4_12_3").val("");
		jQuery("#input_4_12_1").val("");
		jQuery("#input_4_12_2").val("");
});
jQuery('#kids_walk').on('click', function () {
	jQuery("#kids_sec").show();
});


jQuery('.btn-coupon').on('click', function () {
	if(jQuery("#coupon_code").val() == ""){
		jQuery(".err").show();
		return false;
	}
	else{
		jQuery(".err").hide();
	}
});

jQuery('.btn-coupon2').on('click', function () {
	if(jQuery("#coupon_code").val() == ""){
		jQuery(".err").show();
		return false;
	}
	else{
		jQuery(".err").hide();
	}
});

jQuery('#coupon_code').keypress(function() {
	jQuery(".err").hide();
   
});



//kidssection



jQuery("#select_kids").change(function(){
	
	if(jQuery("#gform_form_id").val() == '4'){
		var str = jQuery(this).val();
		var data = str.split("@");
		var name = data[0].split(" ");
		jQuery("#input_4_2_3").val(name[0]);
		jQuery("#input_4_2_6").val(name[1]);
		var date = data[1].split("-");
		jQuery("#input_4_12_3").val(date[0]);
		jQuery("#input_4_12_1").val(date[1].replace(/^0+/, ''));
		jQuery("#input_4_12_2").val(date[2].replace(/^0+/, ''));
		var Gender = data[2];
		if(Gender == 'Boy'){
			jQuery("#label_4_23_1").prop('checked', true);
		}
		if(Gender == 'Girl'){
			jQuery("#choice_4_23_0").prop('checked', true);
		}
		var School = data[3];
		var Grade = data[4];
		var Club = data[5];
		var P_e = data[6];
		var M_c = data[7];
		
		jQuery("#input_4_16").val(School);
		jQuery("#input_4_18").val(Grade);
		jQuery("#input_4_17").val(Club);
		jQuery("#input_4_20").val(P_e);
		jQuery("#input_4_21").val(M_c);
		
	}
	if(jQuery("#gform_form_id").val() == '26'){
		var str = jQuery(this).val();
		var data = str.split("@");
		var name = data[0].split(" ");
		jQuery("#input_26_2_3").val(name[0]);
		jQuery("#input_26_2_6").val(name[1]);
		var date = data[1].split("-");
		jQuery("#input_26_12_3").val(date[0]);
		jQuery("#input_26_12_1").val(date[1].replace(/^0+/, ''));
		jQuery("#input_26_12_2").val(date[2].replace(/^0+/, ''));
		var Gender = data[2];
		if(Gender == 'Boy'){
			jQuery("#label_26_23_1").prop('checked', true);
		}
		if(Gender == 'Girl'){
			jQuery("#choice_26_23_0").prop('checked', true);
		}
		var School = data[3];
		var Grade = data[4];
		var Club = data[5];
		var P_e = data[6];
		var M_c = data[7];
		
		jQuery("#input_26_16").val(School);
		jQuery("#input_26_18").val(Grade);
		jQuery("#input_26_17").val(Club);
		jQuery("#input_26_20").val(P_e);
		jQuery("#input_26_21").val(M_c);
		
	}
	
	
});

if(jQuery('#shipping_postcode').length > 0) {
	jQuery('#shipping_postcode').on('input', function() {
		if(!/^[0-9]+$/.test(jQuery(this).val())){
			jQuery(this).val("");
		}
	});	
}

if(jQuery('#billing_phone').length > 0) {
	jQuery('#billing_phone').on('input', function() {
		if(!/^[0-9]+$/.test(jQuery(this).val())){
			jQuery(this).val("");
		}
	});	
}



if(jQuery('#billing_postcode').length > 0) {
	jQuery('#billing_postcode').on('input', function() {
		if(!/^[0-9]+$/.test(jQuery(this).val())){
			jQuery(this).val("");
		}
	});	
}

if(jQuery('#billing_address_2_field').length > 0) {
	jQuery("#billing_address_2_field").children("label").html("Address Line 2");
	jQuery("#billing_address_2_field").children("label").removeClass("screen-reader-text");
	
}


	



function init() {
		var options = {
			types: ['(regions)'],
			componentRestrictions: {country: 'au'}
		};
	if(jQuery('#locationName').length > 0) {
		var input = document.getElementById('locationName');
		var autocomplete = new google.maps.places.Autocomplete(input,options);
		google.maps.event.addListener(autocomplete, 'place_changed', function() {
			var place = autocomplete.getPlace();
			console.log(place);
			var Arr = ["ACT","NSW","QLD","SA","TAS","VIC","WA","NT"];
			var f_add =  place.formatted_address;
			var pl = "";
			jQuery.each(Arr, function( index, value ) {
				if (f_add.indexOf(value) > -1) {
					pl = value;
				}
			});
			var latitude = place.geometry.location.lat();
			var longitude = place.geometry.location.lng();
			jQuery('#lat').val(latitude);
			jQuery('#lng').val(longitude);
			if(!jQuery.inArray( "postal_code", place.types )){
				console.log(place.address_components[2].short_name);
				jQuery('#loc').val(pl);
			}
			else{
				console.log(place.address_components[1].short_name);
				jQuery('#loc').val(pl);
			}
		});	
	}

	if(jQuery('#locname').length > 0) {	
		var input2 = document.getElementById('locname');
		var autocomplete2 = new google.maps.places.Autocomplete(input2,options);
		google.maps.event.addListener(autocomplete2, 'place_changed', function() {
			var place = autocomplete2.getPlace();
			console.log(place);
			var Arr = ["ACT","NSW","QLD","SA","TAS","VIC","WA","NT"];
			var f_add =  place.formatted_address;
			var pl = "";
			jQuery.each(Arr, function( index, value ) {
				if (f_add.indexOf(value) > -1) {
					pl = value;
				}
			});
			var latitude = place.geometry.location.lat();
			var longitude = place.geometry.location.lng();
			jQuery('#lat').val(latitude);
			jQuery('#lng').val(longitude);
			if(!jQuery.inArray( "postal_code", place.types )){
				console.log(place.address_components[2].short_name);
				jQuery('#loc').val(pl);
				jQuery('#l').val(pl);
			}
			else{
				console.log(place.address_components[1].short_name);
				jQuery('#loc').val(pl);
				jQuery('#l').val(pl);
			}
		});	
	}	
	initAutocomplete();
	initAutocompletecheckout();
	initAutocompleteship();
	jQuery(document).bind('gform_post_render', function () {
        initAutocomplete();
    });
	
	
}
google.maps.event.addDomListener(window, 'load', init);





function initAutocompleteship() {
		var componentForm = {
        route: 'long_name',
        street_number: 'short_name',
        sublocality_level_1: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'short_name',
        postal_code: 'short_name'
    };
	var gfoptions = {
		componentRestrictions: {country: 'au'}
	};
	if(jQuery('#shipping_address_1').length > 0) {	
		var input2 = document.getElementById('shipping_address_1');
		var autocomplete2 = new google.maps.places.Autocomplete(input2,gfoptions);
		google.maps.event.addListener(autocomplete2, 'place_changed', function() {
			var place = autocomplete2.getPlace();
			console.log(place);
			// Get each component of the address from the place details
                // and fill the corresponding field on the form.
                var address1 = '';
                for (var i = 0; i < place.address_components.length; i++) {

                    var addressType = place.address_components[i].types[0];
                    if (componentForm[addressType]) {
                        var val = place.address_components[i][componentForm[addressType]];
						console.log(val);
                        //address line 1                        
                        if (addressType == 'street_number') {
                            address1 = val;
                        }

                        if (addressType == 'route') {
                            address1 = address1 + ' ' + val;
                        }

                        jQuery('#shipping_address_1').val(address1);

                        //address line 2
                        if (addressType == 'sublocality_level_1') {
                            jQuery('#shipping_address_2').val(val);
                        }
						
						if(address1 == ''){
							jQuery('#shipping_address_1').val(place.name);
							jQuery('#shipping_address_2').val("");
						} 
						else{
							jQuery('#shipping_address_2').val(place.name);
						}
						

                        //city
                        if (addressType == 'locality') {
                            jQuery('#shipping_city').val(val);
                        }

                       

                        //postal code
                        if (addressType == 'postal_code') {
                            jQuery('#shipping_postcode').val(val);
                        }

                        //country
                        if (addressType == 'country') {
                            jQuery('#shipping_country').val(val).trigger("change");
							console.log("yoo");
                        }
						
						 //state
                        if (addressType == 'administrative_area_level_1') {
                           
                            //us state
                            jQuery('#shipping_state').val(val);
                        }
                    }
                }
			
		});	
	}
	
}
function initAutocompletecheckout() {
	var componentForm = {
        route: 'long_name',
        street_number: 'short_name',
        sublocality_level_1: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'short_name',
        postal_code: 'short_name'
    };
	var gfoptions = {
		componentRestrictions: {country: 'au'}
	};
	if(jQuery('#billing_address_1').length > 0) {	
		var input2 = document.getElementById('billing_address_1');
		var autocomplete2 = new google.maps.places.Autocomplete(input2,gfoptions);
		google.maps.event.addListener(autocomplete2, 'place_changed', function() {
			var place = autocomplete2.getPlace();
			console.log(place);
			// Get each component of the address from the place details
                // and fill the corresponding field on the form.
                var address1 = '';
				
				 jQuery('#billing_address_2').val(place.name);
				
				
                for (var i = 0; i < place.address_components.length; i++) {

                    var addressType = place.address_components[i].types[0];
                    if (componentForm[addressType]) {
                        var val = place.address_components[i][componentForm[addressType]];
						console.log(val);
                        //address line 1                        
                        if (addressType == 'street_number') {
                            address1 = val;
                        }

                        if (addressType == 'route') {
                            address1 = address1 + ' ' + val;
                        }

                        jQuery('#billing_address_1').val(address1);
						
						
						
						
						

                        //address line 2
                        if (addressType == 'sublocality_level_1') {
                            jQuery('#billing_address_2').val(val);
                        }
						
						 
						if(address1 == ''){
							jQuery('#billing_address_1').val(place.name);
							jQuery('#billing_address_2').val("");
						} 
						else{
							jQuery('#billing_address_2').val(place.name);
						}
						 
						 
						
                        //city
                        if (addressType == 'locality') {
                            jQuery('#billing_city').val(val);
                        }

                       

                        //postal code
                        if (addressType == 'postal_code') {
                            jQuery('#billing_postcode').val(val);
                        }

                        //country
                        if (addressType == 'country') {
                            jQuery('#billing_country').val(val).trigger("change");
							console.log("yoo");
                        }
						
						 //state
                        if (addressType == 'administrative_area_level_1') {
                           
                            //us state
                            jQuery('#billing_state').val(val);
                        }
                    }
                }
			
		});	
	}
	
	
}
function initAutocomplete() {
    
    if(jQuery('li.gf_state_2_digit').length > 0) {
        var gf_state_code =  'short_name';
    } else {
        var gf_state_code =  'long_name';    
    }
    
    var componentForm = {
        route: 'long_name',
        street_number: 'short_name',
        sublocality_level_1: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: gf_state_code,
        country: 'long_name',
        postal_code: 'short_name'
    };
	var gfoptions = {
		types: ['establishment'],
		componentRestrictions: {country: 'au'}
	};

    jQuery('.gfac_autocomplete_addr').each( function () {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        //check if address filed
        var addr = jQuery(this);
        if(addr.find('div.ginput_container_address').length>0)
            var v = addr.find('div.ginput_container_address').attr('id');
        else
            var v = addr.find('input').attr('id');
		
			console.log(v);
        
        if (jQuery('div#' + v).length > 0 && jQuery('input#' + v+ '_1').length>0) {
            var autocomplete = new google.maps.places.Autocomplete(
                    /** @type {!HTMLInputElement} */(document.getElementById(v + '_1')),
                    gfoptions);
            if(jQuery('div#'+v).closest('li[class*="gfac_autocomplete_country_"]').length>0){
            // Set initial restrict to the greater list of countries.
                var clslist = jQuery('div#'+v).closest('li[class*="gfac_autocomplete_country"]')[0].className;
                var country = clslist.substring(clslist.lastIndexOf("gfac_autocomplete_country_")+26,clslist.lastIndexOf("gfac_autocomplete_country_")+28);
                
            }
            autocomplete.addListener('place_changed', function () {
                var place = autocomplete.getPlace();
				console.log(place);
				console.log("aaaa");
                // Get each component of the address from the place details
                // and fill the corresponding field on the form.
                var address1 = '';
                for (var i = 0; i < place.address_components.length; i++) {

                    var addressType = place.address_components[i].types[0];
                    if (componentForm[addressType]) {
                        var val = place.address_components[i][componentForm[addressType]];

                        //address line 1                        
                        if (addressType == 'street_number') {
                            address1 = val;
                        }

                        if (addressType == 'route') {
                            address1 = address1 + ' ' + val;
                        }

                        jQuery('#' + v + '_1').val(address1);

                        //address line 2
                        if (addressType == 'sublocality_level_1') {
                            jQuery('#' + v + ' .address_line_2 input[type="text"]').val(val);
                        }

                        //city
                        if (addressType == 'locality') {
                            jQuery('#' + v + ' .address_city input[type="text"]').val(val);
                        }

                        //state
                        if (addressType == 'administrative_area_level_1') {
                            jQuery('#' + v + ' .address_state input[type="text"]').val(val);
                            //us state
                            jQuery('#' + v + ' .address_state select').val(val);
                        }

                        //postal code
                        if (addressType == 'postal_code') {
                            jQuery('#' + v + ' .address_zip input[type="text"]').val(val);
                        }

                        //country
                        if (addressType == 'country') {
                            jQuery('#' + v + ' .address_country select').val(val);
                        }
                    }
                }
            });
        } else if(jQuery('input#'+v).length>0) {
			console.log("V");
			console.log(v);
            //text field
            var autocomplete = new google.maps.places.Autocomplete(
                    /** @type {!HTMLInputElement} */(document.getElementById(v)),
                    gfoptions);
            if(jQuery('input#'+v).closest('li[class*="gfac_autocomplete_country_"]').length>0){
            // Set initial restrict to the greater list of countries.
                var clslist = jQuery('input#'+v).closest('li[class*="gfac_autocomplete_country"]')[0].className;
                var country = clslist.substring(clslist.lastIndexOf("gfac_autocomplete_country_")+26,clslist.lastIndexOf("gfac_autocomplete_country_")+28);
               
            }
            autocomplete.addListener('place_changed', function () {
                var place = autocomplete.getPlace();
				console.log(place);
				console.log("aaaa");
                if(jQuery('input#'+v).closest('li[class*="gfac_autocomplete_addr_format"]').length>0){
                    jQuery('#' + v).val(place.name);
                }
				var address = '';
          if (place.address_components) {
            address = [
              (place.address_components[0] && place.address_components[0].short_name || ''),
              (place.address_components[1] && place.address_components[1].short_name || ''),
              (place.address_components[2] && place.address_components[2].short_name || '')
            ].join(' ');
          }
				console.log(address);
            });
        }
    });
}
