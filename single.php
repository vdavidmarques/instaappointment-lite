<?php 
/**
 * The Template for displaying all single posts.
 */

get_header(); ?>

<div class="main-wrapper-item">
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
	
<!-- BreadCrumb Section // -->
<div class="bread-title-holder">
	<div class="container">
		<div class="row-fluid">
			<div class="container_inner clearfix">
				<h1 class="title"><?php the_title(); ?></h1>
        <div class="cont_nav_inner voltar">
          <p><a href="#" onclick="window.history.go(-1); return false;" alt="">VOLTAR</a></p>       
        </div>  
			</div>
		</div>
	</div>
</div>
<!-- \\ BreadCrumb Section -->
	
<div class="container post-wrap">
	<div class="row-fluid">
		<div id="container" class="span12">
			<div id="content">  
					<div class="post" id="post-<?php the_ID(); ?>">
					  <div class="single_post_wrap">					

						<div class="post_inner_wrap clearfix">				
              <!-- skepost-meta -->
              
              <!--<div class="col-xs-12 thumbnail-post-single">
                <?php //the_post_thumbnail(); ?>
              </div> -->
													
							<!-- post title -->

							 <div class="skepost">
								<?php the_content(); ?>
								<br />
								<?php wp_link_pages(array('before' => '<p><strong>'.__('Pages :','instaappointment-lite').'</strong>','after' => '</p>', __('number','instaappointment-lite'),));	?>
								<?php edit_post_link(__('Edit','instaappointment-lite'), '', ''); ?>
					        </div>
					        <!-- skepost -->
				        </div>

				      </div><!-- single-post-wrap -->									
					</div>
				<!-- post -->
				<?php endwhile; ?>
				<?php else :  ?>

				<div class="post">
					<h2><?php _e('Not Found','instaappointment-lite'); ?></h2>
				</div>
				<?php endif; ?>
			</div><!-- content --> 
		</div><!-- container --> 

	</div>
 </div>
</div>
<?php get_footer(); ?>