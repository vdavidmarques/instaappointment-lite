<?php
/**
* The Header for our theme.
*/
?><!DOCTYPE html>
<?php global $instaapp_shortname, $instaapp_themename; ?>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="profile" href="http://gmpg.org/xfn/11" />

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">

<?php wp_head(); ?>
	
</head>
<body <?php body_class(); ?> >
	<div id="wrapper" class="skepage">
		<div id="header_wrap">
			<div id="header-top" class="clearfix">
			<div class="container">      
				<div class="row-fluid"> 

					<!-- Head Topbar Right Section Starts -->
					<div class="span12">

						<!-- Social Links Section -->
						<div class="social_icon">
							<ul class="clearfix row">
                <li class="fb-icon col-xs-2 col-lg-2">
                  <a target="_blank" href="https://api.whatsapp.com/send?phone=5513974070953&text=Ol%C3%A1%20Consultoria%20Vida%20Segura%2C%20gostaria%20de%20informa%C3%A7%C3%B5es%20sobre%20plano%20de%20sa%C3%BAde"> 
                    <div class="fa fa-whatsapp">                                                                 
                        <span class="texto">(13)97407-0953 </span>                  
                    </div>   
                  </a>
                </li>

                <li class="fb-icon col-xs-2 col-lg-2">
                  <a target="_blank" href="tel:133202-7543"> 
                    <div class="fa fa-phone">    
                      <span class="texto">(13)3202-7543</span>
                    </div>  
                  </a>
                </li>
                
                <li class="fb-icon email-topo col-xs-2 col-lg-4"><a target="_blank" href="mailto:comercial@consultoriavidasegura.com"><div class="fa fa-email" title="Email"> <span class="texto">comercial@consultoriavidasegura.com</span></div></a></li>
              
                <li class="fb-icon insta-topo col-xs-2 col-lg-2"><a target="_blank" href="https://www.instagram.com/chrisplanosdesaude/"><div class="fa fa-instagram" title="Instagram"><span class="texto"> Instagram</span></div></a></li>

  							<li class="fb-icon col-xs-2 col-lg-2"><a target="_blank" href="https://www.facebook.com/chrisplanosdesaude"><div class="fa fa-facebook" title="Facebook"><span  class="texto"> Facebook</span></div></a></li>
							</ul>
						</div>
						<!-- Social Links Section -->
					</div>
					<!-- Head Topbar Right Section Ends -->
			
				</div>
			</div>
		</div>
	

		<div id="header" class="skehead-headernav clearfix">
			<div class="glow">
				<div id="skehead">
					<div class="container">      
						<div class="row-fluid">      
							<!-- #logo -->
							<div id="logo" class="col-md-2">
								<?php if( get_theme_mod('_logo_img', '') != '' ) { ?>
									<div class="logo_inner">
										<a href="<?php echo esc_url(home_url('/')); ?>" title="<?php bloginfo('name'); ?>" style="display: table;line-height: 0;" ><img class="logo" src="<?php echo esc_url( get_theme_mod('_logo_img') ); ?>" alt="<?php bloginfo('name'); ?>" /></a>
									</div>
								<?php } elseif ( display_header_text() ) { ?>
								<!-- #description -->
									<div id="site-title" class="logo_desp logo_inner">
										<a href="<?php echo esc_url(home_url('/')); ?>" title="<?php bloginfo('name') ?>" ><?php bloginfo('name'); ?></a>
										<div id="site-description"><?php bloginfo( 'description' ); ?></div>
									</div>
								<!-- #description -->
								<?php } ?>
							</div>
							<!-- #logo -->
							
							<!-- .top-nav-menu --> 
							<div class="top-nav-menu col-md-10">							
								<div class="top-nav-menu">
									<?php 
										if( function_exists( 'has_nav_menu' ) && has_nav_menu( 'Header' ) ) {
											wp_nav_menu(array( 'container_class' => 'instaapp-menu', 'container_id' => 'skenav', 'menu_id' => 'menu-main','theme_location' => 'Header' )); 
										} else {
									?>
									<div class="instaapp-menu" id="skenav">
										<ul id="menu-main" class="menu">
											<?php wp_list_pages('title_li=&depth=0'); ?>
										</ul>
									</div>
									<?php } ?>
								</div>
							</div>
							<!-- .top-nav-menu --> 
						</div>
					</div>
				</div>
				<!-- #skehead -->
			</div>
			<!-- glow --> 
		</div>
		<!-- #header -->
		<div class="header-clone"></div>
		</div>
		<!-- #header_wrap -->

<div id="main" class="clearfix">