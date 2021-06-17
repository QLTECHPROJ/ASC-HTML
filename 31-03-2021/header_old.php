<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package newasc
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">



	<header>
        <div class="social-header">
            <div class="container d-flex d-small-block justify-content-between">
                <div class="first-li align-items-center d-flex">
					<?php echo do_shortcode('[Social_Menu]'); ?>	
                </div>
                <div class="second-li align-items-center d-sm-flex d-none">
                    <ul class="d-md-flex d-none">
                        <li>
                        <a class="nav-link p-0" href="tel:1300914368"><i class="fa fa-phone"></i></a><a class="nav-link p-0" href="tel:1300914368"> CALL US: 1300 914 368</a>
                        </li>
                        <li>
                            |
                        </li>
						<?php global $current_user; wp_get_current_user(); ?>
						<?php
							if ( is_user_logged_in() ) {
						?>
							<li class="userdropdownbox">
								<i class="fa fa-user-circle"></i> <?php echo $current_user->user_login;  ?>
								<ul class="htdropdown" style="display: none;">
									<li><a href="<?php echo site_url(); ?>/my-account">Profile</a></li>
									<li><a href="<?php echo wp_logout_url( get_permalink( wc_get_page_id( 'myaccount' ) ) ); ?>">logout</a></li>
								</ul>
						   
							</li>
						<?php	
							} else {
						?>
						 <li>
                        <a href="<?php echo site_url(); ?>/my-account/">LOGIN</a>
                        <span>OR</span>
                        <a href="<?php echo site_url(); ?>/register/">REGISTER</a>
                        </li>
						<?php	
							}
						?>
						
						
						
                       
                    </ul>

                    <ul class="d-md-none d-flex">
                        <li>
                        <a href="<?php echo site_url(); ?>/my-account/">LOGIN</a>
                        <span>OR</span>
                        <a href="<?php echo site_url(); ?>/register/">REGISTER</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!--  -->

        <div class="main-header">
            <div class="container">
                <nav class="navbar navbar-expand-xl navbar-light " className="bg-none">
                    <div class="navbar-brand">
                        <a href="<?php  echo FRONT_URL; ?>" ><img src="<?php echo get_template_directory_uri(); ?>/assets/image/logo.png" class="img-fluid" alt="Cinque Terre" width="120"></a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                
                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                        <div class="justify-content-end" id="">
                            <?php echo do_shortcode('[menu_mega]'); ?>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>    
    <!--  -->





	
