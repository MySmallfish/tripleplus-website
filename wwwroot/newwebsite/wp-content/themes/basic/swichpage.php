<?php get_header(); ?>

<?php 
/**
 * Template Name: swichPage
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
global $themify; ?>

<!-- layout-container -->
<div id="layout" class="pagewidth clearfix">

  <?php themify_content_before(); // hook ?>
  <!-- content -->
  <div id="content" class="clearfix">


    <?php themify_content_start(); // hook ?>



    <?php 
		/////////////////////////////////////////////
		// SLIDER					
		/////////////////////////////////////////////
		$currentLanguage = qtranxf_getLanguage();
		if($currentLanguage == 'he') {
		query_posts( 'page_id=4414' );
		}
		elseif($currentLanguage == 'en'){
			query_posts( 'page_id=4435' );
		}
		else{
			query_posts( 'page_id=4435' );
		}
		if (have_posts()) the_post();
		?>

    <div id="page-<?php the_ID(); ?>" class="type-page" itemscope itemtype="http://schema.org/Article">

      <div class="page-content entry-content" itemprop="articleBody">
        <div id="slide_ss">
          <?php 
		the_content();
		wp_reset_query();
		?>
        </div>

      </div>
      <!-- /.post-content -->

    </div>
    <!-- /.type-page -->


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