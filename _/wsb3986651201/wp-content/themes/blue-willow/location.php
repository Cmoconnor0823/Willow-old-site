<?php
/*
Template Name: Location
*/
?>
<?php get_header(); ?>
		<div id="content">
			
			<iframe class="google" frameborder="0" scrolling="no" marginheight="0"
marginwidth="0"
src="<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d26994.025913319925!2d-110.94192047736334!3d32.25126800254804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sblue+willow+map!5e0!3m2!1sen!2sus!4v1525814001885" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>"></iframe><br
/>
			
			    <div id="sidebar-nav" class="col-300">
				<ul>
				<?php
				$args = array(
						'title_li'=>'',
						'link_before'=>'<span>',
						'link_after'=>'</span>',
						'include'=>'2'
					      );
				wp_list_pages($args);
				$args = array(
						'title_li'=>'',
						'link_before'=>'<span>',
						'link_after'=>'</span>',
						'child_of'=>'2'
					      );
				wp_list_pages($args);?>
				</ul>
			    </div>
			<div class="col-620 page-copy">
			 <?php if (have_posts()) : while (have_posts()) : the_post();?>
				 <h2><?php the_title();?></h2>
				 <div>
				  <?php the_content(); ?>
				 </div>
				<?php endwhile; endif; ?>
				<?php edit_post_link('Edit this page', '<p>', '</p>'); ?>

		</div>
<?php get_footer(); ?>
