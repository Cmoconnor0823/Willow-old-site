<?php
/*
Template Name: Breakfast/Lunch
*/
?>
<?php get_header(); ?>
		<div id="content">
			<div class="single">
			    <img src="<?php bloginfo('template_directory');?>/images/huevos-rancheros-0749.jpg" alt="Ruevos Rancheros" />
			    </div>
			<div class="double">
			    <img src="<?php bloginfo('template_directory');?>/images/bws-0563.jpg" alt="Blue Willow Special" />
			    </div>
			
			    <div id="sidebar-nav" class="col-300">
				<ul>
				<?php
				$args = array(
						'title_li'=>'',
						'link_before'=>'<span>',
						'link_after'=>'</span>',
						'include'=>'7'
					      );
				wp_list_pages($args);
				$args = array(
						'title_li'=>'',
						'link_before'=>'<span>',
						'link_after'=>'</span>',
						'child_of'=>'7'
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
