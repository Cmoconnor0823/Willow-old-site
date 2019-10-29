<?php
/*
Template Name: About
*/
?>
<?php get_header(); ?>
		<div id="content">
			<div class="single">
				<img src="<?php bloginfo('template_directory');?>/images/blue-muffin-0278.jpg" alt="Muffin" />
			</div>
			<div class="single">
			    <img src="<?php bloginfo('template_directory');?>/images/patio-v-0062.jpg" alt="Patio" />
			</div>
			<div class="single">
			    <img src="<?php bloginfo('template_directory');?>/images/bw-special-062.jpg" alt="Blue Willow Special" />
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
