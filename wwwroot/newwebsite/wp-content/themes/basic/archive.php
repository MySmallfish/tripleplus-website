<?php get_header(); ?>

<?php 
/** Themify Default Variables
 *  @var object */
global $themify;
?>

<!-- layout -->
<div id="layout" class="pagewidth clearfix">

	<!-- content -->
    <?php themify_content_before(); //hook ?>
	<div id="content" class="clearfix">
    	<?php themify_content_start(); //hook ?>
		
	ARRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRR	
		<?php 
		/////////////////////////////////////////////
		// Category Title	 							
		/////////////////////////////////////////////
		?>
		
                <h1 class="page-title"><?php single_cat_title(); ?></h1>
                <?php echo $themify->get_category_description(); ?>

		<?php 
		/////////////////////////////////////////////
		// Loop	 							
		/////////////////////////////////////////////
		?>
		<?php if (have_posts()) : ?>
			<!-- loops-wrapper -->
			<div id="loops-wrapper" class="loops-wrapper <?php echo $themify->layout . ' ' . $themify->post_layout; ?>">
				<?php while (have_posts()) : the_post(); ?>
<div class="col4-2 first tb-column">
																					
											
<!-- module text -->
<div id="text-5421-1-0-1" class="module module-text text-5421-1-0-1   ">
		<?php
$product_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>
		
	<p><a href="<?php the_permalink(); ?>"><img class="alignnone wp-image-4821 " src="<?php echo $product_image?>" alt="" width="289" height="316"></a></p>

	</div>
<!-- /module text --><style>.themify_builder .text-5421-1-0-1.module-text {  } 
</style>

<!-- module text -->
<div id="text-5421-1-0-2" class="module module-text text-5421-1-0-2   ">
	
		
	<h3><span style="color: #ffc90a;"><?php the_title(); ?></span></h3>

	</div>
<!-- /module text --><style>.themify_builder .text-5421-1-0-2.module-text { color: rgba(255,201,10, 1);  } 
.themify_builder .text-5421-1-0-2.module-text h1 { color: rgba(255,201,10, 1);  } 
.themify_builder .text-5421-1-0-2.module-text h2 { color: rgba(255,201,10, 1);  } 
.themify_builder .text-5421-1-0-2.module-text h3:not(.module-title) { color: rgba(255,201,10, 1);  } 
.themify_builder .text-5421-1-0-2.module-text h4 { color: rgba(255,201,10, 1);  } 
.themify_builder .text-5421-1-0-2.module-text h5 { color: rgba(255,201,10, 1);  } 
.themify_builder .text-5421-1-0-2.module-text h6 { color: rgba(255,201,10, 1);  } 
</style>

<!-- module text -->
<div id="text-5421-1-0-3" class="module module-text text-5421-1-0-3   ">
	
		
	<p><?php the_excerpt(); ?></p>

	</div>
<!-- /module text --><style>.themify_builder .text-5421-1-0-3.module-text {  } 
</style>

<!-- module text -->
<div id="text-5421-1-0-4" class="module module-text text-5421-1-0-4   ">
	
		
	<h4><a href="<?php the_permalink(); ?>"><?php _e('<!--:en-->Read more <!--:--><!--:he-->המשך קריאה <!--:-->'); ?><img class="alignnone  wp-image-4621" style="margin-bottom: 1px;" src="/wp-content/uploads/2015/06/more.png" alt="more" width="23" height="23"></a></h4>
	</div>
<!-- /module text --><style>.themify_builder .text-5421-1-0-4.module-text {  } 
.themify_builder .text-5421-1-0-4.module-text a { color: rgba(255,201,10, 1);  } 
</style>
										
																			</div>                                  


				<?php endwhile; ?>			
			</div>
			<!-- /loops-wrapper -->

			<?php get_template_part( 'includes/pagination'); ?>
		
		<?php 
		/////////////////////////////////////////////
		// Error - No Page Found	 							
		/////////////////////////////////////////////
		?>
	
		<?php else : ?>
	
			<p><?php _e( 'Sorry, nothing found.', 'themify' ); ?></p>
	
		<?php endif; ?>			
	<?php themify_content_end(); //hook ?>
	</div>
    <?php themify_content_after(); //hook ?>
	<!-- /#content -->



</div>
<!-- /#layout -->

<?php get_footer(); ?>