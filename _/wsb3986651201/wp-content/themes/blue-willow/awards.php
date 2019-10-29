<?php
/*
Template Name: Awards
*/
?>
<?php get_header(); ?>
		<div id="content">
			<div class="single">
				<img src="<?php bloginfo('template_directory');?>/images/awards-wherelocal.jpg" alt="Where the Locals Eat" />
			</div>
			<div class="single">
			    <img src="<?php bloginfo('template_directory');?>/images/awards-tucson-lifestyle.jpg" alt="Tucson Lifestyle" />
			</div>
			<div class="single">
			    <img src="<?php bloginfo('template_directory');?>/images/awards-tucson-weekly.jpg" alt="Tucson Weekly" />
			</div>

			
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
