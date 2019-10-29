<?php
/*
Template Name: Gifts
*/
?>
<?php get_header(); ?>
		<div id="content">
				<div class="single">
				    <img src="<?php bloginfo('template_directory');?>/images/bald-guy.jpg" alt="Cards"/>
				</div>
				<div class="single">
				    <img src="<?php bloginfo('template_directory');?>/images/gifts.jpg" alt="Gifts" />
				</div>
				<div class="single alpha">
				    <img src="<?php bloginfo('template_directory');?>/images/holly-yashi-necklace.jpg" alt="Jewelry" />
				</div>
		
			<div class="col-300 alpha page-copy">
				<?php
				$id = 57;
				$post = get_post($id,'');
				?>
				<h2><?php print $post->post_title ;?></h2>
				<?php print $post->post_content;?>
				<?php if(is_user_logged_in()&&current_user_can('edit_pages')) { ?><p><a target="_blank" href="<?php print bloginfo('url');?>/wp-admin/post.php?post=<?php print $id;?>&action=edit">Edit</a></p><? }?>
			</div>
			<div class="col-300 page-copy">
				<?php
				$id = 11;
				$post = get_post($id,'');
				?>
				<h2><?php print $post->post_title ;?></h2>
				<?php print $post->post_content;?>
				<?php if(is_user_logged_in()&&current_user_can('edit_pages')) { ?><p><a target="_blank" href="<?php print bloginfo('url');?>/wp-admin/post.php?post=<?php print $id;?>&action=edit">Edit</a></p><? }?>
			</div>
			<div class="col-300 page-copy">
				<?php
				$id = 59; // Jewelry Page post_id
				$post = get_post($id,'');
				?>
				<h2><?php print $post->post_title ;?></h2>
				<?php print $post->post_content;?>
				<?php if(is_user_logged_in()&&current_user_can('edit_pages')) { ?><p><a target="_blank" href="<?php print bloginfo('url');?>/wp-admin/post.php?post=<?php print $id;?>&action=edit">Edit</a></p><? }?>
			</div>
<?php get_footer(); ?>
