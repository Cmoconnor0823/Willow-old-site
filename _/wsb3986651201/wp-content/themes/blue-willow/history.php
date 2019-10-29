<?php
/*
Template Name: History
*/
?>
<?php get_header(); ?>
		<div id="content">
			<div class="single">
				<img title="1" src="<?php bloginfo('template_directory');?>/images/j_and_r.jpg" alt="Janet and Rebecca" />
			</div>
			<div class="double">
			    <img src="<?php bloginfo('template_directory');?>/images/history-1940-house.jpg" alt="Original House, 1940" />
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
