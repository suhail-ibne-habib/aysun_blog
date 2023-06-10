<?php 
/**
 * The template for displaying search results pages
 *
 */
    get_header();
?>

        <div class="container">
            <h3 class="search-text">Search Results for "<?php echo get_search_query(); ?>"</h3>
            <div class="posts">
                    <?php 

                        if(have_posts()){
                            while(have_posts()){
                                the_post(); ?>
                                <div class="article-wrap">
                                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                                    <div class="thumb-wrap" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
                                        <ul class="cats flex align-center">
                                            <?php the_tags('<li class="cat">','</li><li class="cat">', '</li>') ?>
                                        </ul>
                                        <h2 class="article-title flex justify-center align-center">
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
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
                        <?php }
                        }
                    ?>
            </div>
        </div>


<?php
    get_footer();
?>