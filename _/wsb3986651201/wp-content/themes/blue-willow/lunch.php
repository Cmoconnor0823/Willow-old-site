<?php
/*
Template Name: Lunch
*/
?>
<?php get_header(); ?>
		<div id="content">
			<div class="single">
			    <img src="<?php bloginfo('template_directory');?>/images/quiche-0529.jpg" alt="Quiche" />
			    </div>
			<div class="double">
			    <img src="<?php bloginfo('template_directory');?>/images/spinach-salad-wide.jpg" alt="Spinach Salad" />
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
