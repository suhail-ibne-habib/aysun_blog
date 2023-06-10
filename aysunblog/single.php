<?php 
/**
 * The template for displaying all single posts
 *
 */
    get_header();
?>
    <div class="container">
        <div class="blog-single-page">
            <div class="content">


                <?php while(have_posts()){
                    the_post();
                
                ?>

                <div class="post-body">
                    <div class="post-header">

                        <div class="thumb">
                            <?php 
                                $thumb = get_the_post_thumbnail_url();

                                if(!$thumb ){
                                    $thumb = get_template_directory_uri()."/assets/imgs/fallback.jpg";;
                                }
                            ?>
                            <img src="<?php echo $thumb; ?>" alt="post_thumb" />
                        </div>
                        <div class="flex direction-column justify-center align-end">
                            <ul class="cats">
                                <!-- <li class="cat"><a href="#">Travel</a></li> -->
                                <?php 
                                    the_tags('<li class="cat">', '</li><li class="cat">', '</li>');
                                ?>
                            </ul>
                            <span class="article-meta">
                                <?php the_date(); ?>
                            </span>
                            <p class="article-meta"> 
                                <?php comments_number(); ?> 
                            </p>
                            <div class="article-footer">
                                <?php 
                                    $user = wp_get_current_user();
                                    $url = get_avatar_url($user->ID); 
                                ?>
                                <div class="article-author flex align-center justify-between">
                                    <img class="author-thumb" src="<?php echo $url; ?>" alt="">
                                    <h4 class="author-name"><?php the_author(); ?></h4>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="spacer"></div>
                    <h2 class="article-title"><?php the_title(); ?></h2>
                    <p>
                        <?php 
                            the_content();
                        ?>
                    </p>
                    <?php wp_link_pages( array(
                        'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'aysun-blog' ) . '</span>',
                        'after'       => '</div>',
                        'link_before' => '<span>',
                        'link_after'  => '</span>',
                        ) );
                    ?>
                </div>

                <?php
                    }
                ?>
                <!-- The comments -->
                <?php
                    if(comments_open()){
                        comments_template();
                    }
                ?>

            </div>
            <div class="sidebar">
                <div class="box yellow p-2">
                    <h2 class="top">Recent Posts</h2>
                    <ul class="lists">
                        <?php 
                            $query = new WP_Query(array(
                                'post_type' => 'post',
                            ));
                            if($query->have_posts()){
                                while($query->have_posts()){
                                    $query->the_post(); ?>
                                    <li class="list flex gap-20">
                                        <div class="pst-thumb round-thumb">
                                            <?php 
                                                $thumb = get_the_post_thumbnail_url();

                                                if(!$thumb ){
                                                    $thumb = get_template_directory_uri()."/assets/imgs/fallback.jpg";;
                                                }
                                            ?>
                                            <img src="<?php echo $thumb; ?>" alt="thumb" />
                                        </div>
                                        <div class="pst-wrap">
                                            <a href="<?php echo get_the_permalink(); ?>" class="pst-title"><?php the_title(); ?></a>
                                            <span class="date"><?php echo get_the_date(); ?></span>
                                        </div>
                                    </li>
                        <?php   }
                            }
                         ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

<?php
    get_footer();
?>