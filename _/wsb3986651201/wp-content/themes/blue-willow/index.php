<?php get_header();?>
            <div id="content">
                <div class="col-620" id="lrg-image">
                    <a href="<?php bloginfo( 'url' ); ?>/food"><img src="<?php bloginfo( 'template_directory' ); ?>/images/cheese-0012.jpg" alt="Fruit &amp; Cheese" /></a>
                    <a href="<?php bloginfo( 'url' ); ?>/food"><img src="<?php bloginfo( 'template_directory' ); ?>/images/salmon-0857.jpg"   alt="Salmon" /></a>
                    <a href="<?php bloginfo( 'url' ); ?>/about"><img src="<?php bloginfo( 'template_directory' ); ?>/images/home-patio-h-0092.jpg" alt="patio" /></a>
                    <a href="<?php bloginfo( 'url' ); ?>/food"><img src="<?php bloginfo( 'template_directory' ); ?>/images/web-wide-choc-sour-cream.jpg" width="618" height="345" alt="Chocolate Sour Cream Cake" /></a>
                </div>
                <div id="sml-image" class="col-300">
                    <a href="<?php bloginfo( 'url' ); ?>/about"><img src="<?php bloginfo('template_directory');?>/images/patio-v-0062.jpg" alt="Patio"  /></a>
                    <a href="<?php bloginfo( 'url' ); ?>/food"><img src="<?php bloginfo('template_directory');?>/images/home-pancakes.jpg" alt="Pancakes"  /></a>
                    <a href="<?php bloginfo( 'url' ); ?>/food"><img src="<?php bloginfo('template_directory');?>/images/salmon-cakes-0611.jpg" alt="Salmon Cakes"  /></a>
                    </div>
                <div class="col-300">
                        <?php
                        $id = 317;
                        $post = get_post($id,'');
                        print $post->post_content;
                        if ( is_user_logged_in() ) {
                            print '<p><a target="_blank" href="wp-admin/post.php?post=' . $post->ID . '&action=edit'  . '">Edit</a></p>';
                        }
                        ?>
                </div>
                <div class="col-300">
                        <?php
                        $id = 319;
                        $post = get_post($id,'');
                        print $post->post_content;
                        if ( is_user_logged_in() ) {
                            print '<p><a target="_blank" href="wp-admin/post.php?post=' . $post->ID . '&action=edit'  . '">Edit</a></p>';
                        }
                        ?>
                </div>
                <div class="col-300">
                                        <?php
                        $id = 321;
                        $post = get_post($id,'');
                        print $post->post_content;
                        if ( is_user_logged_in() ) {
                            print '<p><a target="_blank" href="wp-admin/post.php?post=' . $post->ID . '&action=edit'  . '">Edit</a></p>';
                        }
                        ?>
                </div>
                
<?php get_footer();?>