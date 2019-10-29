<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage 
 * @since 
 */

get_header(); ?>

		<div id="content">
			
			<div id="sidebar-nav" class="col-300">&nbsp;</div>
			<div class="col-620 page-copy">
				
				 <h2 style="margin-top:22px;">404 - Page not found</h2>
				 <div>
				  <p>We've recently updated our site. The content you're looking for has most likely moved to a different page. Please select one of the pages below or
				  <a href="/about/contact-us">contact us.</a></p>
				  				<ul>
				<?php
				$args = array(
						'title_li'=>'',
						'link_before'=>'<span>',
						'link_after'=>'</span>',
						'exclude'=>'57,59,71,317,319,321'
					      );
				wp_list_pages($args);?>
				</ul>
				 </div>
				
		</div>

<?php get_footer(); ?>