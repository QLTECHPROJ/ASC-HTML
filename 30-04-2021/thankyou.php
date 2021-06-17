<?php
/**
 * Thankyou page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/thankyou.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.7.0
 */

defined( 'ABSPATH' ) || exit;
?>
<style>
.woocommerce-customer-details{
	display:none;
}
.mt-3{
	display:none;
}
.thankyoumain_img img{
	max-width:50%;
}
.resp-sharing-button__link,
.resp-sharing-button__icon {
  display: inline-block
}

.resp-sharing-button__link {
  text-decoration: none;
  color: #fff;
  margin: 0.5em
}

.resp-sharing-button {
  border-radius: 5px;
  transition: 25ms ease-out;
  padding: 0.5em 0.75em;
  font-family: Helvetica Neue,Helvetica,Arial,sans-serif
}

.resp-sharing-button__icon svg {
  width: 1em;
  height: 1em;
  margin-right: 0.4em;
  vertical-align: top
}

.resp-sharing-button--small svg {
  margin: 0;
  vertical-align: middle
}

/* Non solid icons get a stroke */
.resp-sharing-button__icon {
  stroke: #fff;
  fill: none
}

/* Solid icons get a fill */
.resp-sharing-button__icon--solid,
.resp-sharing-button__icon--solidcircle {
  fill: #fff;
  stroke: none
}

.resp-sharing-button--twitter {
  background-color: #55acee
}

.resp-sharing-button--twitter:hover {
  background-color: #2795e9
}

.resp-sharing-button--pinterest {
  background-color: #bd081c
}

.resp-sharing-button--pinterest:hover {
  background-color: #8c0615
}

.resp-sharing-button--facebook {
  background-color: #3b5998
}

.resp-sharing-button--facebook:hover {
  background-color: #2d4373
}

.resp-sharing-button--tumblr {
  background-color: #35465C
}

.resp-sharing-button--tumblr:hover {
  background-color: #222d3c
}

.resp-sharing-button--reddit {
  background-color: #5f99cf
}

.resp-sharing-button--reddit:hover {
  background-color: #3a80c1
}

.resp-sharing-button--google {
  background-color: #dd4b39
}

.resp-sharing-button--google:hover {
  background-color: #c23321
}

.resp-sharing-button--linkedin {
  background-color: #0077b5
}

.resp-sharing-button--linkedin:hover {
  background-color: #046293
}

.resp-sharing-button--email {
  background-color: #777
}

.resp-sharing-button--email:hover {
  background-color: #5e5e5e
}

.resp-sharing-button--xing {
  background-color: #1a7576
}

.resp-sharing-button--xing:hover {
  background-color: #114c4c
}

.resp-sharing-button--whatsapp {
  background-color: #25D366
}

.resp-sharing-button--whatsapp:hover {
  background-color: #1da851
}

.resp-sharing-button--hackernews {
background-color: #FF6600
}
.resp-sharing-button--hackernews:hover, .resp-sharing-button--hackernews:focus {   background-color: #FB6200 }

.resp-sharing-button--vk {
  background-color: #507299
}

.resp-sharing-button--vk:hover {
  background-color: #43648c
}

.resp-sharing-button--facebook {
  background-color: #3b5998;
  border-color: #3b5998;
}

.resp-sharing-button--facebook:hover,
.resp-sharing-button--facebook:active {
  background-color: #2d4373;
  border-color: #2d4373;
}

.resp-sharing-button--twitter {
  background-color: #55acee;
  border-color: #55acee;
}

.resp-sharing-button--twitter:hover,
.resp-sharing-button--twitter:active {
  background-color: #2795e9;
  border-color: #2795e9;
}

/*30/4/2021*/
.resp-sharing-button__icon svg { vertical-align: middle; }
.resp-sharing-button__link:hover { color: #fff; }
section.thank-you-Section-1 .social-thanks-li ul li a:hover { color: #FF6600; }
.social-thanks-li { margin-top: 15px; }
</style>
<section class="thank-you-Section-1">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-8 col-lg-8 lg-mb-8">
                    <div class="thank-you-data-one text-center">
					
						<?php
							if ( $order ) :
							do_action( 'woocommerce_before_thankyou', $order->get_id() );
						?>
							<?php if ( $order->has_status( 'failed' ) ) : ?>

								<p class="woocommerce-notice woocommerce-notice--error woocommerce-thankyou-order-failed"><?php esc_html_e( 'Unfortunately your order cannot be processed as the originating bank/merchant has declined your transaction. Please attempt your purchase again.', 'woocommerce' ); ?></p>

								<p class="woocommerce-notice woocommerce-notice--error woocommerce-thankyou-order-failed-actions">
									<a href="<?php echo esc_url( $order->get_checkout_payment_url() ); ?>" class="button pay"><?php esc_html_e( 'Pay', 'woocommerce' ); ?></a>
									<?php if ( is_user_logged_in() ) : ?>
										<a href="<?php echo esc_url( wc_get_page_permalink( 'myaccount' ) ); ?>" class="button pay"><?php esc_html_e( 'My account', 'woocommerce' ); ?></a>
									<?php endif; ?>
								</p>

							<?php else : ?>
					
					
                        <div class="thankyoumain_img"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/kids.png" alt=""></div>
                        <h2 class="font-bold color-blue uppercase">Thank you</h2>
                        <p class="font-20 font-medium">Your booking with number <b> #<?php echo $order->get_id() ?> </b> has been received, and you've been sent an email
                            with the program details.</p>
                        <p class="font-20 font-medium">HAPPY? LET YOUR FRIENDS KNOW!</p>
						
						<?php
							$order = wc_get_order( $order->get_id() );
							$items = $order->get_items();
							foreach ( $items as $item ) {
							    $product_name = $item->get_name();
								$product_id = $item->get_product_id();
								$image = wp_get_attachment_image_src( get_post_thumbnail_id( $product_id ), 'single-post-thumbnail' );
								$img =  $image[0];
								$title = get_post_meta( $product_id, '_yoast_wpseo_title' );
								$metadesc = get_post_meta( $product_id, '_yoast_wpseo_metadesc' );
								$url = get_permalink( $product_id );
							}
						?>
						
						<!-- Sharingbutton Facebook -->
						<a class="resp-sharing-button__link" onClick="window.open('http://www.facebook.com/sharer.php?s=100&p[title]=<?php echo $title; ?>&p[summary]=<?php echo $metadesc; ?>&p[url]=<?php echo $url; ?>&p[images][0]=<?php echo $img; ?>','sharer','toolbar=0,status=0,width=580,height=325');" href="javascript: void(0)"  aria-label="Facebook">
						  <div class="resp-sharing-button resp-sharing-button--facebook resp-sharing-button--medium"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solidcircle">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 0C5.38 0 0 5.38 0 12s5.38 12 12 12 12-5.38 12-12S18.62 0 12 0zm3.6 11.5h-2.1v7h-3v-7h-2v-2h2V8.34c0-1.1.35-2.82 2.65-2.82h2.35v2.3h-1.4c-.25 0-.6.13-.6.66V9.5h2.34l-.24 2z"/></svg></div>Facebook</div>
						</a>

						<!-- Sharingbutton Twitter -->
						<a class="resp-sharing-button__link" onClick="window.open('https://twitter.com/intent/tweet/?text=<?php echo $title; ?>&url=<?php echo $url; ?>','sharer','toolbar=0,status=0,width=580,height=325');" target="_blank" rel="noopener" aria-label="Twitter">
						  <div class="resp-sharing-button resp-sharing-button--twitter resp-sharing-button--medium"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solidcircle">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 0C5.38 0 0 5.38 0 12s5.38 12 12 12 12-5.38 12-12S18.62 0 12 0zm5.26 9.38v.34c0 3.48-2.64 7.5-7.48 7.5-1.48 0-2.87-.44-4.03-1.2 1.37.17 2.77-.2 3.9-1.08-1.16-.02-2.13-.78-2.46-1.83.38.1.8.07 1.17-.03-1.2-.24-2.1-1.3-2.1-2.58v-.05c.35.2.75.32 1.18.33-.7-.47-1.17-1.28-1.17-2.2 0-.47.13-.92.36-1.3C7.94 8.85 9.88 9.9 12.06 10c-.04-.2-.06-.4-.06-.6 0-1.46 1.18-2.63 2.63-2.63.76 0 1.44.3 1.92.82.6-.12 1.95-.27 1.95-.27-.35.53-.72 1.66-1.24 2.04z"/></svg></div>Twitter</div>
						</a>


                        <div class="social-thanks-li mb-20">
                            
						<?php
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
						?>
								
								
								
                            
                        </div>

                        <div class="text-center mb-30">
                            <button class="btn-orange-border" data-toggle="modal" data-target="#order_data"
                                type="button">Order Details</button>
                        </div>
						
						<?php endif; ?>

						<?php do_action( 'woocommerce_thankyou_' . $order->get_payment_method(), $order->get_id() ); ?>
						<?php do_action( 'woocommerce_thankyou', $order->get_id() ); ?>
						
						<?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<script type="text/javascript">

  jQuery(document).ready(function() {
		
      window.history.pushState(null, "", window.location.href);        

      window.onpopstate = function() {

          window.history.pushState(null, "", window.location.href);

      };

  });
  

</script>
