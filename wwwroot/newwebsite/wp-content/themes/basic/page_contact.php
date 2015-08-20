<?php get_header(); ?>

<?php 
/**
 * Template Name: page Contact us
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
		// 404							
		/////////////////////////////////////////////
		if(is_404()): ?>
    <h1 class="page-title" itemprop="name">
      <?php _e('404','themify'); ?>
    </h1>
    <p>
      <?php _e( 'Page not found.', 'themify' ); ?>
    </p>
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
      <h1 class="page-title" itemprop="name">
        <?php //the_title(); ?>
      </h1>
      <?php endif; ?>
      <!-- /page-title -->
	<div id="contact_text_header">
            <?php echo get_field( "contact_text_header" );  ?>
     </div>
      <div class="page-content entry-content" itemprop="articleBody">

        <?php the_content(); ?>
		<div class="row_inner" id="contact_us_deatils-container">
        <div id="contact_us_deatils" class="col4-2 first tb-column">
          <div id="contact_us_deatils-title">
            <?php _e('<!--:en-->Contact us<!--:--><!--:he-->יצירת קשר<!--:-->'); ?>
          </div>
          <div id="contact_us_deatils-descriptionn">
            <?php echo get_field( "contact_us_deatils" );  ?>
          </div>
        </div>
        <div id="contact_us_form" class="col4-2 last tb-column">
          <div id="contact_us_form-title">
            <?php // _e('<!--:en-->Contact us<!--:--><!--:he-->יצירת קשר<!--:-->'); ?>
          </div>
          <div id="contact_us_form-description">
            <?php echo get_field( "contact_us_form" );  ?>
          </div>
        </div></div>





      </div>
      <!-- /.post-content -->

    </div>
    <!-- /.type-page -->
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