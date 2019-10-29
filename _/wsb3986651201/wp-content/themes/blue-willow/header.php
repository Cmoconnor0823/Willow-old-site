<!DOCTYPE html>
<html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php if (have_posts()) : while (have_posts()) : the_post();?><?php the_title();?> - <?php endwhile; endif; ?> <?php bloginfo('name');?></title>
<?php wp_enqueue_script("jquery"); ?>
<?php wp_head(); ?>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_directory' ); ?>/style.css" />
<script type="text/javascript">var $j = jQuery.noConflict();</script>
<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/jquery.cycle.all.js"></script>
<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/jquery.easing.1.1.1.js"></script>
<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/cycle_config.js"></script>
<script type="text/javascript">
$j(document).ready(function(){
    
    $j("tbody>tr:even").addClass("even");
    $j(".page-copy > ul > li:even").addClass("even");
    $j("tbody>tr").each(function(){
            $j(this).children("td").each(function(i){
                $j(this).addClass('cell-'+i);
                });
        });
    $j("thead>tr").each(function(){
            $j(this).children("th").each(function(i){
                $j(this).addClass('cell-'+i);
                });
        });
    
    
});
</script>

</head>
<body <?php body_class();?>>
    <div id="wrapper">
        <div id="container">
            <div id="header">
                    <?php $args = array(
                            'sort_column' => 'menu_order',
                            'menu_class'  => 'menu',
                            'include'     => '2,7,11',
                            'exclude'     => '',
                            'echo'        => true,
                            'show_home'   => true,
                            'link_before' => '',
                            'link_after'  => '' );
                    wp_page_menu($args);
                    ?>
                    <div class="clearfix">&nbsp;</div>
                    <div>
                        <div id="logo" class="col-300">
                            <a href="<?php bloginfo('url');?>"><img src="<?php bloginfo( 'template_directory' ); ?>/images/BlueWillow.png" alt="Blue Willow" /></a>
                        </div>
                        <div id="hours" class="col-620">
                        <?php
                        $id = 71;
                        $post = get_post($id,'');
                        print $post->post_content;
                        if ( is_user_logged_in() ) {
                            print '<p><a target="_blank" href="' . get_bloginfo('url') . '/wp-admin/post.php?post=' . $post->ID . '&action=edit'  . '">Edit</a></p>';
                        }
                        ?>
                        <!-- End #hours -->
                        </div>
                        <div class="clearfix" />&nbsp;</div> 
                </div>
            <!-- End header -->
            </div>

