<?php get_header(); ?>

<?php 
/**
 * Template Name: page about
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
global $themify; ?>



<!-- layout-container -->
<div class="header-title triple-yellow"> GET texxt!</div>
<div id="layout" class="pagewidth clearfix">	

	<?php themify_content_before(); // hook ?>
	
  <!-- content -->
	
  <div id="content" class="clearfix">
    	<?php themify_content_start(); // hook ?>
	
		<?php 
		/////////////////////////////////////////////
		// 404							
		/////////////////////////////////////////////
		if(is_404()): ?>
			<h1 class="page-title" itemprop="name"><?php _e('404','themify'); ?></h1>	
			<p><?php _e( 'Page not found.', 'themify' ); ?></p>	
		<?php endif; ?>

		<?php 
		/////////////////////////////////////////////
		// PAGE							
		/////////////////////////////////////////////
		?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div id="page-<?php the_ID(); ?>" class="type-page" itemscope itemtype="http://schema.org/Article">
						
			<!-- page-title -->
			<?php if($themify->page_title != "yes"): ?> 
				<h1 class="page-title" itemprop="name"><?php //the_title(); ?></h1>
			<?php endif; ?>	
			<!-- /page-title -->
	<div id="aboutus_text_header">
            <?php echo get_field( "aboutus_text_header" );  ?>
     </div>
			<div class="page-content entry-content" itemprop="articleBody">
			
				<?php the_content(); ?>
				
		<div id="who_we_are">	
			<div id="who_we_are-title">
			<?php _e('<!--:en-->Who we are<!--:--><!--:he-->מי אנחנו<!--:-->'); ?>
			</div>
			<div id="who_we_are-description">
				<?php echo get_field( "who_we_are" );  ?>
			</div>
		</div>
		<div id="our_technology">	
			<div id="our_technology-title">
			<?php _e('<!--:en-->Our Technology<!--:--><!--:he-->טכנולגיה<!--:-->'); ?>
			</div>
			<div id="our_technology-description">
				<?php echo get_field( "our_technology" );  ?>
			</div>
		</div>
		<div id="our_vision">	
			<div id="our_vision-title">
			<?php _e('<!--:en-->Our Vision<!--:--><!--:he-->החזון שלנו<!--:-->'); ?>
			</div>
			<div id="our_vision-description">
				<?php echo get_field( "our_vision" );  ?>
			</div>
		</div>
		<div id="aboutus_footer">	
			<div id="aboutus_footer-title">
			<?php _e('<!--:en-->wireless/mobile connectivity and management applications.<!--:--><!--:he-->קישור אלחוטי / נייד ואפליקציות ניהול.<!--:-->'); ?>
			</div>
			<div id="aboutus_footer-description">
				<?php echo get_field( "aboutus_footer" );  ?>
			</div>
		</div>
			
				

						
				
			</div>
			<!-- /.post-content -->
		
			</div><!-- /.type-page -->
		<?php endwhile; endif; ?>
		
		<?php 
		/////////////////////////////////////////////
		// Query Category							
		/////////////////////////////////////////////
		?>

        <?php wp_reset_query(); ?>
		<?php themify_content_end(); // hook ?>
	</div>
	<!-- /content -->
    <?php themify_content_after(); // hook ?>

	<?php 
	/////////////////////////////////////////////
	// Sidebar							
	/////////////////////////////////////////////
	if ($themify->layout != "sidebar-none"): get_sidebar(); endif; ?>

</div>
<!-- /layout-container -->
	
<?php get_footer(); ?>