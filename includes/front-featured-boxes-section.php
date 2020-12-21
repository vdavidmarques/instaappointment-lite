<?php 
	$_featured_heading 		= esc_attr( get_theme_mod('_featured_heading', __('WHAT WE DO', 'instaappointment-lite') ) );
	
	$_featured_title1 		= esc_attr( get_theme_mod('_fb1_first_part_heading', __('SECURE BOOKING', 'instaappointment-lite') ) );
	$_featured_link1        = esc_url( get_theme_mod('_fb1_first_part_link', '#') );
	$_featured_iconclass1   = esc_attr( get_theme_mod('_fb1_first_icon_class', 'fa-calendar') );
	$_featured_content1 	= wp_kses_post( get_theme_mod('_fb1_first_part_content', __('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been', 'instaappointment-lite') ) );	
	
	$_featured_title2 		= esc_attr( get_theme_mod('_fb2_second_part_heading', __('RELIABLE SERVICE', 'instaappointment-lite') ) );
	$_featured_link2        = esc_url( get_theme_mod('_fb2_second_part_link', '#') );
	$_featured_iconclass2   = esc_attr( get_theme_mod('_fb2_second_icon_class', 'fa-cogs') );
	$_featured_content2 	= wp_kses_post( get_theme_mod('_fb2_second_part_content', __('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been', 'instaappointment-lite') ) );	

	$_featured_title3 		= esc_attr( get_theme_mod('_fb3_third_part_heading', __('NO HIDDEN CHARGES', 'instaappointment-lite') ) );
	$_featured_link3        = esc_url( get_theme_mod('_fb3_third_part_link', '#' ) );
	$_featured_iconclass3   = esc_attr( get_theme_mod('_fb3_third_icon_class', 'fa-eye-slash') );
	$_featured_content3 	= wp_kses_post( get_theme_mod('_fb3_third_part_content', __('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been', 'instaappointment-lite') ) );
	
?>

<div class="container"> 
  
  <div class="head-slide-wrap clearfix">                  
      <!-- header image section -->
      <?php  //get_template_part( 'includes/front', 'bgimage-section'); ?>
      
       <?php echo do_shortcode('[metaslider id="105"]'); ?> 

      <div class="caption-slider-home col-xs-12 col-sm-6">
          <h1>Consultoria Vida Segura</h1>
          <p>Proteja o essencial com preços que cabem no seu bolso</p>         
      </div>
         
    </div>	

  <div class="planos-carousel">
        <?php echo do_shortcode('[recent_post_carousel slides_to_show="4" slides_to_scroll="1"]'); ?>
  </div>
</div>  

<div id="featured-box" class="instaapp-section" style="display: none;">

	<!-- container -->
	<div class="container">   

		<?php if (isset($_featured_heading) && $_featured_heading !='') { ?><h2 class="section_heading"><?php echo $_featured_heading; ?></h2><?php } ?>

		<!-- row-fluid -->
		<div class="mid-box-mid row-fluid">

		<?php if($_featured_title1 || $_featured_iconclass1 || $_featured_content1) { ?>
			<!-- Featured Box 1 -->
			<div class="mid-box span4 fade_in_hide element_fade_in">
				<div class="instaapp-iconbox iconbox-top">		
					<div class="iconbox-icon instaapp-animated small-to-large instaapp-viewport">
						<div class="featured_inner">
							<div class="featured_icon">
								<?php if($_featured_iconclass1) { ?>	
									<i class="fa <?php if ( isset($_featured_iconclass1) && $_featured_iconclass1 !='') { echo $_featured_iconclass1;  } ?>"></i>
								<?php } ?>
							</div>
							<?php if($_featured_title1) { ?><h4><?php echo $_featured_title1; ?></h4><?php } ?>
						</div>
					</div>
					<div class="iconbox-content">		
						<a href="<?php if($_featured_link1) { echo esc_url($_featured_link1); } ?>" title="<?php if($_featured_title1) { echo $_featured_title1; } ?>"><?php if($_featured_content1) { echo instaappointment_lite_slider_limit_words($_featured_content1, '40'); } ?></a>
					</div>			
				</div>
			</div>
			<?php } ?>

			<?php if($_featured_title2 || $_featured_iconclass2 || $_featured_content2) { ?>
			<!-- Featured Box 2 -->
			<div class="mid-box span4 fade_in_hide element_fade_in">
				<div class="instaapp-iconbox iconbox-top">		
					<div class="iconbox-icon instaapp-animated small-to-large instaapp-viewport">
						<div class="featured_inner">
							<div class="featured_icon">
								<?php if($_featured_iconclass2) { ?>	
									<i class="fa <?php if ( isset($_featured_iconclass2) && $_featured_iconclass2 !='' ) { echo $_featured_iconclass2;  } ?>"></i>
								<?php } ?>
							</div>
							<?php if($_featured_title2) { ?><h4><?php echo $_featured_title2; ?></h4><?php } ?>
						</div>
					</div>		
					<div class="iconbox-content">		
						<a href="<?php if($_featured_link2) { echo esc_url($_featured_link2); } ?>" title="<?php if($_featured_title2) { echo $_featured_title2; } ?>"><?php if($_featured_content2) { echo instaappointment_lite_slider_limit_words($_featured_content2, '40'); } ?></a>
					</div>			
				</div>
			</div>
			<?php } ?>
			
			<?php if($_featured_title3 || $_featured_iconclass3 || $_featured_content3) { ?>
			<!-- Featured Box 3 -->
			<div class="mid-box span4 fade_in_hide element_fade_in">
				<div class="instaapp-iconbox iconbox-top">
					<div class="iconbox-icon instaapp-animated small-to-large instaapp-viewport">
						<div class="featured_inner">
							<div class="featured_icon">
								<?php if($_featured_iconclass3) { ?>	
									<i class="fa <?php if ( isset($_featured_iconclass3) && $_featured_iconclass3 !='' ) { echo $_featured_iconclass3;  } ?>"></i>
								<?php } ?>
							</div>
							<?php if($_featured_title3) { ?><h4><?php echo $_featured_title3; ?></h4><?php } ?>
						</div>
					</div>		
					<div class="iconbox-content">		
						<a href="<?php if($_featured_link3) { echo esc_url($_featured_link3); } ?>" title="<?php if($_featured_title3) { echo $_featured_title3; } ?>"><?php if($_featured_content3) { echo instaappointment_lite_slider_limit_words($_featured_content3, '40'); } ?></a>
					</div>				
				</div>
			</div>
			<?php } ?>
			<div class="clearfix"></div>
		</div>
		<!-- row-fluid -->
		
	</div>
	<!-- container -->
</div>