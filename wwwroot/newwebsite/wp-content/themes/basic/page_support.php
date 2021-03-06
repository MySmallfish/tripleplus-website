<?php get_header(); ?>

<?php 
/**
 * Template Name: page Support
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
	<div id="support_text_header">
            <?php echo get_field( "support_text_header" );  ?>
     </div>
      <div class="page-content entry-content" itemprop="articleBody">

        <?php the_content(); ?>
		<div id="support-container" class="row_inner">
		
        <div id="support_top_boxs" class="col3-1 first tb-column">
          <div id="support_top_boxs-title">

          </div>
          <div id="support_top_boxs-description">
			<?php	
	$post_object = get_field('support_top_boxs');
	if( $post_object ){	$post = $post_object;	setup_postdata( $post ); the_content(); wp_reset_postdata();} 
?>
          </div>
        </div>
	<div id="support_top_boxs2" class="col3-1 middle tb-column">
          <div id="support_top_boxs2-title">

          </div>
          <div id="support_top_boxs2-description">
			<?php	
	$post_object = get_field('support_top_boxs_2');
	if( $post_object ){	$post = $post_object;	setup_postdata( $post ); the_content(); wp_reset_postdata();} 
?>
          </div>
        </div>
	<div id="support_top_boxs3" class="col3-1 last tb-column">
          <div id="support_top_boxs3-title">

          </div>
          <div id="support_top_boxs3-description">
			<?php	
	$post_object = get_field('support_top_boxs_3');
	if( $post_object ){	$post = $post_object;	setup_postdata( $post ); the_content(); wp_reset_postdata();} 
?>
          </div>
        </div>
		</div>

		<div id="guides-container" class="row_inner"> 
		        <div id="guides" class="col4-2 first tb-column">
          <div id="guides-title" class="title-list">
            <p><?php _e('<!--:en-->Guides<!--:--><!--:he-->מדריכים<!--:-->'); ?></p>
			<hr>
          </div>
          <div id="guides-description">
            <?php $relateveGuides = get_field('guides');

	            if( $relateveGuides ): ?>
            <ul>
              <?php foreach( $relateveGuides as $p ): // variable must NOT be called $post (IMPORTANT) ?>
              <li>
                <?php //var_dump($p);?>
                <a href=""
                  <?php echo $p->guid; ?>"><?php echo get_the_title( $p->ID ); ?>
                </a>
              </li>
              <?php endforeach; ?>
            </ul>
            <?php endif; ?>
         
          </div>
        </div>
        <div id="catalogs_and_more" class="col4-2 last tb-column">
          <div id="catalogs_and_more-title" class="title-list">
            <p><?php _e('<!--:en-->Catalogs and more<!--:--><!--:he-->קטלוגים ועוד<!--:-->'); ?></p>
			<hr>
          </div>
          <div id="catalogs_and_more-description">
		              <?php $relateveCatalogs = get_field('catalogs_and_more');

	            if( $relateveCatalogs ): ?>
            <ul>
              <?php foreach( $relateveCatalogs as $p ): // variable must NOT be called $post (IMPORTANT) ?>
              <li>
                <?php //var_dump($p);?>
                <a href=""
                  <?php echo $p->guid; ?>"><?php echo get_the_title( $p->ID ); ?>
                </a>
              </li>
              <?php endforeach; ?>
            </ul>
            <?php endif; ?>
          </div>
		</div>


        </div>
        <div id="common_questions">
          <div id="common_questions-title">
            <?php _e('<!--:en-->Common questions<!--:--><!--:he-->שאלות נפוצות<!--:-->'); ?>
          </div>
          <div id="common_questions-description">
			<?php	
	$post_object = get_field('common_questions');
	if( $post_object ){	$post = $post_object;	setup_postdata( $post ); the_content(); wp_reset_postdata();} 
?>
          </div>
        </div>


      <div class="page-content entry-content" itemprop="articleBody">

		
		<div class="row_inner" id="contact_us_deatils-container">
        <div id="contact_us_deatils" class="col4-2 first tb-column">
          <div id="contact_us_deatils-title">
            <?php _e('<!--:en-->Contact us<!--:--><!--:he-->יצירת קשר<!--:-->'); ?>
          </div>
          <div id="contact_us_deatils-descriptionn">
			<?php	
	$post_object = get_field('support_contact_us');
	if( $post_object ){	$post = $post_object;	setup_postdata( $post ); the_content(); wp_reset_postdata();} 
?>

          </div>
        </div>
        <div id="contact_us_form" class="col4-2 last tb-column">
          <div id="contact_us_form-title">
            <?php // _e('<!--:en-->Contact us<!--:--><!--:he-->יצירת קשר<!--:-->'); ?>
          </div>
          <div id="contact_us_form-description">
			            <?php echo do_shortcode( get_field( "support_contact_form" ) );  ?>

          </div>
        </div>
		</div>





      </div>



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