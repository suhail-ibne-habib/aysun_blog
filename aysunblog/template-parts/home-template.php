<div class="posts">

    <?php 
        if(have_posts()){
            while(have_posts()){
                the_post(); ?>

                <div class="article-wrap">
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <?php 
                            $thumb = get_the_post_thumbnail_url();

                            if(!$thumb ){
                                $thumb = get_template_directory_uri()."/assets/imgs/fallback.jpg";;
                            }
                        ?>
                        <div class="thumb-wrap" style="background-image: url(<?php echo $thumb; ?>);">
                            <ul class="cats flex align-center">
                                <?php 
                                    $tags = get_the_tags();
                                    if($tags){
                                        $tags = array_slice($tags, 0, 3);
                                    }
                                    if($tags){
                                        foreach($tags as $tag){
                                            $tag_link = get_tag_link($tag->term_id);
                                            echo '<li class="cat"><a href="'.esc_url($tag_link).'">'.$tag->name.'</a></li>';
                                        }
                                    }
                                ?>
                            </ul>
                            <h2 class="article-title flex justify-center align-center">
                                <a href="<?php the_permalink(); ?>"><?php 
                                    $title = get_the_title();
                                    $title = str_replace( 'with', '<em>with</em>', $title );
                                    $title = str_replace( 'markup', '<strong>markup</strong>', $title );
                                    $title = str_replace( 'up', '<sup>up</sup>', $title );
                                    $limited_title = substr($title, 0, 25);
                                    if (strlen($title) > 25) {
                                        $limited_title .= '...';
                                    } 
                                    echo $limited_title;
                                ?></a>
                            </h2>
                        </div>
                        <div class="article-content">
                            <div class="flex justify-between gap-5">
                                <span class="article-meta"><?php the_date(); ?></span>
                                <span class="article-meta"><?php echo get_comments_number(); ?> comments</span>
                            </div>
                            <p class="article-summary">
                                <?php
                                    the_excerpt();
                                ?>
                            </p>
                            <div class="article-footer flex align-center justify-between">
                                <div class="article-author flex align-center justify-between">
                                    <?php 
                                        $user = wp_get_current_user();
                                        $avatar = get_avatar_url($user->ID);
                                    ?>
                                    <img class="author-thumb" src="<?php echo $avatar; ?>" alt="">
                                    <a href="<?php echo get_author_posts_url($user->ID) ?>" class="author-name"><?php the_author(); ?></a>
                                </div>
                                <a href="<?php echo get_the_permalink(); ?>" class="read-more">Continue Reading</a>
                            </div>
                        </div>
                        
                    </article>
                </div>

    <?php  }
        }

    ?>

</div>

<?php 
    the_posts_pagination();
?>